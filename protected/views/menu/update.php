<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menú'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_menu),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Menú', 'url'=>array('index')),
	array('label'=>'Crear Menú', 'url'=>array('create')),
	array('label'=>'Ver Menú', 'url'=>array('view', 'id'=>$model->id_menu)),
	array('label'=>'Administrar Menú', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>