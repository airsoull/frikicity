<?php
class ContactoController extends Controller
{   
    
    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
    
    
    public function accessRules() {
        return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
                         
		);
    }
    
    public function actionIndex()
    {
    	$model = new Mail;
    	$pagina = Pagina::model()->find();
    	if(isset($_POST['Mail'])){
    		$this->performAjaxValidation($model);
    		$model->attributes=$_POST['Mail'];
    		$model->setAttribute('id_enviar', 1);
    		$model->setAttribute('id_envioespecial', 1);
    		$model->setAttribute('asunto', 'Ninguno');
    		$model->setAttribute('mail', $model->getAttribute('email'));
    		$contar = $model->count("mail = '".$model->getAttribute('mail')."'");
    		if($contar == 0){
    			if($model->save()){
						//Se guarda y se envia mail
				}else{
					#print_r($model->getErrors());
				}
			}
			$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
			$mailer->setFrom($model->getAttribute('mail'), $model->getAttribute('nombre'));// Quien lo envia
			$mailer->Subject = 'Contacto Pagina';
			$mailer->AddAddress($pagina->mail); //A quien se envia
			$mailer->Body = $model->getAttribute('mensaje');
			$mailer->Send();
			$this->render('index', array('model'=>$model, 'pagina'=>$pagina));
    	}

		$this->render('index', array('model'=>$model, 'pagina'=>$pagina));
    }

    protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pagina-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
?>