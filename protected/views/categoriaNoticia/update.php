<?php
/* @var $this CategoriaNoticiaController */
/* @var $model CategoriaNoticia */

$this->breadcrumbs=array(
	'Categoria Noticias'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_categoria_noticia),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Categoría Noticia', 'url'=>array('index')),
	array('label'=>'Crear Categoría Noticia', 'url'=>array('create')),
	array('label'=>'Ver Categoría Noticia', 'url'=>array('view', 'id'=>$model->id_categoria_noticia)),
	array('label'=>'Administrar Categoría Noticia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoría Noticia: <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>