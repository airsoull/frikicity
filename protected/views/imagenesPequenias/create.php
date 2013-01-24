<?php
/* @var $this ImagenesPequeniasController */
/* @var $model ImagenesPequenias */

$this->breadcrumbs=array(
	'Imagenes Pequeñas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Imagenes Pequeñas', 'url'=>array('index')),
	array('label'=>'Administrar Imagenes Pequeñas', 'url'=>array('admin')),
);
?>

<h1>Crear Imagen Pequeña</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>