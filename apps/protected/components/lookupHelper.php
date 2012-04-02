<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class lookupHelper extends Controller
{
	private $_criteria;
	private $_childCriteria;
	private $_results;
	
	public function __construct($criteria=null,$childCriteria=null){
		$this->setCriteria($criteria);
		$this->setChildCriteria($criteria);
	}
	
	public function setCriteria($criteria=null)
	{
		$this->_criteria = $criteria;
	}
	
	public function setChildCriteria($criteria=null)
	{
		$this->_childCriteria = $criteria;
	}
	
	public function getCriteria()
	{
		return $this->_criteria;
	}
	
	public function getChildCriteria()
	{
		return $this->_childCriteria;
	}
	
	public function findByPK($value)
	{
		return $this->findByAttributes(array("v_lookup_code"=>$value,"v_flag"=>"A"));
	}
	
	public function findByAttributes($values){
		$results = SetupMstLookups::model()->findByAttributes($values);
		return $this->findChild($results,$this->getChildCriteria());
	}
	
	public function findChild($parentAttributes,$criteria){
		
		if(!isset($parentAttributes)){
			return array();
		}

		$attributes = $parentAttributes->getAttributes();

		if($criteria == null){
			$criteria = new CDbCriteria();
			$criteria->compare("v_lookup_code",$attributes['v_lookup_code']);
			$criteria->compare("v_flex","A");
		}
	
		$details = SetupDtlLookups::model()->findAll($criteria);
		
		$values = array();
		$values = $this->bootstrapHelper()->toDropdownValues($details,'v_lookup_dtl_code','v_lookup_dtl_name');
		return $values;
	}
	//Deprecated
	public function toDisplay($id){
		$display = SetupDtlLookups::model()->findByPK($id);
		
		return isset($display->v_lookup_dtl_name) ? $display->v_lookup_dtl_name : $id;
	}
	
	public function toReadable($lookup_name,$lookup_dtl_code)
	{
		$display = SetupDtlLookups::model()->findByAttributes(array("v_lookup_code"=>$lookup_name,"v_lookup_dtl_code"=>$lookup_dtl_code));
		return isset($display->v_lookup_dtl_name) ? $display->v_lookup_dtl_name : $lookup_dtl_code;		
	}
	
	public function custom($model,$id,$display)
	{
		$result	= $model->findByPK($id);
		return isset($result) ? $result->{$display} : $id;
	}

}