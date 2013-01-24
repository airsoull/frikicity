<?php
class BlogController extends Controller
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
				'actions'=>array('index', 'view', 'categoria', 'buscar'),
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
        $criteria=new CDbCriteria();
        $criteria->condition = 'activa = 1';
        $criteria->order='id_blog desc';
        $count=Blog::model()->count($criteria);
        $pages=new CPagination($count);

        $pages->pageSize=10;
        $pages->applyLimit($criteria);
        /*
    	$model = Blog::model()->findAll(array(
    		'condition'=>'activa = 1',
    		'order'=>'id_blog desc',
    	));*/
        $model = Blog::model()->findAll($criteria);
    	$buscar = false;
		$this->render('index', array('model'=>$model, 'buscar'=>$buscar, 'pages'=>$pages));
    }

    public function actionView($id){
    	$model = Blog::model()->find(array(
    		'condition'=>'activa = :y and url = :x',
    		'params'=>array('y'=>'1', 'x'=>$id),
    	));
    	$this->render('_vista', array('model'=>$model));
    }

    public function actionCategoria($id){

        $criteria=new CDbCriteria();
        $criteria->condition = 'activa = 1 and id_categoria_noticia = '.$id;
        $criteria->order='id_blog desc';
        $count=Blog::model()->count($criteria);
        $pages=new CPagination($count);

        $pages->pageSize=10;
        $pages->applyLimit($criteria);
        
        $model = Blog::model()->findAll($criteria);
        $buscar = false;
        /*
    	$model = Blog::model()->findAll(array(
    		'condition'=>'activa = :y and id_categoria_noticia = :x',
    		'order'=>'id_blog desc',
    		'params'=>array('y'=>'1', 'x'=>$id),
    	));
    	$buscar = false; */
    	$this->render('index', array('model'=>$model, 'buscar'=>$buscar, 'pages'=>$pages));
    }

    public function actionBuscar(){
    	if(isset($_GET['busqueda']) && !empty($_GET['busqueda'])){
    		$q=$_GET['busqueda'];

    		$criteria = new CDbCriteria();
                
            #$criteria->condition='activa = 1';
        	$criteria->compare('titulo', $q, true, 'OR');
        	$criteria->compare('noticia', $q, true, 'OR');
            $criteria->compare('noticia_general', $q, true, 'OR');
            $criteria->compare('activa', '2', false, 'OR');
        	$criteria->order='id_blog desc';
            $count=Blog::model()->count($criteria);
            $pages=new CPagination($count);

            $pages->pageSize=10;
            $pages->applyLimit($criteria);

        	$productos = new Blog;
        	$model = new CActiveDataProvider($productos, array('criteria'=>$criteria));
        	$buscar = true;
        	$this->render('index', array('model'=>$model, 'buscar'=>$buscar, 'q'=>$q, 'pages'=>$pages));
    	}
    }



    public function bbcode($texto){

        $text = null;
        $text = str_replace('[img]', '<img class="scale-with-grid" src="', $texto);
        $text = str_replace('[/img]', '">', $text);
        /*
        preg_match("/[\\?\\&]v=([^\\?\\&]+)/", $text, $matches);
        foreach ($matches as $key => $value) {
            echo $key.' '.$value.'<br>';
        }*/
        
        $text = str_replace('[video]', '<div class="video-container"><iframe src="', $text);
        $text = str_replace('[/video]', '" frameborder="0" width="560" height="315"></iframe></div>', $text);
        

        $text = str_replace('[url="', '<a href="', $text);
        $text = str_replace('"]', '">', $text);
        $text = str_replace('[/url]', '</a>', $text);

        return $text;

    }



}
?>