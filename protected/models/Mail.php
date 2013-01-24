<?php

/**
 * This is the model class for table "ev_mail".
 *
 * The followings are the available columns in table 'ev_mail':
 * @property integer $id_mail
 * @property string $nombre
 * @property string $mail
 * @property integer $id_enviar
 * @property integer $id_envioespecial
 *
 * The followings are the available model relations:
 * @property Enviar $idEnviar
 * @property Envioespecial $idEnvioespecial
 */
class Mail extends CActiveRecord
{
	public $mensaje, $asunto, $email;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mail the static model class
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
		return 'ev_mail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, mail, id_enviar, mensaje, id_envioespecial, asunto, email', 'required'),
			array('id_enviar, id_envioespecial', 'numerical', 'integerOnly'=>true),
			array('nombre, mail', 'length', 'max'=>100),
			array('mail, email', 'email'),
			array('mail', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mail, nombre, mail, id_enviar, id_envioespecial', 'safe', 'on'=>'search'),
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
			'idEnvioespecial' => array(self::BELONGS_TO, 'Envioespecial', 'id_envioespecial'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mail' => 'ID',
			'nombre' => 'Nombre',
			'mail' => 'Mail',
			'id_enviar' => 'Enviar',
			'id_envioespecial' => 'Envio Especial',
			'asunto' => 'Asunto',
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

		$criteria->compare('id_mail',$this->id_mail);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('id_enviar',$this->id_enviar);
		$criteria->compare('id_envioespecial',$this->id_envioespecial);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}