<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class HICHelper
{
	
	public function labelAgentType($agentType){
		
		switch(strtoupper($agentType)){
			case "I":
				$label = Yii::t('setupModule.main','Individu');
			break;
			case "C":
				$label = Yii::t('setupModule.main','Perusahaan/Bisnis');
			break;
			default:
				$label = Yii::t('setupModule.main','Tidak diketahui');
			break;
		}
		
		return $label;
	}
	
	
	public function statusActivate($status){

		switch(strtoupper($status)){
			case "I":
				$label = Yii::t('setupModule.main',"Non Aktif");
			break;
			case "A":
				$label = Yii::t('setupModule.main',"Aktif");
			break;
			default:
				$label = Yii::t('setupModule.main',"Tidak diketahui");
			break;
		}
		
		return $label;
		
	}
	
	public function labelOrganizationFlagCoy($flag){
		
		switch(strtoupper($flag)){
			case "Y":
				$label = Yii::t("setupModule.main","Perusahaan/Bisnis");
			break;
			case "N":
				$label = Yii::t("setupModule.main","Unit");
			break;
			default:
				$label = Yii::t("setupModule.main","Tidak diketahui");
			break;
		}
		
			return $label;
	}
}