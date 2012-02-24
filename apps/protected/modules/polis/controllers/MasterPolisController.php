<?php

class MasterPolisController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view'),
				'roles'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'roles'=>array('UserCreator'),
				),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'MasterPolis'),
		));
	}

	public function actionCreate() {
		$model = new MasterPolis;


		if (isset($_POST['MasterPolis'])) {
			$model->setAttributes($_POST['MasterPolis']);

			/*if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->v_policy_no));
			}*/
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'MasterPolis');


		if (isset($_POST['MasterPolis'])) {
			$model->setAttributes($_POST['MasterPolis']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->v_policy_no));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'MasterPolis')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('MasterPolis');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new MasterPolis('search');
		$model->unsetAttributes();

		if (isset($_GET['MasterPolis']))
			$model->setAttributes($_GET['MasterPolis']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}