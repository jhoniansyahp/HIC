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
			$model=new UserLoginc;
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
					$this->layout = '//layouts/main';
					$this->render('/user/loginc',array('model'=>$model));
				}
			} else {
				// display the login form
				$this->layout = '//layouts/login';
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