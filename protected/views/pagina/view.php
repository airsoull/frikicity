<?php
/* @var $this PaginaController */
/* @var $model Pagina */

$this->breadcrumbs=array(
	'Paginas'=>array('index'),
	$model->id_pagina,
);

$this->menu=array(
	array('label'=>'List Pagina', 'url'=>array('index')),
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'Update Pagina', 'url'=>array('update', 'id'=>$model->id_pagina)),
	array('label'=>'Delete Pagina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pagina),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
?>

<h1>View Pagina #<?php echo $model->id_pagina; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pagina',
		'nombre',
		'direccion',
		'oficina',
		'telefono',
		'mail',
		'empresa',
	),
)); ?>
