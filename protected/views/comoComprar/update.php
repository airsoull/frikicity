<?php
/* @var $this ComoComprarController */
/* @var $model ComoComprar */

$this->breadcrumbs=array(
	'Como Comprar'=>array('index'),
	'Actualizar',
);
/*
$this->menu=array(
	array('label'=>'List ComoComprar', 'url'=>array('index')),
	array('label'=>'Create ComoComprar', 'url'=>array('create')),
	array('label'=>'View ComoComprar', 'url'=>array('view', 'id'=>$model->id_como_comprar)),
	array('label'=>'Manage ComoComprar', 'url'=>array('admin')),
);*/
?>

<h1>Actualizar Como Comprar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>