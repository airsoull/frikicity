<?php
/* @var $this ComoComprarController */
/* @var $model ComoComprar */

$this->breadcrumbs=array(
	'Como Comprars'=>array('index'),
	$model->id_como_comprar,
);

$this->menu=array(
	array('label'=>'List ComoComprar', 'url'=>array('index')),
	array('label'=>'Create ComoComprar', 'url'=>array('create')),
	array('label'=>'Update ComoComprar', 'url'=>array('update', 'id'=>$model->id_como_comprar)),
	array('label'=>'Delete ComoComprar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_como_comprar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ComoComprar', 'url'=>array('admin')),
);
?>

<h1>View ComoComprar #<?php echo $model->id_como_comprar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_como_comprar',
		'imagen',
		'descripcion',
	),
)); ?>
