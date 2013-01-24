<?php
/* @var $this PaginaController */
/* @var $model Pagina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oficina')); ?>:</b>
	<?php echo CHtml::encode($data->oficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horarios')); ?>:</b>
	<?php echo CHtml::encode($data->horarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->tarjeta).'%'; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('mailMasivo')); ?>:</b>
	<?php echo CHtml::encode($data->mailMasivo); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_enviar')); ?>:</b>
	<?php echo CHtml::encode($data->idEnviar->descripcion); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('mensaje')); ?>:</b>
	<?php echo CHtml::encode($data->mensaje); ?>
	<br />
	<br>
	<?PHP echo CHtml::link('Actualizar', array("pagina/update/$data->id_pagina")); ?>
</div>