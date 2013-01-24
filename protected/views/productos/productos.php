<?PHP $this->pageTitle = Yii::app()->name." - $model->nombre" ?>
<?PHP 
    $total = (($model->precio*$porcentaje->tarjeta)/100);
    $total = $total+$model->precio;
?>
<div class="site_container container">
<br>
                <form id="form1" name="form1" method="get" class="aside_form" action="<?PHP echo Yii::app()->request->baseUrl.'/' ?>buscar">
                    <div class="search_box">
                        <input name="busqueda" id="search_text" type="text" title="Escribe tu búsqueda" value=""><input  type="submit" id="search_submit" value="">
                    </div>
                </form>
	
	<br>
	<h2><strong><?PHP echo $model->nombre; ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;<i>Efectivo:&nbsp;<?PHP echo '$'.number_format($model->precio); ?>&nbsp;&nbsp;&nbsp;&nbsp;Tarjeta de crédito:&nbsp;<?PHP echo '$'.number_format($total); ?>&nbsp;<small>(Aplicando el&nbsp;<?PHP echo $porcentaje->tarjeta.'%)'; ?></small></i></h2>
  <?PHP if($model->stock == 2){ ?>
                        <strong><h3>En estos momentos no tenemos stock :(<br>Pero envianos un <?PHP echo CHtml::link('mail', array("/contacto")); ?> para saber cuando tendremos :)</h3></strong><br><br>
                        <?PHP } ?>
<?PHP
	echo CHtml::image(Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen, '$model->nombre', array('class'=>'scale-with-grid'));
	?>

	<!--SOCIAL-->
	<ul>
		<li>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
  				var js, fjs = d.getElementsByTagName(s)[0];
  				if (d.getElementById(id)) return;
  				js = d.createElement(s); js.id = id;
  				js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<div class="fb-like" data-href="<?PHP echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
		</li>
		<li>
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="frikicity" data-lang="es" data-related="frikicity">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</li>
		<li>
			<!-- Coloca esta etiqueta donde quieras que se muestre el botón +1. -->
<g:plusone annotation="inline"></g:plusone>

<!-- Coloca esta petición de presentación donde creas oportuno. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
		</li>
	</ul>
	<!--/SOCIAL-->

	<?PHP
		echo $model->descripcionGeneral;
	?>
	<br>
	<br>

	 <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'frikicity'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">&nbps;</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">&nbsp;<span class="logo-disqus">&nbsp;</span></a>


</div>

<script type="text/javascript">
	$('p').css('font-size','20px');
</script>