<?php
/* @var $this ImagenesPequeniasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagenes Pequeñas',
);

$this->menu=array(
	array('label'=>'Crear Imagenes Pequeñas', 'url'=>array('create')),
	array('label'=>'Administrar Imagenes Pequeñas', 'url'=>array('admin')),
);
?>

<h1>Imagenes Pequeñas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
