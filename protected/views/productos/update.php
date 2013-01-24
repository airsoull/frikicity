<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_productos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Ver Productos', 'url'=>array('view', 'id'=>$model->id_productos)),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Producto <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>