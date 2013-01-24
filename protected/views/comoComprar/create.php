<?php
/* @var $this ComoComprarController */
/* @var $model ComoComprar */

$this->breadcrumbs=array(
	'Como Comprars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ComoComprar', 'url'=>array('index')),
	array('label'=>'Manage ComoComprar', 'url'=>array('admin')),
);
?>

<h1>Create ComoComprar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>