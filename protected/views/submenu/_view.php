<?php
/* @var $this SubmenuController */
/* @var $model Submenu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_menu')); ?>:</b>
	<?php echo CHtml::encode($data->idMenu->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoria->nombre); ?>
	<br />
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_submenu"); ?>

</div>