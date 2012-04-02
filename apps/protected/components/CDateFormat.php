<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class CDateFormat extends CDateTimeParser
{
	
	public function toSave($date){
		
		if(!(stripos($date,'/') !== FALSE)) return $date;
		
		list($d, $m, $y) = preg_split('/\//', $date);

		$newDate = sprintf('%4d-%02d-%02d', $y, $m, $d);
		
		return $newDate;
	}
	
	public function toReadable($date,$format="d M Y"){
		
		if(!(stripos($date,'-') !== FALSE)) return $date;
		
		$newDate = date($format,strtotime($date));
		
		return $newDate;
	}
	
	public function toDisplay($date){
		if(!(stripos($date,'-') !== FALSE)) return $date;
		
		//$newDate = date("d M Y",strtotime($date));
		list($y, $m, $d) = preg_split('/-/', $date);
		
		$newDate = sprintf('%02d/%02d/%4d', $d, $m, $y);
		
		return $newDate;
	}
	
	public function getTimestamp(){
		return new CTimestamp();
	}
}