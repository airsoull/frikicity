<?php
/* @var $this ModeloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Modelo',
);

$this->menu=array(
	array('label'=>'Crear Modelo', 'url'=>array('create')),
	array('label'=>'Administrar Modelo', 'url'=>array('admin')),
);
?>

<h1>Modelos</h1>

<?PHP echo CHtml::link('Restaurar orden', "orden"); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
