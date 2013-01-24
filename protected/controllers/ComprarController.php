<?php
class ComprarController extends Controller
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
                        /*
			array('deny', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','delete','index'),
				'users'=>array('*'),
			),
                         * 
                         */
			array('deny',  // deny all users
				'users'=>array('*'),
			),
                         
		);
    }
    
    public function actionIndex()
    {
    	$model = ComoComprar::model()->find();
		$this->render('index', array('modelo'=>$model));
    }
}
?>