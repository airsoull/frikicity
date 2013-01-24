<?php
/* @var $this ImagenesSliceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagenes Slices',
);

$this->menu=array(
	array('label'=>'Crear Imagenes Slice', 'url'=>array('create')),
	array('label'=>'Administrar Imagenes Slice', 'url'=>array('admin')),
);
?>

<h1>Imagenes Slices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
