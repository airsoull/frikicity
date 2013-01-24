<?php
/* @var $this BlogsController */
/* @var $model Blog */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('noticia')); ?>:</b>
	<?php echo CHtml::encode($data->noticia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noticia_general')); ?>:</b>
	<?php echo CHtml::encode($data->noticia_general); ?>
	<br />
	*/ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($this->fecha($data->fecha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activa')); ?>:</b>
	<?php echo CHtml::encode($data->activa0->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria_noticia')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoriaNoticia->nombre); ?>
	<br />
	<?PHP echo CHtml::link('Actualizar', array("blogs/update/$data->id_blog")); ?>

</div>