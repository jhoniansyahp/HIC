<?php

/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/

class LookupsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	// public function filters()
	// {
		// return array(
			// 'accessControl', // perform access control for CRUD operations
		// );
	// }

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	// public function accessRules()
	// {
		// return array(
			// array('allow',  // allow all users to perform 'index' and 'view' actions
				// 'actions'=>array('index','view'),
				// 'users'=>array('*'),
			// ),
			// array('allow', // allow authenticated user to perform 'create' and 'update' actions
				// 'actions'=>array('create','update','delete','deleteall',
									// 'combo_setup-mst-organizations',
					// ),
				// 'users'=>array('@'),
			// ),
			// array('allow', // allow admin user to perform 'admin' and 'delete' actions
				// 'actions'=>array('admin','delete'),
				// 'users'=>array('admin'),
			// ),
			// array('deny',  // deny all users
				// 'users'=>array('*'),
			// ),
		// );
	// }
	
	
	/**
	 * Mass Delete
	 *
	 * 
	 */
	
	public function actions()
	{
		return array(
							
			   'combo_setup-mst-organizations'=>array(
				  'class'=>'application.extensions.EAutoCompleteAction',
				  'model'=> 'SetupMstOrganizations',
				  'label'=> 'v_org_name',
				  'value'=> 'v_org_name',
				   'id' => 'n_org_id',
				   'condition' => array('v_flag_coy_id=:flag',array(':flag'=>'Y')),
				),
					);
		
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		/*
		$criteria = new CDbCriteria();
		$criteria->compare('v_lookup_code',$model->v_lookup_code);*/
		$model_details =  new SetupDtlLookups('search');
		$model_details->unsetAttributes();  // clear any default values
		if(isset($_GET['SetupDtlLookups'])){
			$model_details->attributes=$_GET['SetupDtlLookups'];
			$model_details->attributes = array('v_lookup_code'=>$model->v_lookup_code);
			
			
								    // Convert dd/mm/yy to yy-mm-dd
						if(!empty($model_details->d_created_date) && isset($_GET['SetupDtlLookups'])){
							$model_details->d_created_date = new CDbExpression("=".$this->getDate()->toSave($model_details->d_created_date));
						}
										    // Convert dd/mm/yy to yy-mm-dd
						if(!empty($model_details->d_updated_date) && isset($_GET['SetupDtlLookups'])){
							$model_details->d_updated_date = new CDbExpression("=".$this->getDate()->toSave($model_details->d_updated_date));
						}
						
						if(empty($model_details->n_org_id) && isset($_GET['SetupDtlLookups'])){
							unset($model_details->n_org_id);
						}
						
						if(empty($model_details->n_coy_id) && isset($_GET['SetupDtlLookups'])){
							unset($model_details->n_coy_id);
						}
		}else{
			$model_details->attributes = array('v_lookup_code'=>$model->v_lookup_code);
		}
	
		$this->render('view',array(
			'model'=>$model,
			'model_details'=>$model_details,
		));
		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SetupMstLookups;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SetupMstLookups']))
		{
			$model->attributes=$_POST['SetupMstLookups'];
			
								$model->v_created_by=Yii::app()->user->id;
												$model->d_created_date=new CDbExpression('NOW()');
									 // Convert dd/mm/yy to yy-mm-dd
						$model->d_created_date = $this->getDate()->toSave($model->d_created_date);
											 // Convert dd/mm/yy to yy-mm-dd
						$model->d_updated_date = $this->getDate()->toSave($model->d_updated_date);
								
			if($model->save())
				$this->redirect(array('view','id'=>$model->v_lookup_code));
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

		if(isset($_POST['SetupMstLookups']))
		{
			$model->attributes=$_POST['SetupMstLookups'];
			
										    // Convert dd/mm/yy to yy-mm-dd
						$model->d_created_date = $this->getDate()->toSave($model->d_created_date);
												$model->v_updated_by=Yii::app()->user->id;
												$model->d_updated_date=new CDbExpression('NOW()');
										    // Convert dd/mm/yy to yy-mm-dd
						$model->d_updated_date = $this->getDate()->toSave($model->d_updated_date);
							
			if($model->save())
				$this->redirect(array('view','id'=>$model->v_lookup_code));
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
		$model=new SetupMstLookups('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SetupMstLookups']))
			$model->attributes=$_GET['SetupMstLookups'];
			
			
								    // Convert dd/mm/yy to yy-mm-dd
						if(!empty($model->d_created_date) && isset($_GET['SetupMstLookups'])){
							$model->d_created_date = new CDbExpression("=".$this->getDate()->toSave($model->d_created_date));
						}
										    // Convert dd/mm/yy to yy-mm-dd
						if(!empty($model->d_updated_date) && isset($_GET['SetupMstLookups'])){
							$model->d_updated_date = new CDbExpression("=".$this->getDate()->toSave($model->d_updated_date));
						}
						
						if(empty($model->n_coy_id) && isset($_GET['SetupMstLookups'])){
							unset($model->n_coy_id);
						}
								
		$this->render('index',array(
			'model'=>$model,
		));
		
	}
	
	public function actionIndexDetails($PK)
	{
			$model=new SetupDtlLookups('search');
			$model->findByPK($PK);
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['SetupDtlLookups']))
				$model->attributes=$_GET['SetupDtlLookups'];


									    // Convert dd/mm/yy to yy-mm-dd
							if(!empty($model->d_created_date) && isset($_GET['SetupDtlLookups'])){
								$model->d_created_date = new CDbExpression("=".$this->getDate()->toSave($model->d_created_date));
							}
											    // Convert dd/mm/yy to yy-mm-dd
							if(!empty($model->d_updated_date) && isset($_GET['SetupDtlLookups'])){
								$model->d_updated_date = new CDbExpression("=".$this->getDate()->toSave($model->d_updated_date));
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
	        if (isset($_POST['setup-mst-lookups-grid_c0']))
	        {
	                $ids = $_POST['setup-mst-lookups-grid_c0'];

	                $model=new SetupMstLookups;

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
		$model=new SetupMstLookups('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SetupMstLookups']))
			$model->attributes=$_GET['SetupMstLookups'];

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
		$model=SetupMstLookups::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='setup-mst-lookups-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
