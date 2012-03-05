<?php

/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/

class AgentsController extends Controller
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
				'actions'=>array('create','update','delete','deleteall',
									'combo_setup-mst-agents',
					),
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
	 * Mass Delete
	 *
	 * 
	 */
	
	public function actions()
	{
		return array(
							
			   'combo_setup-mst-agents'=>array(
				  'class'=>'application.extensions.EAutoCompleteAction',
				  'model'=> 'SetupMstAgents',
				  'label'=> 'v_agent_name',
				  'value'=> 'v_agent_name',
				   'id' => 'n_agent_no',
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
		$model=new SetupMstAgents;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SetupMstAgents']))
		{
			$model->attributes=$_POST['SetupMstAgents'];
			
			$model->v_created_by=Yii::app()->user->id;
			$model->d_created_date=new CDbExpression('NOW()');
			// Convert dd/mm/yy to yy-mm-dd
			$model->d_created_date = $this->convertDate($model->d_created_date);
			// Convert dd/mm/yy to yy-mm-dd
			$model->d_updated_date = $this->convertDate($model->d_updated_date);
								
			if($model->save())
				$this->redirect(array('view','id'=>$model->n_agent_no));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['SetupMstAgents']))
		{
			$model->attributes=$_POST['SetupMstAgents'];
			
										    // Convert dd/mm/yy to yy-mm-dd
						$model->d_created_date = $this->convertDate($model->d_created_date);
												$model->v_updated_by=Yii::app()->user->id;
												$model->d_updated_date=new CDbExpression('NOW()');
										    // Convert dd/mm/yy to yy-mm-dd
						$model->d_updated_date = $this->convertDate($model->d_updated_date);
							
			if($model->save())
				$this->redirect(array('view','id'=>$model->n_agent_no));
		}

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
		$model=new SetupMstAgents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SetupMstAgents']))
			$model->attributes=$_GET['SetupMstAgents'];
			
			
								    // Convert dd/mm/yy to yy-mm-dd
						if(!empty($model->d_created_date) && isset($_GET['SetupMstAgents'])){
							$model->d_created_date = new CDbExpression("=".$this->convertDate($model->d_created_date));
						}
										    // Convert dd/mm/yy to yy-mm-dd
						if(!empty($model->d_updated_date) && isset($_GET['SetupMstAgents'])){
							$model->d_updated_date = new CDbExpression("=".$this->convertDate($model->d_updated_date));
						}
								
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/*
	* Mass Delete
	*/
	public function actionDeleteAll()
	{
	        if (isset($_POST['setup-mst-agents-grid_c0']))
	        {
	                $ids = $_POST['setup-mst-agents-grid_c0'];

	                $model=new SetupMstAgents;

	                foreach ($ids as $id)
	                {
	                        $model->deleteByPk($id);
	                }

	                $this->actionIndex();
	        }
	        else
	        {
	                Yii::app()->user->setFlash('error', 'Please select at least one record to delete.');
	                $this->actionIndex();
	        }               
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SetupMstAgents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SetupMstAgents']))
			$model->attributes=$_GET['SetupMstAgents'];

		$this->render('index',array(
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
		$model=SetupMstAgents::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='setup-mst-agents-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
