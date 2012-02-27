<?php

class ClmDtlClaimsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ClmDtlClaims'),
		));
	}

	public function actionCreate() {
		$model = new ClmDtlClaims;


		if (isset($_POST['ClmDtlClaims'])) {
			$model->setAttributes($_POST['ClmDtlClaims']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->v_claim_no));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'ClmDtlClaims');


		if (isset($_POST['ClmDtlClaims'])) {
			$model->setAttributes($_POST['ClmDtlClaims']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->v_claim_no));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'ClmDtlClaims')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ClmDtlClaims');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ClmDtlClaims('search');
		$model->unsetAttributes();

		if (isset($_GET['ClmDtlClaims']))
			$model->setAttributes($_GET['ClmDtlClaims']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}