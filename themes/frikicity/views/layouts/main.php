<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="cris.andrs@gmail.com">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fw_base.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fw_layout.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/camera.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/elastislide.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/kickstart/kickstart.css">
    
    <!-- @FontFace /=Disabled=/
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fonts/stylesheet.css">-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico">
    <!--[if IE]> <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie_fix.css"> <![endif]-->
    
    <!-- JS
    ================================================== -->
    <?PHP if($this->pageTitle != 'Contacto'){ ?>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
    <?PHP } ?>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.1.3.js'></script> 
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.elastislide.js"></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/camera.min.js'></script>         
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.prettyPhoto.js'></script>         
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/kickstart.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/prettify.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jQueryRotateCompressed.2.2.js'></script>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.src.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ie_fix.js"></script>
    <![endif]-->
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/fw_ui.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/fw_scripts.js'></script>
    <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/harmony.js" type="text/javascript"></script>-->
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35031850-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="main_wrapper">
    <!-- Header Begin
    ================================================== -->
    <header>
        <div style="position:absolute;top:50px; left:40%;" id="mala">
            <h2 style="font-size:50px;color:#FFF;text-shadow: 0 0 7px #069;">FRIKICITY</h2>
            <div style="text-align:center;color:#FFF;text-shadow: 0 0 7px #FEB42A; margin-left: -60px;"><?PHP $pagina = Pagina::model()->find(); echo $pagina->direccion.'&nbsp;OF&nbsp;'.$pagina->oficina.'&nbsp;Teléfono&nbsp;'.$pagina->telefono.'&nbsp;&nbsp;Mail&nbsp;'.CHtml::mailto($pagina->mail, $pagina->mail, array('style'=>'color:#FFF'));; ?></div>
        </div>
        <div class="blue_line"><!-- Header Blue Line --></div>
        <h1><a href="<?PHP echo Yii::app()->request->baseUrl.'/'; ?>index.php" class="logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.gif" width="100" alt="FRIKICITY" title="FRIKICITY"></a></h1>
        <!-- ~#Main Navigation -->
        <nav class="head_nav">
            <ul class="mainmenu">
                <li><?PHP echo CHtml::link('Inicio', array('/index.php')); ?></li>
                <li class="sep"></li>
                <li>
                    <?PHP echo CHtml::link('Menú', "javascript:void(0)"); ?>  <!-- javascript:void(0) -->
                    <ul class="sub_menu level1">
                        <?PHP 
                        $menu = Menu::model()->findAll(array('order'=>'nombre')); 
                        $submenu = Submenu::model();
                        ?>
                        <?php
                            foreach ($menu as $m) {
                                ?>
                                <li><?PHP echo CHtml::link($m->nombre, "javascript:void(0)"); ?></a>
                                    <ul class="sub_menu level2">
                                    <?PHP
                                        $subm = $submenu->findAll("id_menu = $m->id_menu order by nombre");
                                        foreach ($subm as $sm) {
                                           ?>
                                                <li><?PHP echo CHtml::link($sm->nombre, array("categoria/$sm->id_categoria")); ?></li>
                                          <?PHP } ?> 
                                    </ul>
                                </li>
                                <?PHP
                            }#Temrino foreach
                        ?>                       
                    </ul>
                </li>
                <li class="sep"></li>
                <li><?PHP echo CHtml::link('Como Comprar', array("/comprar")); ?></li>
                <li class="sep"></li>
                <li><?PHP echo CHtml::link('Blog', array("/blog")); ?></li>
                <li class="sep"></li>
                <li><?PHP echo CHtml::link('Contacto', array("/contacto")); ?></li>
            </ul>
            <div class="menu_indicator"></div>
        </nav>
        <nav class="mobile_nav">
            <a href="javascript:void(0)" class="menu_toggle">&dArr; Menú &dArr;</a>
            <ul class="mobile_menu">
            </ul>
        </nav>
        <!-- ~#Social Links -->
        <ul class="socials">
            <li><a href="http://www.facebook.com/frikicity" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/facebook.png" title="Facebook" alt="Facebook"></a></li>
            <li><a href="http://twitter.com/frikicity" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/twitter.png" title="Twitter" alt="Twitter"></a></li>
            <li><a href="http://foursquare.com/frikicity" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/foursquare.png" title="Foursquare" alt="Foursquare"></a></li>
        </ul>


    </header>



<?php echo $content; ?>



        <div class="aside">
        <div class="container">
            <div class="columns offset-by-four four">
                <h5>Redes Sociales</h5>
                <ul class="aside_list">
                    <li>

                        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFrikicity%2F155691391416&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>

                    </li>
                    <li>

                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.frikicity.com/" data-via="frikicity" data-lang="es" data-hashtags="frikicity">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </li>
                    <li>

                        <!-- Coloca esta etiqueta donde quieras que se muestre el botón +1. -->
<g:plusone></g:plusone>

<!-- Coloca esta petición de presentación donde creas oportuno. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es-419'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
                        
                    </li>                    
                </ul>
            </div>
            <div class="columns four">
                <h5>Últimos productos</h5>
                <ul class="aside_list">
                    <?PHP $productos = Productos::model()->findAll(array('order'=>'id_productos desc', 'limit'=>5)); ?>
                    <?PHP foreach ($productos as $p) {
                        ?>
                        <li style="text-shadow: 1px 1px 5px #069;"><?PHP echo CHtml::link($p->nombre, array('productos/'.$p->id_productos)); ?></li>
                        <?PHP
                    } ?>                   
                </ul>
            </div>
          <div class="columns four">
                <h5>Buscar</h5>
                <form id="form1" name="form1" method="get" class="aside_form" action="<?PHP echo Yii::app()->request->baseUrl.'/' ?>buscar">
                    <div class="search_box">
                        <input name="busqueda" id="search_text" type="text" title="Escribe tu búsqueda" value=""><input  type="submit" id="search_submit" value="">
                    </div>
                </form>
                <div style="margin-bottom: 0px;">Sitio desarrollado por cris.andrs@gmail.com</div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="footer_block">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.gif" alt="FRIKICITY" width="145" title="FRIKICITY">
                <div class="copyright">Copyright &copy; <?PHP echo date('Y'); ?></div>
            </div>            
            <div class="clear"><!-- ClearFix --></div>
        </div>
    </footer>    
</div>
<script type="text/javascript">
    $(".logo").rotate({ 
   bind: 
     { 
        mouseover : function() { 
            $(this).rotate({animateTo:720})
        },
        mouseout : function() { 
            $(this).rotate({animateTo:0})
        }
     } 
   
});
</script>

<script type="text/javascript">
if(window.addEventListener){
    var kkeys=[],konami="38,38,40,40,37,39,37,39,66,65";
    window.addEventListener("keydown",function(e){
        kkeys.push(e.keyCode);
        if(kkeys.toString().indexOf(konami)>=0){
            alert('FRIKICITY');
            var sc = document.createElement('script');
            sc.src = "<?php echo Yii::app()->theme->baseUrl; ?>/js/harmony.js";
            sc.type = 'text/javascript';
            document.getElementsByTagName('head')[0].appendChild(sc);
        }
    },true);}
</script>
<style type="text/css">
    canvas{position: fixed; top: 0px; z-index: 99999;}
</style>
</body>
</html>