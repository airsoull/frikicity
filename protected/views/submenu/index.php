<?php
/* @var $this SubmenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Submenú',
);

$this->menu=array(
	array('label'=>'Crear Submenú', 'url'=>array('create')),
	array('label'=>'Administrar Submenú', 'url'=>array('admin')),
);
?>

<h1>Submenú</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
