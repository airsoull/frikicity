<?php

/**
 * This is the model class for table "pd_productos".
 *
 * The followings are the available columns in table 'pd_productos':
 * @property integer $id_productos
 * @property string $nombre
 * @property string $descripcion
 * @property integer $precio
 * @property string $imagen
 * @property integer $id_categoria
 * @property integer $id_modelo
 *
 * The followings are the available model relations:
 * @property Categoria $idCategoria
 * @property Modelo $idModelo
 */
class Productos extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Productos the static model class
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
		return 'pd_productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, precio, imagen, id_categoria, id_modelo, descripcionGeneral, stock', 'required'),
			array('precio, id_categoria, id_modelo', 'numerical', 'integerOnly'=>true),
			array('nombre','unique'),
			array('nombre', 'length', 'max'=>45),
			array('imagen', 'length', 'max'=>100),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_productos, nombre, descripcion, precio, imagen, id_categoria, id_modelo', 'safe', 'on'=>'search'),
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
			'idCategoria' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
			'idModelo' => array(self::BELONGS_TO, 'Modelo', 'id_modelo'),
			'idEnviar' => array(self::BELONGS_TO, 'Enviar', 'stock'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_productos' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripción',
			'precio' => 'Precio',
			'imagen' => 'Imagen',
			'id_categoria' => 'Categoría',
			'id_modelo' => 'Modelo',
			'descripcionGeneral' => 'Descripción General',
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

		$criteria->compare('id_productos',$this->id_productos);
		$criteria->compare('nombre',$this->nombre, true);
		$criteria->compare('descripcion',$this->descripcion, true);
		$criteria->compare('precio',$this->precio, true);
		$criteria->compare('imagen',$this->imagen, true);
		$criteria->compare('id_categoria',$this->id_categoria, true);
		$criteria->compare('id_modelo',$this->id_modelo, true);
		$criteria->compare('stock',$this->stock, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}