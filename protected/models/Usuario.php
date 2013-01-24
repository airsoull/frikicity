<?php

/**
 * This is the model class for table "pg_usuario".
 *
 * The followings are the available columns in table 'pg_usuario':
 * @property integer $id_usuario
 * @property string $usuario
 * @property string $password
 */
class Usuario extends CActiveRecord
{
	public $passwordR;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'pg_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, password,passwordR', 'required'),
			array('usuario, password', 'length', 'max'=>45),
			array('password', 'compare', 'compareAttribute'=>'passwordR'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, usuario, password', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'ID',
			'usuario' => 'Usuario',
			'password' => 'Password',
			'passwordR' => 'Repetir Password',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}