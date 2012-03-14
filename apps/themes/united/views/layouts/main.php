<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" /-->
	<!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" /-->
	<!--[if lt IE 8]>
	<!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" /-->
	<![endif]-->

	<!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" /-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	
	<?php $this->widget('bootstrap.widgets.BootNavbar', array(
    'fixed'=>false,	
    //'brand'=>Yii::app()->name,
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.BootMenu',			
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index') , 'active'=>true),
				array('label'=>'Setup', 'url'=>'#','items'=> array(
					array('label'=>'Setup Aplikasi', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Master Agent','url'=>array('/setup/agents')),
					array('label'=>'Master Company','url'=>array('/setup/companys')),
					array('label'=>'Master Organisasi','url'=>array('/setup/organizations')),
					array('label'=>'Setup Produk Umum','url'=>array('/setup/plans')),
					array('label'=>'Setup Produk Klaim','url'=>array('/setup/planbenefits')),
					'---',
					array('label'=>'Setup Umum', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Parameter','url'=>array('/setup/parameters')),
					array('label'=>'Lookups','url'=>array('/setup/lookups')),
					array('label'=>'Detail Lookups','url'=>array('/setup/detaillookups')),
					'---',
					array('label'=>'Setup Security User', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Admin User','url'=>array('/user/admin')),
					array('label'=>'Tasks','url'=>array('/rights/authitem/tasks')),
					array('label'=>'Roles','url'=>array('/rights/authitem/roles')),
					array('label'=>'Operations','url'=>array('/rights/authitem/operations')),
					array('label'=>'Permissions','url'=>array('/rights/authitem/permissions')),
					array('label'=>'Assignment','url'=>array('/rights/assignment')),
					//array('label'=>'Ubah Password','url'=>array('/setup/changepassword')),
				)),
				array('label'=>'Polis', 'url'=>'#','items' => array(
					array('label'=>'Data Polis','url' => array('/polis/quotation')),
					array('label'=>'Upload Data Polis','url' => array('/polis/upload'))
				)),
				array('label'=>'Claim', 'url'=>array('/claim')),
				array('label'=>'Laporan', 'url'=>'#', 'items'=>array(
                    array('label'=>'DROPDOWN HEADER', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),            
        ),
        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
        array(
            'class'=>'bootstrap.widgets.BootMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
	        		array('label'=>Yii::t("menu",'Profile'), 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,'items'=>array(
					array('label'=>Yii::t("menu",'Your Profile'),'url'=>array('/user/profile')),
					array('label'=>Yii::t("menu",'Ubah Informasi'),'url'=>array('/user/profile/edit')),
                	array('label'=>Yii::t("menu",'Ubah Password'), 'url'=>array('/user/profile/changepassword')),
            	)),
				array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Link', 'url'=>'#'),
            ),
        ),
    ),
)); ?>
<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootCrumb', array(    
			'links'=>$this->breadcrumbs,
		)); ?>			
	<?php endif?>
	<?php echo $content; ?>
</div><!-- page -->
<hr />
<div class="row">
    <div class="footer span16">   
    
        <div class="span2" style="float:left">System v.0.1</div>
       
       <div class="span6 right">
        <form class="span2" name="lang">
		<select name="lang" id="select01" class="span2 right" onchange="this.form.submit();">
                <option>Pilih Bahasa</option>
                <option value="id">Indonesia</option>
                <option value="en-us">Ingris</option>
                <option value="arab">Arab</option>
                <option value="spanyol">Spanyol</option>
              </select>
		</form>
        <form class="span3" name="theme">      
        <select name="theme" id="select02" class="span2 right" style="margin-right:10px;" onchange="this.form.submit();">
                <option>Pilih Style</option>
				<option value="bootstrap">bootstrap</option>
                <option value="cyborg">cyborg</option>
                <option value="slate">slate</option>
                <option value="united">united</option>
                <option value="dangdut">dangdut</option>
              </select>
		</form>
        </div>
        <div class="span4" style="margin:0 auto">
        Copyright &copy; 2012 - <a href="#">Disclaimer</a> | <a href="#">Help</a> 
        </div>
        
        
   
        
        </div>
    </div>
</body>
</html>
