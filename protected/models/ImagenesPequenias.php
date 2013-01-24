<?php

/**
 * This is the model class for table "pg_imagenes_pequenias".
 *
 * The followings are the available columns in table 'pg_imagenes_pequenias':
 * @property integer $id_imagenes_pequenias
 * @property string $imagen
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tipo
 * @property integer $id_tipo
 */
class ImagenesPequenias extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ImagenesPequenias the static model class
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
		return 'pg_imagenes_pequenias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imagen, nombre, descripcion, tipo, id_tipo', 'required'),
			array('tipo, id_tipo', 'numerical', 'integerOnly'=>true),
			array('imagen, descripcion', 'length', 'max'=>100),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_imagenes_pequenias, imagen, nombre, descripcion, tipo, id_tipo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'id_tipo'),
			'producto' => array(self::BELONGS_TO, 'Productos', 'id_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_imagenes_pequenias' => 'Id Imagenes Pequenias',
			'imagen' => 'Imagen',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripción',
			'tipo' => 'URL',
			'id_tipo' => '¿Qué elemento?',
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

		$criteria->compare('id_imagenes_pequenias',$this->id_imagenes_pequenias);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('id_tipo',$this->id_tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}