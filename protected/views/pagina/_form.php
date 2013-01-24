<?php
/* @var $this PaginaController */
/* @var $model Pagina */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	'enableAjaxValidation'=>True,
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oficina'); ?>
		<?php echo $form->textField($model,'oficina',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'oficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horarios'); ?>
		<?php echo $form->textField($model,'horarios',array('size'=>100,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'horarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarjeta'); ?>
		<?php echo $form->textField($model,'tarjeta'); ?><span>%</span>
		<?php echo $form->error($model,'tarjeta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailMasivo'); ?>
		<?php echo $form->textField($model,'mailMasivo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mailMasivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_enviar'); ?>
		<?php echo $form->dropDownList($model,'id_enviar', Chtml::listData(Enviar::model()->findAll(), 'id_enviar', 'descripcion')); ?>
		<?php echo $form->error($model,'id_enviar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mensaje'); ?>
		<?php echo $form->textArea($model, 'mensaje',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mensaje'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar'); ?>
	</div>

	<script type="text/javascript">
		var $valor = $('#Pagina_id_enviar').val();
		var $mensaje = $('[for=Pagina_mensaje]');
		var $ambos = $('#Pagina_mensaje, label:[for=Pagina_mensaje]');
		if($valor == 1){
			$('#Pagina_mensaje').removeAttr('readonly');
		}else{
			$('#Pagina_mensaje').attr('readonly', 'readonly');
			$ambos.css('display','none');
		}

		$('#Pagina_id_enviar').on('change', function(e){
			if($(this).val() == 1){
				$('#Pagina_mensaje').removeAttr('readonly');
				$ambos.slideDown('200');
			}else{
				$ambos.slideUp('200');
				$('#Pagina_mensaje').attr('readonly', 'readonly');
			}
		})

	</script>

<?php $this->endWidget(); ?>

</div><!-- form -->