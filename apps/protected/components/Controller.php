<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends RController

{

	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	public $invalid = false;
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	public $globalMenu = array(
				// array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				// array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				// array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				// array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				// array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				// array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				// array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				// array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
				array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
	);
	
	
	public function filters()
	{
		
		return array(
			'Rights'
		);
	}
	
	public function allowedActions() 
	{ 
		return 'login'; 
	}	
	
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	public function getDate(){
		return new CDateFormat();
	}

	public function appHelper(){
		return new HICHelper();
	}
	
	public function bootstrapHelper(){
		return new bootstrapHelper();
	}
	
	public function lookupHelper($criteria = null){
		return new lookupHelper($criteria);
	}
	
	public function formHelper()
	{
		return new formHelper();		
	}
	
	public function render($view, $data=null, $return=false)
	{		
		if(isset($_GET['theme'])) {
			$theme = $_GET['theme'];
			Yii::app()->setTheme($theme);
		}
		if(isset($_GET['lang'])) {
			$lang = $_GET['lang'];
			Yii::app()->setLanguage($lang);
		}
		parent::render($view,$data,$return);
	}

}