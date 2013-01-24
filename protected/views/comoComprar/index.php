<?php
/* @var $this ComoComprarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Como Comprar',
);
/*
$this->menu=array(
	array('label'=>'Crear Como Comprar', 'url'=>array('create')),
	array('label'=>'Administrar Como Comprar', 'url'=>array('admin')),
);
*/
?>

<h1>Como Comprar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
