<?php

/**
 * This is the model class for table "ps_state".
 *
 * The followings are the available columns in table 'ps_state':
 * @property string $id_state
 * @property string $id_country
 * @property string $id_zone
 * @property string $name
 * @property string $iso_code
 * @property integer $tax_behavior
 * @property integer $active
 */
class PsState extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ps_state';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_country, id_zone, name, iso_code', 'required'),
			array('tax_behavior, active', 'numerical', 'integerOnly'=>true),
			array('id_country, id_zone', 'length', 'max'=>11),
			array('name', 'length', 'max'=>64),
			array('iso_code', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_state, id_country, id_zone, name, iso_code, tax_behavior, active', 'safe', 'on'=>'search'),
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
			'id_state' => 'Id State',
			'id_country' => 'Id Country',
			'id_zone' => 'Id Zone',
			'name' => 'Name',
			'iso_code' => 'Iso Code',
			'tax_behavior' => 'Tax Behavior',
			'active' => 'Active',
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

		$criteria->compare('id_state',$this->id_state,true);
		$criteria->compare('id_country',$this->id_country,true);
		$criteria->compare('id_zone',$this->id_zone,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('iso_code',$this->iso_code,true);
		$criteria->compare('tax_behavior',$this->tax_behavior);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PsState the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
