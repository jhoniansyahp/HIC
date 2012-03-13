<?php

class LoginController extends Controller
{
	public $defaultAction = 'login';
	
	public function actions()
		{
			return array(
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha'=>array(
					'class'=>'CCaptchaAction',
					'backColor'=>0xFFFFFF,
				),			
			);
		}
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
               
		$this->layout = '//layouts/login';
		if (Yii::app()->user->isGuest) {
			$model=new UserLogin;
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					$this->lastViset();
					if (strpos(Yii::app()->user->returnUrl,'/index.php')!==false)
						$this->redirect(Yii::app()->controller->module->returnUrl);
					else						
						$this->redirect(Yii::app()->user->returnUrl);
				} else {
					$this->redirect(Yii::app()->controller->module->invalidLoginUrl);
					// $this->layout = '//layouts/main';
					// $model=new UserLoginc;
					// $model->attributes=$_POST['UserLogin'];
					// $this->render('/user/loginc',array('model'=>$model));
				}
			} else {
				// display the login form
				//$this->layout = '//layouts/login';
				$this->render('/user/login',array('model'=>$model));
			}
		} else
			$this->redirect(Yii::app()->controller->module->returnUrl);
	}
	
	public function actionInvalidLogin()
	{			
		$this->layout = '//layouts/main';
		if (Yii::app()->user->isGuest) {
			$model=new UserLoginc;
			
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				print_r($_POST['UserLogin']);
				die();
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					$this->lastViset();
					$this->redirect('user/profile');
					// if (strpos(Yii::app()->user->returnUrl,'/index.php')!==false)
						// $this->redirect(Yii::app()->controller->module->returnUrl);
					// else						
						// $this->redirect(Yii::app()->user->returnUrl);
				} 			
				$this->render('/user/loginc',array('model'=>$model));
			} else {
				// display the login form
				//$this->layout = '//layouts/login';
				$this->render('/user/loginc',array('model'=>$model));
			}
		} else
			$this->redirect(Yii::app()->controller->module->returnUrl);
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit = time();
		$lastVisit->save();
	}

}