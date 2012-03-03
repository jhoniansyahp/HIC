<?php

Yii::import('application.modules.polis.models._base.BaseMasterPolis');

class MasterPolis extends BaseMasterPolis
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}