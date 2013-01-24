<?php
/* @var $this MailController */
/* @var $model Mail */

$this->breadcrumbs=array(
	'Mail'=>array('index'),
	'Listado',
);

$this->menu=array(
	array('label'=>'Listar Mail', 'url'=>array('index')),
	array('label'=>'Crear Mail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listado de mail</h1>

<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
1 = Si<br>
2 = No
<br><br>
<?php echo CHtml::link('Envio Mail Masivo', array('mailmasivo'), array('optionName'=>'optionValue')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_mail',
		#'nombre',
		array(
			'name'=>'nombre',
			'value'=>'ucwords($data->nombre)',
		),
		'mail',
		#'id_enviar',
		array(
			'name'=>'id_enviar',
			'value'=>'$data->idEnviar->descripcion',
		),
		#'id_envioespecial',
		array(
			'name'=>'id_envioespecial',
			'value'=>'$data->idEnvioespecial->descripcion',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
