<?php
/* @var $this EnvioespecialController */
/* @var $model Envioespecial */

$this->breadcrumbs=array(
	'Envio Especial'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Envio Especial', 'url'=>array('index')),
	array('label'=>'Administrar Envio Especial', 'url'=>array('admin')),
);
?>

<h1>Crear Envio Especial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>