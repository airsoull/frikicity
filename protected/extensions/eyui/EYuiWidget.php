<?php 
/**
 * EYuiWidget class file.
 *
 *	Base class for all EYui Widgets.
 *
 * @author Christian Salazar <christiansalazarh@gmail.com>
 * @link https://bitbucket.org/christiansalazarh/eyui
 * @license http://opensource.org/licenses/bsd-license.php
 */
abstract class EYuiWidget extends CWidget {

	private $_baseUrl;
	private $_debug;
	private $_defaultAction='index.php?r=site/eyui';
	
	public function init(){	
		$this->registerCoreScripts();
		parent::init();
	}
	
	/**
	* Informs about _debug state. 
	* it produces registerCoreScripts to read assets directly from sources.
	*/
	public function getIsDebug(){
		return ($this->_debug==true);
	}
	/**
	* set debug mode.
	*/
	public function setDebug($flag=true){
		$this->_debug = $flag;
	}
	/**
	* returns the default action used for communication pruposes
	*/
	public function getDefaultAction(){
		return $this->_defaultAction;
	}
	
	/** 
	* Register the core scripts common for every extended widget from this class.
	* Registered: jQuery and assets directory.
	*/
	public function registerCoreScripts(){
		
		$localAssetsDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
		$this->_baseUrl = Yii::app()->getAssetManager()->publish($localAssetsDir);
		
        $cs = Yii::app()->getClientScript();
        $cs->registerCoreScript('jquery');
		
		if($this->isDebug){
			//$this->_baseUrl = $localAssetsDir;
			$this->_baseUrl = 'protected/extensions/EYui/assets';
		}
		
		foreach(scandir($localAssetsDir) as $f){
			if(strstr(strtolower($f),".js"))
				$cs->registerScriptFile($this->_baseUrl.DIRECTORY_SEPARATOR.$f);
			if(strstr(strtolower($f),".css"))
				$cs->registerCssFile($this->_baseUrl.DIRECTORY_SEPARATOR.$f);
		}
		
	}
	
	/**
		Helper method to provide a stored resource
	*/
	public function getResource($fileName){
		return $this->_baseUrl.DIRECTORY_SEPARATOR.$fileName;
	}
}