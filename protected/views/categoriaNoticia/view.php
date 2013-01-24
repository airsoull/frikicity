<?php
/* @var $this CategoriaNoticiaController */
/* @var $model CategoriaNoticia */

$this->breadcrumbs=array(
	'Categoría Noticias'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Categoría Noticia', 'url'=>array('index')),
	array('label'=>'Crear Categoría Noticia', 'url'=>array('create')),
	array('label'=>'Actualizar Categoría Noticia', 'url'=>array('update', 'id'=>$model->id_categoria_noticia)),
	array('label'=>'Eliminar Categoría Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoria_noticia),'confirm'=>'Esta seguro de eliminar este elemento?')),
	array('label'=>'Administrar Categoría Noticia', 'url'=>array('admin')),
);
?>

<h1>Categoría Noticia: <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_categoria_noticia',
		'nombre',
		'descripcion',
	),
)); ?>
