<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categoría'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Categoría', 'url'=>array('index')),
	array('label'=>'Crear Categoría', 'url'=>array('create')),
	array('label'=>'Actualizar Categoría', 'url'=>array('update', 'id'=>$model->id_categoria)),
	array('label'=>'Borrar Categoría', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoria),'confirm'=>'Desea eliminar este elemento?')),
	array('label'=>'Administrar Categoría', 'url'=>array('admin')),
);
?>

<h1>Categoría <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_categoria',
		'nombre',
		'descripcion',
	),
)); ?>
