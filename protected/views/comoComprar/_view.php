<?php
/* @var $this ComoComprarController */
/* @var $model ComoComprar */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br /><br>
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_como_comprar"); ?>

</div>