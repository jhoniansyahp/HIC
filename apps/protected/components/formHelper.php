<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class formHelper
{
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