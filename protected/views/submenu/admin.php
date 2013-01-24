<?php
/* @var $this SubmenuController */
/* @var $model Submenu */

$this->breadcrumbs=array(
	'Submenú'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Submenú', 'url'=>array('index')),
	array('label'=>'Crear Submenú', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('submenu-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Submenus</h1>

<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'submenu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_submenu',
		'nombre',
		'descripcion',
		#'id_menu',
		array(
			'name'=>'id_menu',
			'value'=>'$data->idMenu->nombre'
		),
		#'id_categoria',
		array(
			'name'=>'id_categoria',
			'value'=>'$data->idCategoria->nombre'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
