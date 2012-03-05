<?php

Yii::import('application.modules.setup.models._base.BaseSetupSecUsers');

class SetupSecUsers extends BaseSetupSecUsers
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}