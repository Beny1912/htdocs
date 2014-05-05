<?php

/**
 * This is the model class for table "desguace".
 *
 * The followings are the available columns in table 'desguace':
 * @property integer $id
 * @property string $nombre
 * @property string $cif
 * @property string $direccion
 * @property string $ciudad
 * @property string $provincia
 * @property integer $telefono
 * @property string $email
 * @property string $persona_contacto
 */
class Desguace extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'desguace';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, cif, direccion, ciudad, provincia, email', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion, ciudad, provincia, email', 'length', 'max'=>50),
			array('cif', 'length', 'max'=>15),
			array('persona_contacto', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, cif, direccion, ciudad, provincia, telefono, email, persona_contacto', 'safe', 'on'=>'search'),
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
			'cif' => 'Cif',
			'direccion' => 'Direccion',
			'ciudad' => 'Ciudad',
			'provincia' => 'Provincia',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'persona_contacto' => 'Persona Contacto',
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
		$criteria->compare('cif',$this->cif,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('persona_contacto',$this->persona_contacto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Desguace the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
