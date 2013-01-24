<?php
/* @var $this BlogsController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blog'=>array('index'),
	$model->id_blog,
);

$this->menu=array(
	array('label'=>'Listar Blog', 'url'=>array('index')),
	array('label'=>'Crear Blog', 'url'=>array('create')),
	array('label'=>'Actualizar Blog', 'url'=>array('update', 'id'=>$model->id_blog)),
	array('label'=>'Borrar Blog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_blog),'confirm'=>'Esta seguro que quiere eliminar este elemento?')),
	array('label'=>'Administrar Blog', 'url'=>array('admin')),
);
?>

<h1>Blog <?php echo $model->titulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_blog',
		'titulo',
		#'url',
		'imagen',
		#'noticia',
		#'noticia_general',
		#'fecha',
		array(
			'name'=>'fecha',
			'value'=>$this->fecha($model->fecha),
		),
		#'activa',
		array(
			'name'=>'activa',
			'value'=>$model->activa0->descripcion,
		),
		#'id_categoria_noticia',
		array(
			'name'=>'id_categoria_noticia',
			'value'=>$model->idCategoriaNoticia->nombre,
		),
	),
)); ?>
