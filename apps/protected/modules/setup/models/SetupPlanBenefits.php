<?php

Yii::import('application.modules.setup.models._base.BaseSetupPlanBenefits');

class SetupPlanBenefits extends BaseSetupPlanBenefits
{
	public $v_plan_name;	
	public $v_plan_desc;
	public $d_plan_start;	
	public $d_plan_end;
	public $v_prod_line;	
	public $v_prod_composition;		
	public $v_indv_or_group;		
	public $v_plan_type;		
	public $v_curr_code;		
	public $v_status;		
	public $v_created_by;			
	public $d_created_date;			
	public $v_updated_by;			
	public $d_updated_date;
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}