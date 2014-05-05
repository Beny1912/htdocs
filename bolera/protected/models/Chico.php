<?php

/**
 * This is the model class for table "chico".
 *
 * The followings are the available columns in table 'chico':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cumple
 * @property string $padres
 * @property integer $telefono
 * @property integer $grupo_id
 */
class Chico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'chico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido', 'required'),
			array('telefono, grupo_id', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, cumple, padres', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, cumple, padres, telefono, grupo_id', 'safe', 'on'=>'search'),
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
			'apellido' => 'Apellido',
			'cumple' => 'Cumple',
			'padres' => 'Padres',
			'telefono' => 'Telefono',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('cumple',$this->cumple,true);
		$criteria->compare('padres',$this->padres,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('grupo_id',$this->grupo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Chico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
         public function getMultiModelForm()
	{
		//Can be a config file that returns the configuration too
		// return 'pathtoformconfig.formconfig';

		return array(
		  'elements'=>array(

			'nombre'=>array(
				'type'=>'text',
				'maxlength'=>50,
			),

		  	'apellido'=>array(
		  		'type'=>'text',
		  		'maxlength'=>50,
		  	),

			'cumple'=>array(
				'type'=>'text',
				//it is important to add an empty item because of new records
				'maxlength'=>50,
			),
                        'padres'=>array(
                                'type'=>'text',
                                'maxlength'=>50,
                            
                            
                        ),
                        'telefono'=>array(
                            'type'=>'text',
                            'maxlength'=>9,
                        ),
                      
		));
	} 
}
