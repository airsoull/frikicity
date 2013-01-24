<?php
/* @var $this MailController */
/* @var $model Mail */
/* @var $form CActiveForm */
?>
<?PHP
$this->menu=array(
	array('label'=>'Crear Envio Especial', 'url'=>array('envioespecial/create')),
	array('label'=>'Administrar Mail', 'url'=>array('admin')),
);
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
	<?PHP 
		if(isset($_POST['Mail'])){
			?>
			<div class="flash-success">Se han enviado todos los mail</div>
			<?PHP
		}
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mensaje'); ?>
		<?PHP
			/*
			$this->widget('ext.niceditor.nicEditorWidget',array(
    		"model"=>$model,                // Data-Model
    		"attribute"=>'mensaje',        // Attribute in the Data-Model
    		"defaultValue"=>'defaultValue text here',
    		"config"=>array("maxHeight"=>"400px"),
    		"width"=>"600px",       // Optional default to 100%
    		"height"=>"200px",      // Optional default to 150px

		)); ?>


		<?PHP 
			$this->widget('ext.redactorjs.Redactor', array( 'model' => $model, 'attribute' => 'mensaje','lang' => 'en' )); */
			echo $form->textArea($model, 'mensaje',array('rows'=>20, 'cols'=>100));
		?>


		<?php echo $form->error($model,'mensaje'); ?>
	</div>

	<div class="row">
		<STRONG>Envio especial?</STRONG>
		<?php echo $form->dropDownList($model,'id_enviar', Chtml::listData(Enviar::model()->findAll(), 'id_enviar', 'descripcion'), array('options' => array('2'=>array('selected'=>true)))); ?>
	</div>

	<div class="row" id="envioe">
		<STRONG>Solo se enviara a los mail que esten asociados a un envio especial</STRONG><br>
		<?php echo $form->dropDownList($model,'id_envioespecial', Chtml::listData(Envioespecial::model()->findAll(), 'id_envioespecial', 'descripcion'), array('empty'=>'Elija Envio especial')); ?>
		<?php echo $form->error($model,'id_envioespecial'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Enviar Mail Masivo'); ?>
	</div>

	<script type="text/javascript">
		var $valor = $('#Mail_id_enviar');
		var $envio = $('#Mail_id_envioespecial');
		var $capa = $('#envioe');

		$envio.find("option[value='1']").remove();

		if($valor.val() != '1'){
			$envio.attr('disabled','disabled');
			$capa.css('display','none');
		}
		$valor.on('change', function(){
			if($(this).val() == 1){
				$capa.slideDown('200');
				$envio.removeAttr('disabled');
			}else{
				$capa.slideUp('200');
				$envio.attr('disabled','disabled');
			}
		});
	</script>

	
	<?php /*echo $form->errorSummary($model); ?>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); */ ?>
	<?php $this->endWidget(); ?>
	</div>