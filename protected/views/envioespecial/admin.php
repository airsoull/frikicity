<?php
/* @var $this EnvioespecialController */
/* @var $model Envioespecial */

$this->breadcrumbs=array(
	'Envio Especial'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Envio Especial', 'url'=>array('index')),
	array('label'=>'Crear Envio Especial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('envioespecial-grid', {
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
	'id'=>'envioespecial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_envioespecial',
		'nombre',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
