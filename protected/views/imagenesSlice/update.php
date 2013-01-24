<?php
/* @var $this ImagenesSliceController */
/* @var $model ImagenesSlice */

$this->breadcrumbs=array(
	'Imagenes Slices'=>array('index'),
	$model->id_imagenes_slice=>array('view','id'=>$model->id_imagenes_slice),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar ImagenesSlice', 'url'=>array('index')),
	array('label'=>'Crear ImagenesSlice', 'url'=>array('create')),
	array('label'=>'Ver ImagenesSlice', 'url'=>array('view', 'id'=>$model->id_imagenes_slice)),
	array('label'=>'Administrar ImagenesSlice', 'url'=>array('admin')),
);
?>

<h1>Actualizar Imagen Slice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>