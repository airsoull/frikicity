<?PHP $this->pageTitle = 'Contacto'; ?>
<div class="site_container container">
	<div class="slogan columns sixteen">
		<h1>Contacto</h1>
	</div>
    <div class="seperator_after8">
	    <div class="columns seven">
            <?PHP 
        if(isset($_POST['Mail'])){
            ?>
            <div class="flash-success"><strong>Se ha enviado su consulta. Gracias!</strong></div><br>
            <?PHP
        }
    ?>
        	<h3>Contactenos!</h3>

            <?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'pagina-form',
    'enableAjaxValidation'=>true,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
    'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>
                <div class="columns two contact_label alpha">
                    <?php echo $form->labelEx($model,'nombre'); ?>
                </div>
                <div class="columns five contact_input omega">
                    <span><?php echo $form->error($model,'nombre'); ?></span>
                    <?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>50)); ?>
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <?php echo $form->labelEx($model,'email'); ?>
                </div>
                <div class="columns five contact_input omega">
                    <span><?php echo $form->error($model,'email'); ?></span>
                    <?PHP echo $form->emailField($model,'email') ?>
                    <?php #echo $form->textField($model,'mail',array('size'=>30,'maxlength'=>50)); ?>
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <?php echo $form->labelEx($model,'mensaje'); ?>
                </div>
                <div class="columns five contact_input omega">
                    <span><?php echo $form->error($model,'mensaje'); ?></span>
					<?php echo $form->textArea($model,'mensaje',array('cols'=>34,'rows'=>10)); ?>
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns five contact_button alpha omega offset-by-two">
					<input type="submit" name="button" id="button" value="Enviar Consulta" />
                </div>
                <div class="clear"><!-- ClearFix --></div>            	
            <?php $this->endWidget(); ?>
        </div>
        <div class="columns six offset-by-two">
        	<div class="add-bottom">
                <h3>Datos</h3>
                <p><strong>Dirección</strong>&nbsp;<?PHP echo $pagina->direccion; ?><br /><strong>Oficina</strong>&nbsp;<?PHP echo $pagina->oficina; ?><br>
                <STRONG>Horarios</STRONG>&nbsp;<?PHP echo $pagina->horarios; ?></p>
                <p><strong>Teléfono</strong>&nbsp;<?PHP echo $pagina->telefono; ?><br />
                <strong>Mail</strong>&nbsp;<?php echo CHtml::mailto($pagina->mail, $pagina->mail, array('optionName'=>'optionValue')); ?><br />
                </p>
            </div>
			<h3>Mapa</h3>
            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=avenida+vitacura+2902&amp;aq=&amp;sll=-33.668298,-70.363372&amp;sspn=1.597838,3.348083&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Vitacura+2902,+Las+Condes,+Santiago,+Regi%C3%B3n+Metropolitana&amp;ll=-33.412293,-70.603024&amp;spn=0.01252,0.026157&amp;z=14&amp;output=embed"></iframe>
        </div>
	</div>
</div>