<?php
/* @var $this Envio EspecialController */
/* @var $model Envio Especial */

$this->breadcrumbs=array(
	'Envio Especial'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Envio Especial', 'url'=>array('index')),
	array('label'=>'Crear Envio Especial', 'url'=>array('create')),
	array('label'=>'Actualizar Envio Especial', 'url'=>array('update', 'id'=>$model->id_envioespecial)),
	array('label'=>'Borrar Envio Especial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_envioespecial),'confirm'=>'Esta seguro de eliminar este elemento?')),
	array('label'=>'Administrar Envio Especial', 'url'=>array('admin')),
);
?>

<h1>Envio Especial <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_envioespecial',
		'nombre',
		'descripcion',
	),
)); ?>
