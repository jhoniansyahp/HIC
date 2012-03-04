<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	public $globalMenu = array(
				array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
				array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
	);
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	public function convertDate($date){
		
		if(!(stripos($date,'/') !== FALSE)) return $date;
		
		list($d, $m, $y) = preg_split('/\//', $date);

		$newDate = sprintf('%4d-%02d-%02d', $y, $m, $d);
		
		return $newDate;
	}
	
	public function convertDate2Readable($date){
		
		if(!(stripos($date,'-') !== FALSE)) return $date;
		
		$newDate = date("d M Y",strtotime($date));
		
		return $newDate;
	}
	
	public function convertDateNormal($date){
		if(!(stripos($date,'-') !== FALSE)) return $date;
		
		//$newDate = date("d M Y",strtotime($date));
		list($y, $m, $d) = preg_split('/-/', $date);
		$newDate = sprintf('%02d/%02d/%4d', $d, $m, $y);
		
		return $newDate;
	}
}