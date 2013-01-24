<?php
/* @var $this CategoriaNoticiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoria Noticias',
);

$this->menu=array(
	array('label'=>'Crear CategoriaNoticia', 'url'=>array('create')),
	array('label'=>'Administrar CategoriaNoticia', 'url'=>array('admin')),
);
?>

<h1>Categoría Noticias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
