<?php
/* @var $this PaginaController */
/* @var $model Pagina */

$this->breadcrumbs=array(
	'Pagina'=>array('index'),
	$model->nombre=>array('index'),
	'Actualizar',
);
/*
$this->menu=array(
	array('label'=>'List Pagina', 'url'=>array('index')),
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'View Pagina', 'url'=>array('view', 'id'=>$model->id_pagina)),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
*/
?>

<h1>Actualizar <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>