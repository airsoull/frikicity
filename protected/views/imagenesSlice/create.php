<?php
/* @var $this ImagenesSliceController */
/* @var $model ImagenesSlice */

$this->breadcrumbs=array(
	'Imagenes Slices'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar ImagenesSlice', 'url'=>array('index')),
	array('label'=>'Administrar ImagenesSlice', 'url'=>array('admin')),
);
?>

<h1>Crear Imagen Slice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>