<?PHP $this->pageTitle = 'Celulares, repuestos, consolas y desbloqueos'; ?>
<?PHP $pagina = Pagina::model()->find(); ?>
<?PHP if($pagina->id_enviar == 1){ ?>
<div class="slogan columns sixteen">
        <p><span><?PHP echo $pagina->mensaje; ?></span></p>    
    </div>
    <?PHP } ?>

<div class="top_slider">
	<div class="camera_wrap camera_azure_skin" id="top_slider">
        <?PHP 
        $imagenes = ImagenesSlice::model()->findAll();
            foreach ($imagenes as $i) {
                if($i->tipo == 1){
                    $tipo = 'categoria';
                } else {
                    $tipo = 'productos';
                }
                ?>
                
                <div  data-thumb="<?php echo Yii::app()->request->baseUrl.'/imagenes/'.$i->imagen; ?>" data-src="<?php echo Yii::app()->request->baseUrl.'/imagenes/'.$i->imagen; ?>" data-link="<?php echo Yii::app()->request->baseUrl.'/'.$tipo.'/'.$i->id_tipo; ?>">
                    <div class="camera_caption fadeFromBottom">
                        <?php echo $i->descripcion; ?>
                    </div>
                </div>
                

                <?PHP
            }
        ?>         
	</div><!-- /sider -->
	<div class="clear"><!-- ClearFix --></div>
</div>
<script type="text/javascript">
	jQuery(function(){		
		jQuery('#top_slider').camera({
			alignment: 'center',
			height: '34.12%',
			navigationHover: false
		});
	});
</script>







<div class="site_container container">
	<!-- MENSAJE -->

    <div class="clear"><!-- ClearFix --></div>
    <br>
    <div id="recentcomments" class="dsq-widget"><h2 class="dsq-widget-title">Comentarios recientes</h2><script type="text/javascript" src="http://frikicity.disqus.com/recent_comments_widget.js?num_items=5&hide_avatars=0&avatar_size=32&excerpt_length=200"></script></div><a href="http://disqus.com/">&nbsp;</a>

    <div class="clear"><!-- ClearFix --></div>
</div>

<!-- Start Grey Block -->
<div class="bf_block container">
    <div class="columns four">
    	<h3>Productos y ofertas</h3>
        <p>Descubre todos nuestros productos!!!</p>
        <div class="clear"><!-- ClearFix --></div>
	</div>
	<div class="columns twelve">
		<!-- Elastislide Carousel -->
		<div id="carousel" class="es-carousel-wrapper">
			<div class="es-carousel">
				<ul class="slider1_list">
                    <?PHP 
                        $imagenes = ImagenesPequenias::model()->findAll();
                        foreach ($imagenes as $i) {
                            if($i->tipo == 1){
                                $tipo = 'categoria';
                            } else {
                                $tipo = 'productos';
                            }
                            ?>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl.'/'.$tipo.'/'.$i->id_tipo; ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/imagenes/'.$i->imagen; ?>" alt="<?PHP echo $i->nombre ?>" /></a>
                            <h4><?PHP echo $i->nombre; ?></h4>
                            <a href="<?php echo Yii::app()->request->baseUrl.'/'.$tipo.'/'.$i->id_tipo; ?>"><?PHP echo $i->descripcion; ?></a>
                        </li>
                            <?PHP
                        }

                    ?>
				</ul>
			</div>
		</div>
		<!-- End Elastislide Carousel -->    	        
    </div>
	<script type="text/javascript">	
		$(document).ready(function(){
			$('#carousel').elastislide({
				imageW 		: 220,
				minItems	: 1,
				margin		: 2,
				border		: 0,
				current		: 0
			});			
			$('#carousel').elastislide('add');
		});

        $('.slider1_list li').on('click', function(){
            document.location.href = $(this).find('a').attr('href');
        });

	</script>
    <div class="clear"><!-- ClearFix --></div>
</div>
<!-- End Grey Block -->

<div class="site_container container">

    <div class="columns four">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/socialmedia.jpg" alt="Redes Sociales" width="50%"/>
    </div>

    <div class="columns four">
    	<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#3c4658',
      color: '#f2f3f3'
    },
    tweets: {
      background: '#f2f3f3',
      color: '#323b4a',
      links: '#19b5bd'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('frikicity').start();
</script>
	</div>
    <div class="columns four">

    	&nbsp;

	</div>
    <div class="columns four">
    	

        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-recommendations" data-site="www.frikicity.com" data-width="250" data-height="400" data-header="true"></div>


	</div>
    <div class="clear"><!-- ClearFix --></div>
</div>
