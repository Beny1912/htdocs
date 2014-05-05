<?php

/**
 * This is the model class for table "grupos".
 *
 * The followings are the available columns in table 'grupos':
 * @property integer $id
 * @property string $alias
 * @property string $entrada
 * @property integer $tiempo
 * @property string $salida
 * @property integer $total
 *
 * The followings are the available model relations:
 * @property Chicos[] $chicoses
 */
class Grupos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grupos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alias, entrada, tiempo, salida, total', 'required'),
			array('tiempo, total', 'numerical', 'integerOnly'=>true),
			array('alias', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, alias, entrada, tiempo, salida, total', 'safe', 'on'=>'search'),
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
			'chicoses' => array(self::HAS_MANY, 'Chicos', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'alias' => 'Alias',
			'entrada' => 'Entrada',
			'tiempo' => 'Tiempo',
			'salida' => 'Salida',
			'total' => 'Total',
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
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('entrada',$this->entrada,true);
		$criteria->compare('tiempo',$this->tiempo);
		$criteria->compare('salida',$this->salida,true);
		$criteria->compare('total',$this->total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Grupos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}