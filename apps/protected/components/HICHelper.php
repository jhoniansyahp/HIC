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
				$label = Yii::t('app','Individu');
			break;
			case "C":
				$label = Yii::t('app','Company/Business');
			break;
			default:
				$label = Yii::t('app','Unknown');
			break;
		}
		
		return $label;
	}
	
	
	public function statusActivate($status){

		switch(strtoupper($status)){
			case "I":
				$label = Yii::t('app',"Inactive");
			break;
			case "A":
				$label = Yii::t('app',"Active");
			break;
			default:
				$label = Yii::t('app',"Unknown");
			break;
		}
		
		return $label;
		
	}
	
	public function labelOrganizationFlagCoy($flag){
		
		switch(strtoupper($flag)){
			case "Y":
				$label = Yii::t("app","Company/Business");
			break;
			case "N":
				$label = Yii::t("app","Unit");
			break;
			default:
				$label = Yii::t("app","Unknown");
			break;
		}
		
			return $label;
	}
        
        public function labelPlanProdComposition($flag)
        {
            
                switch(strtoupper($flag)){
                    case "Y": 
                        $label = Yii::t("app","Yes");
                    break;
                    case "N":
                        $label = Yii::t("app","No");
                    break;
                    default:
                        $label = Yii::t("app","Unknown");
                     break;
                }

                return $label;
            
            
        }
}