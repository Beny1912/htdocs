<?php

/**
 * This is the model class for table "reservas".
 *
 * The followings are the available columns in table 'reservas':
 * @property integer $id
 * @property string $nombre
 * @property string $dia
 * @property string $hora
 * @property string $tiempo
 * @property integer $personas
 * @property integer $telefono
 * @property string $invitados
 */
class Reservas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, dia,hora, personas, telefono', 'required'),
			array('personas, telefono', 'numerical', 'integerOnly'=>true),
			array('nombre, tiempo', 'length', 'max'=>50),
			array('invitados', 'length', 'max'=>255),
			array('hora', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, dia, hora, tiempo, personas, telefono, invitados', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nombre' => 'Nombre',
			'dia' => 'Dia',
			'hora' => 'Hora',
			'tiempo' => 'Tiempo',
			'personas' => 'Personas',
			'telefono' => 'Telefono',
			'invitados' => 'Invitados',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('tiempo',$this->tiempo,true);
		$criteria->compare('personas',$this->personas);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('invitados',$this->invitados,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
