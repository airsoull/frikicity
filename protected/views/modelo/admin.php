<?php
/* @var $this ModeloController */
/* @var $model Modelo */

$this->breadcrumbs=array(
	'Modelo'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Modelo', 'url'=>array('index')),
	array('label'=>'Crear Modelo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('modelo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Modelos</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'modelo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_modelo',
		'nombre',
		'descripcion',
		'orden',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
