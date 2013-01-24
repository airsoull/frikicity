<?php
/* @var $this EnvioespecialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Envio Especial',
);

$this->menu=array(
	array('label'=>'Crear Envio Especial', 'url'=>array('create')),
	array('label'=>'Administrar Envio Especial', 'url'=>array('admin')),
);
?>

<h1>Envio Especial</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
