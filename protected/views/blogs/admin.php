<?php
/* @var $this BlogsController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blog'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Blog', 'url'=>array('index')),
	array('label'=>'Crear Blog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('blog-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Blog</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'blog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_blog',
		'titulo',
		#'url',
		'imagen',
		#'noticia',
		#'noticia_general',
		'fecha',
		#'activa',
		array(
			'name'=>'activa',
			'value'=>'$data->activa0->descripcion',
		),
		array(
			'name'=>'id_categoria_noticia',
			'value'=>'$data->idCategoriaNoticia->nombre',
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
