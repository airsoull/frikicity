<?php

/**
 * This is the model class for table "bl_blog".
 *
 * The followings are the available columns in table 'bl_blog':
 * @property integer $id_blog
 * @property string $titulo
 * @property string $url
 * @property string $imagen
 * @property string $noticia
 * @property string $noticia_general
 * @property string $fecha
 * @property integer $activa
 * @property integer $id_categoria_noticia
 *
 * The followings are the available model relations:
 * @property EvEnviar $activa0
 * @property CategoriaNoticia $idCategoriaNoticia
 */
class Blog extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Blog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bl_blog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, url, imagen, noticia, noticia_general, activa, id_categoria_noticia', 'required'),
			array('activa, id_categoria_noticia', 'numerical', 'integerOnly'=>true),
			array('titulo, url', 'length', 'max'=>767),
			array('imagen', 'length', 'max'=>100),
			array('titulo', 'unique'),
			array('titulo', 'dosPalabras'),
			array('image', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_blog, titulo, url, imagen, noticia, noticia_general, fecha, activa, id_categoria_noticia', 'safe', 'on'=>'search'),
		);
	}

	public function dosPalabras($attributes, $params){
		$count = count(explode(" ", trim($this->titulo)));
		if($count <= 1){ 
			$this->addError('titulo', 'Debe de tener 2 o más palabras');
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'activa0' => array(self::BELONGS_TO, 'Enviar', 'activa'),
			'idCategoriaNoticia' => array(self::BELONGS_TO, 'CategoriaNoticia', 'id_categoria_noticia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_blog' => 'Id Blog',
			'titulo' => 'Titulo',
			'url' => 'Url',
			'imagen' => 'Imagen',
			'noticia' => 'Noticia',
			'noticia_general' => 'Noticia General',
			'fecha' => 'Fecha',
			'activa' => 'Activa',
			'id_categoria_noticia' => 'Categoría Noticia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_blog',$this->id_blog);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('noticia',$this->noticia,true);
		$criteria->compare('noticia_general',$this->noticia_general,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('activa',$this->activa);
		$criteria->compare('id_categoria_noticia',$this->id_categoria_noticia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}