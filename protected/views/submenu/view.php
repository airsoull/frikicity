<?php
/* @var $this SubmenuController */
/* @var $model Submenu */

$this->breadcrumbs=array(
	'Submenú'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Submenú', 'url'=>array('index')),
	array('label'=>'Crear Submenú', 'url'=>array('create')),
	array('label'=>'Actualizar Submenú', 'url'=>array('update', 'id'=>$model->id_submenu)),
	array('label'=>'Borrar Submenú', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_submenu),'confirm'=>'Desea eliminar este elemento?')),
	array('label'=>'Administrar Submenú', 'url'=>array('admin')),
);
?>

<h1>Submenú <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_submenu',
		'nombre',
		'descripcion',
		array(
			'name'=>'id_menu',
			'value'=>$model->idMenu->nombre
		),
		#'id_menu',
		#'id_categoria',
		array(
			'name'=>'id_categoria',
			'value'=>$model->idCategoria->nombre
		),
	),
)); ?>
