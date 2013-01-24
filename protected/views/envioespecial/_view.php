<?php
/* @var $this EnvioespecialController */
/* @var $model Envioespecial */
?>

<div class="view">

	<?PHP if($data->id_envioespecial == 1){
		echo "<strong>NO SE PUEDE ELIMINAR ESTE ELEMENTO</strong><br><br>";
	} ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_envioespecial"); ?>

</div>