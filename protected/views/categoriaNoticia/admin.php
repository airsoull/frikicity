<?php
/* @var $this CategoriaNoticiaController */
/* @var $model CategoriaNoticia */

$this->breadcrumbs=array(
	'Categoría Noticias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Categoría Noticia', 'url'=>array('index')),
	array('label'=>'Crear Categoría Noticia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('categoria-noticia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Categoría Noticias</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'categoria-noticia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_categoria_noticia',
		'nombre',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
