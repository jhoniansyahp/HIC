<?php

class ClmMstClaimsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ClmMstClaims'),
		));
	}

	public function actionCreate() {
		$model = new ClmMstClaims;


		if (isset($_POST['ClmMstClaims'])) {
			$model->setAttributes($_POST['ClmMstClaims']);

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
		$model = $this->loadModel($id, 'ClmMstClaims');


		if (isset($_POST['ClmMstClaims'])) {
			$model->setAttributes($_POST['ClmMstClaims']);

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
			$this->loadModel($id, 'ClmMstClaims')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ClmMstClaims');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ClmMstClaims('search');
		$model->unsetAttributes();

		if (isset($_GET['ClmMstClaims']))
			$model->setAttributes($_GET['ClmMstClaims']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}