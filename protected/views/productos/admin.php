<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('productos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Productos</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_productos',
		'nombre',
		'descripcion',
		#'precio',
		array(
			'name'=>'precio',
			'value'=>'"$".number_format($data->precio)',
		),
		'imagen',
		array(
			'name'=>'id_categoria',
			'value'=>'$data->idCategoria->nombre',
		),
		#'id_categoria',
		#'id_modelo',
		array(
			'name'=>'id_modelo',
			'value'=>'$data->idModelo->nombre',
		),
		array(
			'name'=>'stock',
			'value'=>'$data->idEnviar->descripcion',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
