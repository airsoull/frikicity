<?php
/* @var $this CategoriaNoticiaController */
/* @var $model CategoriaNoticia */

$this->breadcrumbs=array(
	'Categoría Noticias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Categoría Noticia', 'url'=>array('index')),
	array('label'=>'Administrar Categoría Noticia', 'url'=>array('admin')),
);
?>

<h1>Crear Categoría Noticia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>