<?php
/* @var $this ImagenesPequeniasController */
/* @var $model ImagenesPequenias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagenes-pequenias-form',
	'enableAjaxValidation'=>True,
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		220x140px<br>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?php echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->dropDownList($model, 'tipo', array('1'=>'Categoria', '2'=>'Producto'), array('empty'=>'Elija Tipo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row" id="producto">
		<?php echo $form->labelEx($model,'id_tipo'); ?>
		<?php echo $form->dropDownList($model,'id_tipo', Chtml::listData(Productos::model()->findAll(), 'id_productos', 'nombre'), array('empty'=>'Elija Producto', 'class'=>'produ')); ?>
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row" id="categoria">
		<?php echo $form->labelEx($model,'id_tipo'); ?>
		<?php echo $form->dropDownList($model,'id_tipo', Chtml::listData(Categoria::model()->findAll(), 'id_categoria', 'nombre'), array('empty'=>'Elija Categoría', 'class'=>'cate')); ?>
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>


<script type="text/javascript">
	var $divs = $('#producto, #categoria');
	var $ambos = $('.produ, .cate');
	var $tipo = $('#ImagenesPequenias_tipo');
	var $cat = $('#categoria');
	var $pro = $('#producto');
	var $pros = $('.produ');
	var $cats = $('.cate');

	$divs.css('display', 'none');
	$ambos.attr('disabled', 'disabled');
	$(document).on("ready", evento);
	function evento (ev)
	{
    	if($tipo.val() == 1){
			$cat.css('display', 'block');
			$cats.removeAttr('disabled');
		}else if($tipo.val() == 2){
			$pro.css('display', 'block');
			$pros.removeAttr('disabled');
		}
	}
	
	$tipo.on('change',function(){
		if($(this).val() == 1){
			$pros.attr('disabled', 'disabled');
			$pro.slideUp('200');
			$cat.slideDown('200');
			$cats.removeAttr('disabled');
		}else if($(this).val() == 2){
			$cats.attr('disabled', 'disabled');
			$cat.slideUp('200');
			$pro.slideDown('200');
			$pros.removeAttr('disabled');
		}
	});

</script>


</div><!-- form -->