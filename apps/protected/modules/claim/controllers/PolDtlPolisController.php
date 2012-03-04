<?php

class PolDtlPolisController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'PolDtlPolis'),
		));
	}

	public function actionCreate() {
		$model = new PolDtlPolis;


		if (isset($_POST['PolDtlPolis'])) {
			$model->setAttributes($_POST['PolDtlPolis']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'PolDtlPolis');


		if (isset($_POST['PolDtlPolis'])) {
			$model->setAttributes($_POST['PolDtlPolis']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'PolDtlPolis')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('PolDtlPolis');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new PolDtlPolis('search');
		$model->unsetAttributes();

		if (isset($_GET['PolDtlPolis']))
			$model->setAttributes($_GET['PolDtlPolis']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}