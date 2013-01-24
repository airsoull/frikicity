<?php

class CategoriaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','index','ver'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$sql = 'select pro.id_modelo, (select nombre from pd_modelo where id_modelo = pro.id_modelo) as modelo , (select orden from pd_modelo where id_modelo = pro.id_modelo) as orden from pd_productos pro, pd_modelo where pro.id_categoria = '.$id.' group by pro.id_modelo order by orden, pro.id_modelo asc';
		$modelo=Yii::app()->db->createCommand($sql)->queryAll();


		$model = Productos::model()->findAll("id_categoria = $id order by precio");
		#$modelo = Productos::model()->findAll("id_categoria = $id GROUP BY id_modelo");
		$porcentaje = Pagina::model()->find();
		#$nombre = Categoria::model()->findAll("id_categoria = $id")->nombre;
		$this->render('productos', array(
			'model'=>$model, 
			'modelo'=>$modelo, 
			'porcentaje' => $porcentaje, 
			#'categoria'=>$nombre)
		));
	}


	public function actionVer($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			$this->setTheme()
		));
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Categoria;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Categoria']))
		{
			$model->attributes=$_POST['Categoria'];
			if($model->save())
				$this->redirect(array('ver','id'=>$model->id_categoria));
		}

		$this->render('create',array(
			'model'=>$model,
			$this->setTheme()
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Categoria']))
		{
			$model->attributes=$_POST['Categoria'];
			if($model->save())
				$this->redirect(array('ver','id'=>$model->id_categoria));
		}

		$this->render('update',array(
			'model'=>$model,
			$this->setTheme()
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Categoria');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			$this->setTheme()
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Categoria('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Categoria']))
			$model->attributes=$_GET['Categoria'];

		$this->render('admin',array(
			'model'=>$model,
			$this->setTheme()
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Categoria::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='categoria-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
