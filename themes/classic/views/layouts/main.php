<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/css/lightbox.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/menu.css" />
	


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<?PHP
		if(!Yii::app()->user->isGuest){
			?>
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?> - ADMINISTRACIÓN</div>
		<div align="right">
			<?PHP echo CHtml::link('SALIR ('.Yii::app()->user->name.')', array('/site/logout')); ?>
		</div>
		<?PHP }?>
	</div><!-- header -->



<?php if(!Yii::app()->user->isGuest){ ?>
	<div id="nada" style="height: 30px;">














		<ul class="nav">
	<li>
		<?php echo CHtml::link('Pagina', array('/pagina/index')); ?>
	</li>
	<li>
		<?php echo CHtml::link('Pagina inicio<span class="flecha">&#9660;</span>', array('#')); ?>
		<ul>
			<li><?php echo CHtml::link('Imagenes inicio', array('imagenesSlice/index')); ?></li>
			<li><?php echo CHtml::link('Imagenes pequeñas', array('imagenesPequenias/index')); ?></li>
		</ul>
	</li>
	<li>
		<?php echo CHtml::link('Navegación<span class="flecha">&#9660;</span>', array('#')); ?>
		<ul>
			<li><?php echo CHtml::link('Menú', array('menu/index')); ?></li>
			<li><?php echo CHtml::link('Sub Menú', array('submenu/index')); ?></li>
			<li><?php echo CHtml::link('Categoría', array('categoria/index')); ?></li>
		</ul>
	</li>
	<li>
		<?php echo CHtml::link('Productos<span class="flecha">&#9660;</span>', array('#')); ?>
			<ul>
				<li><?php echo CHtml::link('Productos', array('productos/index')); ?></li>
				<li><?php echo CHtml::link('Modelo', array('modelo/index')); ?></li>
			</ul>
	</li>
	<li><?php echo CHtml::link('Como Comprar', array('comoComprar/index')); ?></li>
	<li>
		<?php echo CHtml::link('Envios<span class="flecha">&#9660;</span>', array('#')); ?>
		<ul>
			<li><?php echo CHtml::link('Mail', array('mail/admin')); ?></li>
			<li><?php echo CHtml::link('Envio Especial', array('envioespecial/index')); ?></li>
		</ul>
	</li>
	<li>
		<?php echo CHtml::link('Blog<span class="flecha">&#9660;</span>', array('#')); ?>
		<ul>
			<li><?php echo CHtml::link('Noticias', array('blogs/index')); ?></li>
			<li><?php echo CHtml::link('Categoría', array('categoriaNoticia/index')); ?></li>
		</ul>
	</li>
</ul>







	</div><!-- mainmenu -->
	<?php } ?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
                
	<div class="clear"></div>

	<div id="footer">
            <?PHP /*
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
             * 
             */ ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/js/lightbox.js"></script>
</html>
