<?php
/* @var $this CategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoría',
);

$this->menu=array(
	array('label'=>'Crear Categoría', 'url'=>array('create')),
	array('label'=>'Administrar Categoría', 'url'=>array('admin')),
);
?>

<h1>Categorías</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
