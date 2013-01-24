<?php
/* @var $this PaginaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagina',
);
/*
$this->menu=array(
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
*/
?>

<h1>Pagina</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
