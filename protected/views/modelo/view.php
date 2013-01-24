<?php
/* @var $this ModeloController */
/* @var $model Modelo */

$this->breadcrumbs=array(
	'Modelo'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Modelo', 'url'=>array('index')),
	array('label'=>'Crear Modelo', 'url'=>array('create')),
	array('label'=>'Actualizar Modelo', 'url'=>array('update', 'id'=>$model->id_modelo)),
	array('label'=>'Borrar Modelo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_modelo),'confirm'=>'Esta seguro de eliminar este elemento?')),
	array('label'=>'Administrar Modelo', 'url'=>array('admin')),
);
?>

<h1>Modelo <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_modelo',
		'nombre',
		'descripcion',
		'orden',
	),
)); ?>
