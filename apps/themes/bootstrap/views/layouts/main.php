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
	<?php echo Yii::app()->bootstrap->registerCss(); ?>

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
				array('label'=>'Setup', 'url'=>array('/setup'),'items'=> array(
					array('label'=>'Setup Aplikasi', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Master Agent','url'=>array('/setup/agent')),
					array('label'=>'Master Company','url'=>array('/setup/company')),
					array('label'=>'Master Organisasi','url'=>array('/setup/organization')),
					array('label'=>'Setup Produk Umum','url'=>array('/setup/plan')),
					'---',
					array('label'=>'Setup Umum', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Parameter','url'=>array('/setup/parameter')),
					array('label'=>'Lookup','url'=>array('/setup/lookup')),
					'---',
					array('label'=>'Setup Security User', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Form','url'=>array('/setup/form')),
					array('label'=>'Role','url'=>array('/setup/role')),
					array('label'=>'Form - Role','url'=>array('/setup/formrole')),
					array('label'=>'Admin User','url'=>array('/setup/users')),
					array('label'=>'Ubah Password','url'=>array('/setup/changepassword')),
				)),
				array('label'=>'Polis', 'url'=>'#','items' => array(
					array('label'=>'Data Polis','url' => array('/polis/quotPolis/admin'))
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
				array('label'=>'Polis', 'url'=>'#', 'items'=>array(
                    array('label'=>'DROPDOWN HEADER', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),
				array('label'=>'Claim', 'url'=>'#', 'items'=>array(
                    array('label'=>'DROPDOWN HEADER', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),
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
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Profile', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),
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

</body>
</html>
