<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class bootstrapHelper
{

	public function toDropdownValues($attributes,$key,$value){
		
		$newValues = array();

		foreach($attributes as $attribute){
			$newValues[$attribute->{$key}] = $attribute->{$value};
		}
		
		return $newValues;
	}
	
}