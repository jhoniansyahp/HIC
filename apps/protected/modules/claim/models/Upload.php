<?php

Yii::import('application.modules.claim.models._base.BaseUpload');

class Upload extends BaseUpload
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}