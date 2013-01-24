<?php
/* @var $this MailController */
/* @var $model Mail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mail-form',
	'enableAjaxValidation'=>True,
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_enviar'); ?>
		<?php echo $form->dropDownList($model,'id_enviar', Chtml::listData(Enviar::model()->findAll(), 'id_enviar', 'descripcion')); ?>
		<?php echo $form->error($model,'id_enviar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_envioespecial'); ?>
		<?php echo $form->dropDownList($model,'id_envioespecial', Chtml::listData(Envioespecial::model()->findAll(), 'id_envioespecial', 'descripcion')); ?>
		<?php echo $form->error($model,'id_envioespecial'); ?>
	</div>
	<?php echo CHtml::activeHiddenField($model, 'email', array('value'=>'q@q.cl')); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->