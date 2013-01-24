<?php
/* @var $this SubmenuController */
/* @var $model Submenu */

$this->breadcrumbs=array(
	'Submenú'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_submenu),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Submenú', 'url'=>array('index')),
	array('label'=>'Crear Submenú', 'url'=>array('create')),
	array('label'=>'Ver Submenú', 'url'=>array('view', 'id'=>$model->id_submenu)),
	array('label'=>'Administrar Submenú', 'url'=>array('admin')),
);
?>

<h1>Actualizar Submenú <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>