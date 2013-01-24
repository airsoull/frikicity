<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categoría'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Categoría', 'url'=>array('index')),
	array('label'=>'Administrar Categoría', 'url'=>array('admin')),
);
?>

<h1>Crear Categoría</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>