<?php
/* @var $this CategoriaNoticiaController */
/* @var $model CategoriaNoticia */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_categoria_noticia"); ?>

</div>