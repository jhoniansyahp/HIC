<?php

Yii::import('application.modules.setup.models._base.BaseSetupDtlLookups');

class SetupDtlLookups extends BaseSetupDtlLookups
{
	
	public $v_lookup_name;
	public $v_lookup_desc;
	public $v_flag;
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}