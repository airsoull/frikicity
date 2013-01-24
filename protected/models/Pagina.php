<?php

/**
 * This is the model class for table "pg_pagina".
 *
 * The followings are the available columns in table 'pg_pagina':
 * @property integer $id_pagina
 * @property string $nombre
 * @property string $direccion
 * @property string $oficina
 * @property integer $telefono
 * @property string $mail
 * @property string $empresa
 */
class Pagina extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagina the static model class
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
		return 'pg_pagina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, oficina, telefono, mail, mensaje, horarios, id_enviar, mailMasivo, tarjeta', 'required'),
			array('telefono, tarjeta', 'numerical', 'integerOnly'=>true),
			array('nombre, oficina, mail, empresa', 'length', 'max'=>45),
			array('direccion', 'length', 'max'=>100),
			array('mail, mailMasivo', 'email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pagina, nombre, direccion, oficina, telefono, mail, empresa', 'safe', 'on'=>'search'),
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
			'idEnviar' => array(self::BELONGS_TO, 'Enviar', 'id_enviar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pagina' => 'ID',
			'nombre' => 'Nombre',
			'direccion' => 'Dirección',
			'oficina' => 'Oficina',
			'telefono' => 'Teléfono',
			'mail' => 'Mail',
			'empresa' => 'Empresa',
			'horarios' => 'Horario',
			'id_enviar' => 'Mostrar mensaje en la pagina de inicio',
			'mensaje' => 'Mensaje',
			'tarjeta' => 'Tarjeta',
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

		$criteria->compare('id_pagina',$this->id_pagina);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('oficina',$this->oficina,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('empresa',$this->empresa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}