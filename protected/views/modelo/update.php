<?php
/* @var $this ModeloController */
/* @var $model Modelo */

$this->breadcrumbs=array(
	'Modelo'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_modelo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Modelo', 'url'=>array('index')),
	array('label'=>'Crear Modelo', 'url'=>array('create')),
	array('label'=>'Ver Modelo', 'url'=>array('view', 'id'=>$model->id_modelo)),
	array('label'=>'Administrar Modelo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Modelo <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>