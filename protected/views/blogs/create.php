<?php
/* @var $this BlogsController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blog'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Blog', 'url'=>array('index')),
	array('label'=>'Administrar Blog', 'url'=>array('admin')),
);
?>

<h1>Crear Blog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>