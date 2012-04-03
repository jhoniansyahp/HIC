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
			$session=new CHttpSession;
			$session->open();
			$this->invalid = $_SESSION['invalid'];
			$model = $this->invalid? new UserLoginc : $model=new UserLogin;
			
			//$invalid?
			// collect user input data
			if(isset($_POST['UserLogin']) || isset($_POST['UserLoginc']))
			{
				$model->attributes = $this->invalid ? $_POST['UserLoginc'] : $_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					$_SESSION['invalid'] = false;
					$this->lastViset();
					if (strpos(Yii::app()->user->returnUrl,'/index.php')!==false)
						$this->redirect(Yii::app()->controller->module->returnUrl);
					else						
						//$this->redirect(Yii::app()->createUrl(Yii::app()->user->returnUrl));
						$this->redirect(Yii::app()->user->returnUrl);
				} else {
					//$this->redirect(Yii::app()->controller->module->invalidLoginUrl);
					$this->layout = '//layouts/main';
					//$this->invalid = true;
					$_SESSION['invalid'] = true;
					$model=new UserLoginc;
					$model->attributes=$this->invalid?$_POST['UserLogin'] : $_POST['UserLogin'];
					$model->validate();
					$this->render('/user/loginc',array('model'=>$model));
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
			if(isset($_POST['UserLoginc']))
			{
				//print_r($_POST['UserLogin']);
				//die();
				$model->attributes=$_POST['UserLoginc'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					$this->lastViset();
					$this->redirect('/user/profile');
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