EYui
====

Provee widgets para interfaz de usuario basados en jQuery orientados a interactuar con el modelo
de datos del usuario.

[EYui demo project - download][2].

##Instalacion General

	1. Copia la extension EYui en tu directorio protected/extensions.
	
	2.	Configura protected/config/main.php asi:
	
			'import'=>array(
				'ext.EYui.*',
			),
			
	3.	En protected/controllers/siteController.php agrega un action:
	
			importante:
				este action definido aqui es comun para todos los widgets que 
				pueda tener esta libreria, se coloca solo una vez y todas las instancias
				de cualquier widget recurriran por defecto a este action quien a su vez
				redirigira el request al widget indicado. En otras palabras, este action
				se pone solo una vez para todos los widgets y no en cada controller.
	
			public function actions()
			{
				return array(
					'eyui'=>array(
						'class'=>'EYuiAction',
					),
				);
			}

			
##EYuiSearch

Widget de interfaz de usuario que permite al usuario hacer una busqueda por palabra clave en un modelo de datos especifico.

![screenshot][1]

	Ejemplo:
	
		en un modelo cualquiera, digamos un formulario de edicion, se quiere buscar una persona
		por su nombre y pasarle esta seleccion al modelo:

			<?php 
				$this->widget('ext.EYui.EYuiSearch'
					,array(
						'model'=>$model,
						'attribute'=>'idpersona',
						'searchModel'=>Persona::model(),
						'attributes'=>array('idpersona','nombres'),
					)
				);
			?>
			
	Descripcion de Parametros:
	
			'model':				instancia que va a recibir la seleccion.
			'attribute':			el atributo del modelo que sera establecido con el resultado.
			'searchModel':			el modelo en donde se quiere hacer la busqueda.
			'attributes':			un array con dos entradas: el primaryKey del modelo referenciado por searchModel
									y el nombre del atributo que sera usado para mostrar resultados de busqueda.
							
	Otros parametros que se pueden especificar:
	
			'success':				nombre de una funcion javascript que recibe errores.
									ejemplo: 'success'=>'mifuncionOk'
									siendo:
										function mifuncionOk(id,text){
											alert("seleccionado="+id+", texto es="+text);
										}
			'error':				nombre de una funcion javascript que recibe errores.
									ejemplo: 'error'=>'mifuncion'
									siendo:
										function mifuncion(e){
											alert(e.responseText);
										}
			'id':					identificador del DIV a ser generado. por defecto "eyuisearch0"
									sirve para extender la funcionalidad con jquery o css.
			'searchLabel':			etiqueta que aparece arriba del widget junto a la caja de texto.
			'searchTextButton':		etiqueta del boton 'search'
			'okTextButton':			etiqueta del boton 'ok'
					
	Donde se hara la busqueda:
	
			El widget hara la busqueda en el modelo de datos que tu le proveas. En el ejemplo arriba
			se hace referencia a Persona::model(). 
			
			En esta clase apuntada por searchModel debe implementarse una interfaz:
			
				EYuiSearchable.php
			
			La cual se implementa asi:
			
				class Persona extends CActiveRecord 
					implements EYuiSearchable
				{
					public function eyuisearchable_findModels($text){
						$criteria=new CDbCriteria;
						$criteria->params = array(':texto'=>"%".$text."%");
						$criteria->addCondition("nombre like :texto");
						return $this->findAll($criteria);
					}
					...
				}
	

	
[1]: https://bitbucket.org/christiansalazarh/eyui/downloads/eyuisearch.gif
[2]: https://bitbucket.org/christiansalazarh/eyui/downloads/eyuidemo.zip