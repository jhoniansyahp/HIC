<?php

Yii::import('application.modules.claim.models._base.BaseSetupSecRoles');

class SetupSecRoles extends BaseSetupSecRoles
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}