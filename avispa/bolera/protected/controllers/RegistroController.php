<?php

class RegistroController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
             $this->renderPartial('/site/buscarsalida');
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
              
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Registro;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registro']))
		{
			$model->attributes=$_POST['Registro'];
			if($model->save()){
                 

                            $tiempo=$model->tiempo;
                            $entrada=$model->entrada;
                            
                            ////funcion sumar
                            function sumarMinutosFecha($FechaStr, $MinASumar) {

$FechaStr = str_replace("-"," ", $FechaStr);
$FechaStr = str_replace(":", " ", $FechaStr);

$FechaOrigen = explode(" ", $FechaStr);

$Dia = $FechaOrigen[2];
$Mes = $FechaOrigen[1];
$Ano = $FechaOrigen[0];

$Horas = $FechaOrigen[3];
$Minutos = $FechaOrigen[4];
$Segundos = $FechaOrigen[5];

// Sumo los minutos
$Minutos = ((int)$Minutos) + ((int)$MinASumar);

// Asigno la fecha modificada a una nueva variable
$FechaNueva = date("Y-m-d H:i:s",mktime($Horas,$Minutos,$Segundos,$Mes,$Dia,$Ano));

return $FechaNueva;
}
                            $salida=sumarMinutosFecha($entrada, $tiempo);
                            
                            $id=$model->id;
                            
                           $link = mysqli_connect("localhost", "root", "root", "bolera");
                           $sql="UPDATE registro SET salida='$salida' WHERE id='$id'";
                           
                           mysqli_query($link,$sql);
                            
                            
                            
                            $this->redirect(array('view','id'=>$model->id));
		
                                
                        }
                }
		$this->render('create',array(
			'model'=>$model,
		));
                        $this->renderPartial('/site/buscarsalida');
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registro']))
		{
			$model->attributes=$_POST['Registro'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
 $this->renderPartial('/site/buscarsalida');
		$this->render('update',array(
			'model'=>$model,
		));
                      
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Registro');
                 $this->renderPartial('/site/buscarsalida');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
                     
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Registro('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Registro']))
			$model->attributes=$_GET['Registro'];
 
                $this->renderPartial('/site/buscarsalida');
		$this->render('admin',array(
			'model'=>$model,
		));
                    
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Registro::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registro-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
