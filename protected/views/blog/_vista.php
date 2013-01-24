<?PHP $this->pageTitle = ucwords($model->titulo); ?>
<div class="site_container container">
	<div class="slogan columns sixteen">
		<h1><?php echo ucwords($model->titulo) ?></h1>
	</div>
	<div class="clear"><!-- ClearFix --></div>


<div class=" seperator seperator_left add-bottom30">
		<?PHP $this->renderPartial('_menu'); ?>
       	
		<div class="columns twelve">


            
            <?php $imagen = CHtml::image(Yii::app()->request->baseUrl.'/imagenes/blog/'.$model->imagen, $model->titulo, array('class'=>'bordered1 scale-with-grid add-bottom')); ?>
            <?php echo CHtml::link($imagen, array($model->url)); ?>
			<h3><?php echo CHtml::link(ucwords($model->titulo), array($model->url)); ?></h3>
            <div class="blogpost_info2">
	           	<ul style="height:58px">
                	<li class="info_date"><?PHP echo $this->fecha($model->fecha); ?></li>
                    <li class="info_categ"><?php echo CHtml::link(ucfirst($model->idCategoriaNoticia->nombre), array('blog/categoria/'.$model->id_categoria_noticia)); ?></li>

                    <li><!-- Inserta esta etiqueta donde quieras que aparezca Botón +1. -->
<div class="g-plusone" data-size="medium"></div>

<!-- Inserta esta etiqueta después de la última etiqueta de Botón +1. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></li>


<li><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false"></div>
</li>



<li><a href="https://twitter.com/share" class="twitter-share-button" data-via="frikicity" data-lang="es" data-hashtags="Frikicity">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>

                </ul>     
            </div>
            <pre class="font-size: 16px;">
            <p><?php echo $this->bbcode($model->noticia); ?></p>
            <p><?php echo $this->bbcode($model->noticia_general); ?></p>
            </pre>
            <hr class="alt1 lightgrey" />
            
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

        <div class="clear"><!-- ClearFix --></div>
  </div>

  </div>

  <STYLE TYPE="text/css">
    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      padding-top: 30px; height: 0; overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </STYLE>