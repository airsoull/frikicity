<?php
/* @var $this MailController */
/* @var $model Mail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_enviar')); ?>:</b>
	<?php echo CHtml::encode($data->idEnviar->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_envioespecial')); ?>:</b>
	<?php echo CHtml::encode($data->idEnvioespecial->nombre); ?>
	<br />


</div>