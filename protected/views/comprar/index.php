<?PHP $this->pageTitle = 'Como Comprar'; ?>
<div class="site_container container">
	<br>
<?PHP
	echo CHtml::image(Yii::app()->request->baseUrl.'/imagenes/'.$modelo->imagen, 'Formas de pago', array('class'=>'scale-with-grid'));
	?>
	
	<?PHP
	echo $modelo->descripcion;
?>

</div>