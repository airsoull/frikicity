<?php
/* @var $this MailController */
/* @var $model Mail */

$this->breadcrumbs=array(
	'Mail'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Mail', 'url'=>array('index')),
	array('label'=>'Administrar Mail', 'url'=>array('admin')),
);
?>

<h1>Crear Mail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>