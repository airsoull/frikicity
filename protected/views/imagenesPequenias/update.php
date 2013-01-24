<?php
/* @var $this ImagenesPequeniasController */
/* @var $model ImagenesPequenias */

$this->breadcrumbs=array(
	'Imagenes Pequeñas'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_imagenes_pequenias),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Imagenes Pequeñas', 'url'=>array('index')),
	array('label'=>'Crear Imagenes Pequeñas', 'url'=>array('create')),
	array('label'=>'Ver Imagenes Pequeñas', 'url'=>array('view', 'id'=>$model->id_imagenes_pequenias)),
	array('label'=>'Administrar Imagenes Pequeñas', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>