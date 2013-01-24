<?php
/* @var $this BlogsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blog',
);

$this->menu=array(
	array('label'=>'Crear Blog', 'url'=>array('create')),
	array('label'=>'Administrar Blog', 'url'=>array('admin')),
);
?>

<h1>Blog</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
