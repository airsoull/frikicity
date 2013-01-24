<?php
/**
 * EYuiSearch class file.
 *
 * Present a search widget jquery based and perform a search over selected data model.
 *
 * @author Christian Salazar <christiansalazarh@gmail.com>
 * @link https://bitbucket.org/christiansalazarh/eyui
 * @license http://opensource.org/licenses/bsd-license.php
 */
class EYuiSearch extends EYuiWidget implements EYuiActionRunnable {
	
	public $model;
	public $attribute;
	public $searchModel;
	public $attributes;
	public $searchLabel='Search:';
	public $searchTextButton='Search';
	public $okTextButton='Ok';
	public $action=null;
	
	public $id;
	public $cssClassname='eyuisearch';
	public $success='';
	public $error='';
	
	/*
	public function init(){
		$this->setDebug();
		parent::init();
	}
	*/
	
	public function run(){
		$id=($this->id != null) ? $this->id : "ejuisearch0";
		$cssClassName = ($this->cssClassname != null) ? "class='".$this->cssClassname."'" : '';
		$loadingImgTag = CHtml::image($this->getResource('loading.gif'));

		if(count($this->attributes) != 2){
			/*
				example:
				
				'attributes'=>array('idproduct','productname'),
			*/
			throw new Exception('\'attributes\' must be an array and must have two entries in order to acomplish CHtml::listData.',500);
		}
		
		$data = serialize(array('classname'=>get_class($this->searchModel)
			,'attributes'=>$this->attributes));
		
		$succFn = $this->success;
		if($succFn == '')
			$succFn = "function(id,txt){ }";
		$errFn = $this->error;
		if($errFn == '')
			$errFn = "function(e){ }";
		
		$action = $this->action != null ? $this->action : $this->defaultAction;
		// this parameter is need in EYuiAction, to provide a reference for this class
		// who is listening for action request redirected to this class via runAction method.
		$action .= "&classname=".__CLASS__;
		
		// model.attribute id to be setted via jquery whenever a user clics ok on a search 
		// result item.
		$modelAttributeId = get_class($this->model).'_'.$this->attribute;
		
		$layout = 
		"\n<div id='{$id}' {$cssClassName}>\n
			<div class='searchbar'>
				<span>{$this->searchLabel}</span>
				<input class='textinput' type='text'>
				<input class='button' type='button' value='{$this->searchTextButton}'>
				{$loadingImgTag}
			</div>\n
			<div class='resultsbar'>
				<select></select>
				<input class='button' type='button' value='{$this->okTextButton}'>
			</div>\n
		</div>\n\n"
		;
		
		echo $layout;
		
		Yii::app()->getClientScript()->registerScript(
			$id,
			"new EYuiSearch('{$id}','{$data}','{$action}',{$succFn},{$errFn},'{$modelAttributeId}');", 
			CClientScript::POS_LOAD
		);
	}
	
	/**
	* Method called whenever an EYui widget is invoked from an action int order to start a query.
	* invoked via jquery-ajax, by: eyuisearch.js
	* @see
	*	EYuiActionRunnable
	*	EYuiAction
	* @returns an array or any object. it will be converted in EYuiAction to a JSON representation.
	*/
	public function runAction($action,$data){
		$udata = unserialize($data);
		$this->searchModel = new $udata['classname'];
		$this->attributes = $udata['attributes'];
		
		$primaryKey = $this->attributes[0];
		$label = $this->attributes[1];
		
		Yii::log("runAction called action is:".$action,"info");
		if($action == 'search'){
			$searchText = $_GET['searchtext'];
			// perform a query to specified class name referenced by $this->searchModel
			// this class must implements:
			//	EYuiSearchable
			
			return CHtml::listData(
				$this->searchModel->eyuisearchable_findModels($searchText),
				$primaryKey,
				$label
			);
			
			/*
			$results = array();
			foreach($this->searchModel->eyuisearchable_findModels($searchText) as $model)
				$results[$model->getPrimaryKey()] = $model->__get('nombres');
			return $results;
			*/
		}
		return array();
	}
	
}