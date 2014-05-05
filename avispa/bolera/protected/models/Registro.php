<?php

/**
 * This is the model class for table "registro".
 *
 * The followings are the available columns in table 'registro':
 * @property integer $id
 * @property string $entrada
 * @property integer $tiempo
 * @property string $salida
 * @property string $etiqueta
 * @property double $tarifa
 * @property string $hoy
 * @property string $alias_grupo
 * @property integer $grupo_id
 */
class Registro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entrada, tiempo, tarifa, hoy', 'required'),
			array('tiempo, grupo_id', 'numerical', 'integerOnly'=>true),
			array('tarifa', 'numerical'),
			array('etiqueta, alias_grupo', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, entrada, tiempo, salida, etiqueta, tarifa, hoy, alias_grupo, grupo_id', 'safe', 'on'=>'search'),
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
			'entrada' => 'Entrada',
			'tiempo' => 'Tiempo',
			'salida' => 'Salida',
			'etiqueta' => 'Etiqueta',
			'tarifa' => 'Tarifa',
			'hoy' => 'Hoy',
			'alias_grupo' => 'Alias Grupo',
			'grupo_id' => 'Grupo',
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
		$criteria->compare('entrada',$this->entrada,true);
		$criteria->compare('tiempo',$this->tiempo);
		$criteria->compare('salida',$this->salida,true);
		$criteria->compare('etiqueta',$this->etiqueta,true);
		$criteria->compare('tarifa',$this->tarifa);
		$criteria->compare('hoy',$this->hoy,true);
		$criteria->compare('alias_grupo',$this->alias_grupo,true);
		$criteria->compare('grupo_id',$this->grupo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
