<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menú'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Menú', 'url'=>array('index')),
	array('label'=>'Crear Menú', 'url'=>array('create')),
	array('label'=>'Actualizar Menú', 'url'=>array('update', 'id'=>$model->id_menu)),
	array('label'=>'Borrar Menú', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_menu),'confirm'=>'Está seguro de eliminar este elemento?')),
	array('label'=>'Administrar Menú', 'url'=>array('admin')),
);
?>

<h1>Menú <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_menu',
		'nombre',
		'descripcion',
	),
)); ?>
