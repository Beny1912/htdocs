<?php

class GroupController extends Controller
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
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
    Yii::import('ext.multimodelform.MultiModelForm');
 
    $model = new Group;
 
    $member = new Member;
    $validatedMembers = array();  //ensure an empty array
 
    if(isset($_POST['Group']))
    {
        $model->attributes=$_POST['Group'];
 
        if( //validate detail before saving the master
            MultiModelForm::validate($member,$validatedMembers,$deleteItems) &&
            $model->save()
           )
           {
             //the value for the foreign key 'groupid'
             $masterValues = array ('groupid'=>$model->id);
             if (MultiModelForm::save($member,$validatedMembers,$deleteMembers,$masterValues))
                $this->redirect(array('view','id'=>$model->id));
            }
    }
 
    $this->render('create',array(
        'model'=>$model,
        //submit the member and validatedItems to the widget in the edit form
        'member'=>$member,
        'validatedMembers' => $validatedMembers,
    ));
}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
{
    Yii::import('ext.multimodelform.MultiModelForm');
 
    $model=$this->loadModel($id); //the Group model
 
    $member = new Member;
    $validatedMembers = array(); //ensure an empty array
 
    if(isset($_POST['Group']))
    {
        $model->attributes=$_POST['Group'];
 
        //the value for the foreign key 'groupid'
        $masterValues = array ('groupid'=>$model->id);
 
        if( //Save the master model after saving valid members
            MultiModelForm::save($member,$validatedMembers,$deleteMembers,$masterValues) &&
            $model->save()
           )
                $this->redirect(array('view','id'=>$model->id));
    }
 
    $this->render('update',array(
        'model'=>$model,
        //submit the member and validatedItems to the widget in the edit form
        'member'=>$member,
        'validatedMembers' => $validatedMembers,
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
		$dataProvider=new CActiveDataProvider('Group');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Group('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Group']))
			$model->attributes=$_GET['Group'];

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
		$model=Group::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='group-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}