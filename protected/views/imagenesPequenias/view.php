<?php
/* @var $this ImagenesPequeniasController */
/* @var $model ImagenesPequenias */

$this->breadcrumbs=array(
	'Imagenes Pequeñas'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Imagenes Pequeñas', 'url'=>array('index')),
	array('label'=>'Crear Imagenes Pequeñas', 'url'=>array('create')),
	array('label'=>'Actualizar Imagenes Pequeñas', 'url'=>array('update', 'id'=>$model->id_imagenes_pequenias)),
	array('label'=>'Borrar Imagenes Pequeñas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_imagenes_pequenias),'confirm'=>'Seguro que dese eliminar este elemento?')),
	array('label'=>'Administrar Imagenes Pequeñas', 'url'=>array('admin')),
);
?>

<h1>Imagen Pequeña <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_imagenes_pequenias',
		'imagen',
		'nombre',
		'descripcion',
		#'tipo',
		array(
			'name'=>'tipo',
			'value'=>$model->tipo == 1 ? 'Categoría' : 'Producto',
		),
		#'id_tipo',
		array(
			'name'=>'id_tipo',
			'value'=>$model->tipo == 1 ? $model->categoria->nombre : $model->producto->nombre,
		),
	),
)); ?>
