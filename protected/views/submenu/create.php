<?php
/* @var $this SubmenuController */
/* @var $model Submenu */

$this->breadcrumbs=array(
	'Submenú'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Submenú', 'url'=>array('index')),
	array('label'=>'Administrar Submenu', 'url'=>array('admin')),
);
?>

<h1>Crear Submenú</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>