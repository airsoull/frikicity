<?php
/* @var $this MenuController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Crear Menú', 'url'=>array('create')),
	array('label'=>'Administrar Menú', 'url'=>array('admin')),
);
?>

<h1>Menú</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
