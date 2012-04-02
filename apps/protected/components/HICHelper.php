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
			case "Y":
				$label = Yii::t('app',"Yes");
			break;
			case "N":
				$label = Yii::t('app',"No");
			break;
			default:
				$label = Yii::t('app',"Unknown");
			break;
		}
		
		return $label;
		
	}
	
	public function labelIndividuOrGroup($value)
	{
	
				switch(strtoupper($value)){
					case "G":
						$label = Yii::t('app',"Group");
					break;
					case "J":
						$label = Yii::t('app',"Joint");
					break;
					case "I":
						$label = Yii::t('app',"Individual");
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
	
	/*
	* array_merge always resetting the keys, read about array_merge below	
	* http://www.hashbangcode.com/blog/php-arraymerge-function-improvement-102.html
	*/
	function array_merge_keys(){
	 $args = func_get_args();
	 $result = array();
	 foreach ($args as &$array) {
	  foreach ($array as $key=>&$value) {
	   $result[$key] = $value;
	  }
	 }
	 return $result;
	}
}