<?php

/**
 * This is the model class for table "pg_imagenes_slice".
 *
 * The followings are the available columns in table 'pg_imagenes_slice':
 * @property integer $id_imagenes_slice
 * @property string $imagen
 * @property string $descripcion
 */
class ImagenesSlice extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ImagenesSlice the static model class
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
		return 'pg_imagenes_slice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imagen, descripcion, tipo, id_tipo', 'required'),
			array('imagen, descripcion', 'length', 'max'=>100),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_imagenes_slice, imagen, descripcion', 'safe', 'on'=>'search'),
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
			'id_imagenes_slice' => 'Id Imagenes Slice',
			'imagen' => 'Imagen',
			'descripcion' => 'Descripción',
			'tipo' => 'URL',
			'id_tipo'=>'¿Qué elemento?',
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

		$criteria->compare('id_imagenes_slice',$this->id_imagenes_slice);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}