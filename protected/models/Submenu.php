<?php

/**
 * This is the model class for table "pd_submenu".
 *
 * The followings are the available columns in table 'pd_submenu':
 * @property integer $id_submenu
 * @property string $nombre
 * @property string $descripcion
 * @property integer $id_menu
 * @property integer $id_categoria
 *
 * The followings are the available model relations:
 * @property Categoria $idCategoria
 * @property Menu $idMenu
 */
class Submenu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Submenu the static model class
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
		return 'pd_submenu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, id_menu, id_categoria', 'required'),
			array('id_menu, id_categoria', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_submenu, nombre, descripcion, id_menu, id_categoria', 'safe', 'on'=>'search'),
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
			'idMenu' => array(self::BELONGS_TO, 'Menu', 'id_menu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_submenu' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripción',
			'id_menu' => 'Menú',
			'id_categoria' => 'Categoría',
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

		$criteria->compare('id_submenu',$this->id_submenu);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('id_categoria',$this->id_categoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}