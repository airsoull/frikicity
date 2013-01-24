<?PHP
    if($buscar){
        $model = $model->getData();
        $titulo = $q.' Buscando';
        $mensaje = 'Resultado de búsqueda para: '.ucwords($q);
    }else{
        $titulo = 'Blog';
        $mensaje = $titulo;
    }
?>


<?PHP $this->pageTitle = $titulo; ?>
<div class="site_container container">
	<div class="slogan columns sixteen">
		<h1><?php echo $mensaje; ?></h1>
	</div>
	<div class="clear"><!-- ClearFix --></div>


<div class=" seperator seperator_left add-bottom30">
		<?PHP $this->renderPartial('_menu'); ?>
       	
		<div class="columns twelve">


            <?php if(count($model) > 0){ ?>
                <?PHP foreach($model as $m){ ?>
                <?php $imagen = CHtml::image(Yii::app()->request->baseUrl.'/imagenes/blog/'.$m->imagen, $m->titulo, array('class'=>'bordered1 scale-with-grid add-bottom')); ?>
                <?php echo CHtml::link($imagen, array($m->url)); ?>
			    <h3><?php echo CHtml::link(ucwords($m->titulo), array($m->url)); ?></h3>
                <div class="blogpost_info2">
	           	   <ul>
                	   <li class="info_date"><?PHP echo $this->fecha($m->fecha); ?></li>
                       <li class="info_categ"><?php echo CHtml::link(ucfirst($m->idCategoriaNoticia->nombre), array('blog/categoria/'.$m->id_categoria_noticia)); ?></li>
                    </ul>     
                </div>
                <pre class="font-size: 16px;">
                <p><?php echo $this->bbcode($m->noticia); ?></p>
                </pre>
                <?php echo CHtml::link('Continuar Leyendo <span>&rarr;</span>', array($m->url), array('class'=>'arrowed')); ?>
                <hr class="alt1 lightgrey" />
                <?php } ?>
            <?php }else{ ?>
                <h2>No Hay Datos</h2>
            <?PHP } ?>
            

            <!-- Pager -->
            <?php $this->widget('CLinkPager', array(
                'pages' => $pages,
            )) ?>

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