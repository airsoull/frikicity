<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categoría'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_categoria),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Categoría', 'url'=>array('index')),
	array('label'=>'Crear Categoría', 'url'=>array('create')),
	array('label'=>'Ver Categoría', 'url'=>array('view', 'id'=>$model->id_categoria)),
	array('label'=>'Administrar Categoría', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoría <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>