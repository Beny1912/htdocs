<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property integer $id
 * @property string $nombre
 * @property string $apellidos
 * @property integer $telefono
 * @property string $email
 * @property string $marca
 * @property string $modelo
 * @property integer $fecha_fab
 * @property string $bastidor
 * @property string $combustible

 * @property string $piezas
 * @property string $fecha
 * @property string $estado
 * @property string $direccion
 * @property integer $cp
 * @property string $provincia
 * @property string $ciudad
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellidos, telefono, email, marca, modelo, fecha_fab, piezas, fecha, estado, direccion, cp, provincia, ciudad', 'required'),
			array('telefono, fecha_fab, cp', 'numerical', 'integerOnly'=>true),
			array('nombre, apellidos, email, marca, modelo, provincia, ciudad', 'length', 'max'=>50),
			array('bastidor', 'length', 'max'=>17),
			array('combustible', 'length', 'max'=>25),
			array('piezas, direccion', 'length', 'max'=>255),
			array('estado', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellidos, telefono, email, marca, modelo, fecha_fab, bastidor, combustible,  piezas, fecha, estado, direccion, cp, provincia, ciudad', 'safe', 'on'=>'search'),
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
			'apellidos' => 'Apellidos',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'fecha_fab' => 'Fecha Fabricacion',
			'bastidor' => 'Bastidor',
			'combustible' => 'Combustible',
		
			'piezas' => 'Piezas',
			'fecha' => 'Fecha',
			'estado' => 'Estado',
			'direccion' => 'Direccion',
			'cp' => 'Codigo Postal',
			'provincia' => 'Provincia',
			'ciudad' => 'Ciudad',
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
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('fecha_fab',$this->fecha_fab);
		$criteria->compare('bastidor',$this->bastidor,true);
		$criteria->compare('combustible',$this->combustible,true);
	
		$criteria->compare('piezas',$this->piezas,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('ciudad',$this->ciudad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
