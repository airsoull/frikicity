<?php
/* @var $this ImagenesSliceController */
/* @var $model ImagenesSlice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo == 1 ? 'Categoría' : 'Producto'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo == 1 ? $data->categoria->nombre : $data->producto->nombre); ?>
	<br />
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_imagenes_slice"); ?>
</div>