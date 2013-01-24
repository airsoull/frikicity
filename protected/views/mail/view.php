<?php
/* @var $this MailController */
/* @var $model Mail */

$this->breadcrumbs=array(
	'Mail'=>array('index'),
	$model->mail,
);

$this->menu=array(
	array('label'=>'Listar Mail', 'url'=>array('index')),
	array('label'=>'Crear Mail', 'url'=>array('create')),
	array('label'=>'Actualizar Mail', 'url'=>array('update', 'id'=>$model->id_mail)),
	array('label'=>'Borrar Mail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mail),'confirm'=>'Desea eliminar este elemento?')),
	array('label'=>'Administrar Mail', 'url'=>array('admin')),
);
?>

<h1>Mail <?php echo $model->mail; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_mail',
		'nombre',
		'mail',
		#'id_enviar',
		array(
			'name'=>'id_enviar',
			'value' => $model->idEnviar->descripcion,
		),
		#'id_envioespecial',
		array(
			'name'=>'id_envioespecial',
			'value' => $model->idEnvioespecial->nombre,
		),
	),
)); ?>
