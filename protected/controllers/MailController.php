<?php

class MailController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'mailmasivo', 'mail'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			$this->setTheme(),
		));
	}

	public function actionMailmasivo(){
		$model = new Mail;
		$this->performAjaxValidation($model);
		if (isset($_POST['Mail'])) {
			$model->attributes=$_POST['Mail'];
			$pagina = Pagina::model()->find();
			$mail = $_POST['Mail'];
			$mensaje = $mail['mensaje'];

			$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
			$mailer->setFrom($pagina->mailMasivo, $pagina->nombre);
			$mailer->Subject = $mail['asunto'];

			if(!isset($mail['id_envioespecial'])){
				//No envio especial

				$cuentas = $model->model()->findAll('id_enviar = 1');
				foreach($cuentas as $c)
				{
					$mailer->AddAddress($c->mail); //A quien se envia
					$contenido = $this->renderPartial('mail',array('mensaje'=>$mensaje, 'nombre'=>$c->nombre, 'id_mail'=>$c->id_mail),true);
					$mailer->MsgHTML($contenido);
					$mailer->Send();
				}
	

			}else {
				//Si envio especial

				$cuentas = $model->model()->findAll("id_envioespecial =".$mail['id_envioespecial']);
				foreach($cuentas as $c)
				{
					$mailer->AddAddress($c->mail); //A quien se envia
					$contenido = $this->renderPartial('mail',array('mensaje'=>$mensaje, 'nombre'=>$c->nombre),true);
					$mailer->MsgHTML($contenido);
					$mailer->Send();
				}
			}

			

		}
		$this->render('mailmasivo',array('model'=>$model,
			$this->setTheme(),
		));
	}

	public function actionMail(){
		$mensaje = "lalal";
		$this->render('mail',array('mensaje'=>$mensaje));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Mail;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Mail']))
		{
			$model->attributes=$_POST['Mail'];
			$model->setAttribute('asunto','ninguno');
			$model->setAttribute('mensaje','ninguno');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mail));
		}

		$this->render('create',array(
			'model'=>$model,
			$this->setTheme(),
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

		if(isset($_POST['Mail']))
		{
			$model->attributes=$_POST['Mail'];
			$model->setAttribute('asunto','ninguno');
			$model->setAttribute('mensaje','ninguno');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mail));
		}

		$this->render('update',array(
			'model'=>$model,
			$this->setTheme(),
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
		$dataProvider=new CActiveDataProvider('Mail');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			$this->setTheme(),
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Mail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mail']))
			$model->attributes=$_GET['Mail'];

		$this->render('admin',array(
			'model'=>$model,
			$this->setTheme(),
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Mail::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='mail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
