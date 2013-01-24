<?php
class BuscarController extends Controller
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
    	if(isset($_GET['busqueda']) && !empty($_GET['busqueda'])){
        	$q=$_GET['busqueda'];
        	

        	$criteria = new CDbCriteria();
            $criteriaM = new CDbCriteria();
                
        	$criteria->compare('nombre', $q, true, 'OR');
        	$criteria->compare('descripcion', $q, true, 'OR');
            $criteria->compare('descripcionGeneral', $q, true, 'OR');
        	$criteria->order='precio asc';

        	$criteriaM->compare('nombre', $q, true, 'OR');
        	$criteriaM->compare('descripcion', $q, true, 'OR');
            $criteriaM->compare('descripcionGeneral', $q, true, 'OR');
        	$criteriaM->group='id_modelo';
            #$criteriaM->order = 't3.orden asc';

        
        	$productos = new Productos;
        	$model = new CActiveDataProvider($productos, array('criteria'=>$criteria));
        	$modelo = new CActiveDataProvider($productos, array('criteria'=>$criteriaM));

        	$this->render('index', array('model'=>$model, 'modelo'=>$modelo));
    	}else{
    		$this->redirect('index.php');
    	}
    }
}
?>