<?php
/* @var $this EnvioespecialController */
/* @var $model Envioespecial */

$this->breadcrumbs=array(
	'Envio Especial'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_envioespecial),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Envio Especial', 'url'=>array('index')),
	array('label'=>'Crear Envio Especial', 'url'=>array('create')),
	array('label'=>'Ver Envio Especial', 'url'=>array('view', 'id'=>$model->id_envioespecial)),
	array('label'=>'Administrar Envio Especial', 'url'=>array('admin')),
);
?>

<h1>Actualizar Envio Especial <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>