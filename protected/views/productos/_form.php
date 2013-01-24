<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	'enableAjaxValidation'=>True,
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionGeneral'); ?>
		<?PHP 
			$this->widget('ext.redactorjs.Redactor', array( 
				'model' => $model, 
				'attribute' => 'descripcionGeneral',
				'lang' => 'en',
			));
		?>
		<?php echo $form->error($model,'descripcionGeneral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		$<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		700x250px<br>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?PHP echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->dropDownList($model,'stock', Chtml::listData(Enviar::model()->findAll(), 'id_enviar', 'descripcion')); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->dropDownList($model,'id_categoria', Chtml::listData(Categoria::model()->findAll(), 'id_categoria', 'nombre'), array('empty'=>'Elija Categoría')); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_modelo'); ?>
		<?php echo $form->dropDownList($model,'id_modelo', Chtml::listData(Modelo::model()->findAll(), 'id_modelo', 'nombre'), array('empty'=>'Elija Modelo')); ?>
		<?php echo $form->error($model,'id_modelo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->