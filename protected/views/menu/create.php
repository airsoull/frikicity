<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menú'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Menú', 'url'=>array('index')),
	array('label'=>'Administración Menú', 'url'=>array('admin')),
);
?>

<h1>Crear Menú</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>