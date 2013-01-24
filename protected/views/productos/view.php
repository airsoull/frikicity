<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Actualizar Productos', 'url'=>array('update', 'id'=>$model->id_productos)),
	array('label'=>'Borrar Productos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_productos),'confirm'=>'Desea eliminar este elemento?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Productos <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_productos',
		'nombre',
		'descripcion',
		#'precio',
		array(
			'name'=>'precio',
			'value'=>'$'.number_format($model->precio),
		),
		'imagen',
		#'id_categoria',
		array(
			'name'=>'id_categoria',
			'value'=>$model->idCategoria->nombre,
		),
		#'id_modelo',
		array(
			'name'=>'id_modelo',
			'value'=>$model->idModelo->nombre,
		),
		array(
			'name'=>'stock',
			'value'=>$model->idEnviar->descripcion,
		),
	),
)); ?>
