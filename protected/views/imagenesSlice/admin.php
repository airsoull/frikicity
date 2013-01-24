<?php
/* @var $this ImagenesSliceController */
/* @var $model ImagenesSlice */

$this->breadcrumbs=array(
	'Imagenes Slices'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Imagenes Slice', 'url'=>array('index')),
	array('label'=>'Crear Imagenes Slice', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('imagenes-slice-grid', {
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
	'id'=>'imagenes-slice-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_imagenes_slice',
		'imagen',
		'descripcion',
		array(
			'name'=>'tipo',
			'value'=>'$data->tipo == 1  ? "Categoría" : "Producto"',
		),
		array(
			'name'=>'id_tipo',
			'value'=>'$data->tipo == 1  ? $data->categoria->nombre : $data->producto->nombre',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
