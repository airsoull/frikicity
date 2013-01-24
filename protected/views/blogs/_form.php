<?php
/* @var $this BlogsController */
/* @var $model Blog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-form',
	'enableAjaxValidation'=>true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>100,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		Ancho máximo: 700px<br>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/blog/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/blog/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?PHP echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noticia'); ?>
		<?php echo $form->textArea($model, 'noticia',array('rows'=>20, 'cols'=>100)); ?>
		<?php echo $form->error($model,'noticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noticia_general'); ?>
		[img]link de la imagen[/img] ( [img][/img] )<br>
		[video]link del video[/video] ( [video][/video] )<br>
		[url="url que se usara"]Texto[/url] ( [url=""][/url] )
		<?php echo $form->textArea($model, 'noticia_general',array('rows'=>20, 'cols'=>100)); ?>
		<?php echo $form->error($model,'noticia_general'); ?>
	</div>

	<?php /*
	
	<div class="row">
		<?php echo $form->labelEx($model,'noticia'); ?>
		<?PHP 
			$this->widget('ext.redactorjs.Redactor', array( 
				'model' => $model, 
				'attribute' => 'noticia',
				'lang' => 'en',
			));
		?>
		<?php echo $form->error($model,'noticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noticia_general'); ?>
		<?PHP 
			$this->widget('ext.redactorjs.Redactor', array( 
				'model' => $model, 
				'attribute' => 'noticia_general',
				'lang' => 'en',
			));
		?>
		<?php echo $form->error($model,'noticia_general'); ?>
	</div>

	*/ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria_noticia'); ?>
		<?php echo $form->dropDownList($model,'id_categoria_noticia', Chtml::listData(CategoriaNoticia::model()->findAll(), 'id_categoria_noticia', 'nombre'), array('empty'=>'Elija Categoría')); ?>
		<?php echo $form->error($model,'id_categoria_noticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activa'); ?>
		<?php echo $form->dropDownList($model,'activa', Chtml::listData(Enviar::model()->findAll(), 'id_enviar', 'descripcion')); ?>
		<?php echo $form->error($model,'activa'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->