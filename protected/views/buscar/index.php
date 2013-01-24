<?PHP $this->pageTitle = Yii::app()->name. '- Búsqueda: '. $_GET['busqueda']; ?>
<div class="site_container container">
	<div class="slogan columns sixteen">
		<h1>Resultado de la búsqueda para: <?PHP echo strtoupper($_GET['busqueda']); ?></h1>
<br>
                <form id="form1" name="form1" method="get" class="aside_form" action="<?PHP echo Yii::app()->request->baseUrl.'/' ?>buscar">
                    <div class="search_box">
                        <input name="busqueda" id="search_text" type="text" title="Escribe tu búsqueda" value=""><input  type="submit" id="search_submit" value="">
                    </div>
                </form>
            
	</div>
	<div class="clear"><!-- ClearFix --></div>
	<div class="columns sixteen">
		



		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.quicksand.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/quicksand.js" type="text/javascript"></script>
<link  rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/quicksand.css" />

<div class="filter_navigation">
	<ul class="splitter">
    	<li>
        	<ul>
        		<li class="segment-0"><a href="javascript:void(0)" data-value="all">Todo</a></li>
        		<?PHP
                    $contar = 0;
        			foreach ($modelo->getData() as $m) {
                        $contar++;
        				?>
        				<li class="segment-<?PHP echo $contar; ?>"><a href="javascript:void(0)" data-value="<?PHP echo $m->id_modelo; ?>"><?PHP echo $m->idModelo->nombre ?></a></li>
        				<?PHP
        			}
        		?>
            </ul>
        </li>
    </ul>
</div>
    </div>
	<div class="clear"><!-- ClearFix --></div>
	
    <div class="columns sixteen">
        <ul class="image-grid columns1" id="list">

            <?PHP
            $contar = 0; 
            foreach ($model->getData() as $m) {
                $contar++;
                ?>
                <li data-id="id-<?PHP echo $contar; ?>" class="<?PHP echo $m->id_modelo; ?>">                    
                <div class="columns twelve alpha img_box"><a href="<?PHP echo Yii::app()->request->baseUrl.'/productos/'.$m->id_productos; ?>" class="prettyPhotos"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$m->imagen; ?>" alt="<?PHP echo $m->nombre; ?>" class="scale-with-grid" /></a></div>
                <div class="columns four omega txt_box">
                    <?PHP if($m->stock == 2){ ?>
                        <strong>En estos momentos no tenemos stock :(<br>Pero envianos un <small><?PHP echo CHtml::link('mail', array("/contacto")); ?></small> para saber cuando tendremos :)</strong><br><br>
                        <?PHP } ?>
                    <a href="<?PHP echo Yii::app()->request->baseUrl.'/productos/'.$m->id_productos; ?>" class="prettyPhotos"><?PHP echo $m->nombre; ?></a>
                    <p><?PHP echo $m->descripcion; ?><br><br><?PHP echo '$'.number_format($m->precio); ?></p>
                </div>
            </li>
                <?PHP
            } ?>           
        </ul>
    </div>

</div>