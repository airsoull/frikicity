<?php
/* @var $this ComoComprarController */
/* @var $model ComoComprar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'como-comprar-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?php echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php #echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?PHP
			/*
			$this->widget('ext.niceditor.nicEditorWidget',array(
    		"model"=>$model,                // Data-Model
    		"attribute"=>'descripcion',        // Attribute in the Data-Model
    		"defaultValue"=>'defaultValue text here',
    		"config"=>array("maxHeight"=>"400px"),
    		"width"=>"600px",       // Optional default to 100%
    		"height"=>"200px",      // Optional default to 150px
		)); */?>
		<?PHP 
			$this->widget('ext.redactorjs.Redactor', array( 
				'model' => $model, 
				'attribute' => 'descripcion',
				'lang' => 'en',
			));
		?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->