<?php
/* @var $this ImagenesPequeniasController */
/* @var $model ImagenesPequenias */

$this->breadcrumbs=array(
	'Imagenes Pequeñas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Imagenes Pequeñas', 'url'=>array('index')),
	array('label'=>'Crear Imagenes Pequeñas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('imagenes-pequenias-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imagenes-pequenias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_imagenes_pequenias',
		'imagen',
		'nombre',
		'descripcion',
		#'tipo',
		array(
			'name'=>'tipo',
			'value'=>'$data->tipo == 1  ? "Categoría" : "Producto"',
		),
		#'id_tipo',
		array(
			'name'=>'id_tipo',
			'value'=>'$data->tipo == 1  ? $data->categoria->nombre : $data->producto->nombre',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
