<?php
/* @var $this BlogsController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blog'=>array('index'),
	$model->id_blog=>array('view','id'=>$model->id_blog),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Blog', 'url'=>array('index')),
	array('label'=>'Crear Blog', 'url'=>array('create')),
	array('label'=>'Ver Blog', 'url'=>array('view', 'id'=>$model->id_blog)),
	array('label'=>'Administrar Blog', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->titulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>