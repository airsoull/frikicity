<?php
/* @var $this ImagenesSliceController */
/* @var $model ImagenesSlice */

$this->breadcrumbs=array(
	'Imagenes Slices'=>array('index'),
	$model->descripcion,
);

$this->menu=array(
	array('label'=>'Listar ImagenesSlice', 'url'=>array('index')),
	array('label'=>'Crear ImagenesSlice', 'url'=>array('create')),
	array('label'=>'Actualizar ImagenesSlice', 'url'=>array('update', 'id'=>$model->id_imagenes_slice)),
	array('label'=>'Borrar ImagenesSlice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_imagenes_slice),'confirm'=>'Esta seguro de querer eliminar este elemento?')),
	array('label'=>'Administrar ImagenesSlice', 'url'=>array('admin')),
);
?>

<h1>Imagen Slice</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_imagenes_slice',
		'imagen',
		'descripcion',
		array(
			'name'=>'tipo',
			'value'=>$model->tipo == 1 ? 'Categoría' : 'Producto',
		),
		array(
			'name'=>'id_tipo',
			'value'=>$model->tipo == 1 ? $model->categoria->nombre : $model->producto->nombre,
		),
	),
)); ?>
