<?php
    $categoria = Blog::model()->findAll('activa = 1 group by id_categoria_noticia');
    $blog = Blog::model()->findAll(array(
        'condition'=>'activa = 1',
        'limit'=>'5',
        'order'=>'id_blog desc',
    ));
?>
<div class="columns four sidebar_left">
            <!--
			<form id="form1" name="form1" method="get" action="<?php Yii::app()->request->baseUrl ?>/blog/buscar">
               	<div class="search_box">
                   	<input name="search_text" id="search_text" type="text" title="Buscar" value="Buscar"><input name="search_submit" type="submit" id="search_submit" value="">
				</div>
            </form>
            -->
            <form id="form1" name="form1" method="get" class="aside_form" action="<?PHP echo Yii::app()->request->baseUrl.'/blog/' ?>buscar">
                    <div class="search_box">
                        <input name="busqueda" id="search_text" type="text" title="Escribe tu búsqueda" value=""><input  type="submit" id="search_submit" value="">
                    </div>
                </form>
            <h6 class="uppercase add-bottom">Últimos Post</h6>
            <ul class="kick_list alt_post">
                <?php foreach ($blog as $b) { ?>
                <li><?php echo CHtml::link(ucwords($b->titulo), array($b->url), array('class'=>'lightgrey_link')); ?></li>
                <?php } ?>
            </ul>
            <div class="add-bottom">&nbsp;</div>
            
            <h6 class="uppercase add-bottom">Categorías</h6>
            <ul class="kick_list alt_categ">
                <?php foreach($categoria as $cat){ ?>
                    <li><?php echo CHtml::link(ucfirst($cat->idCategoriaNoticia->nombre), array('blog/categoria/'.$cat->id_categoria_noticia), array('class'=>'lightgrey_link')); ?></li>
                <?php } ?>
            </ul>
            <div class="add-bottom">&nbsp;</div>
            
</div>