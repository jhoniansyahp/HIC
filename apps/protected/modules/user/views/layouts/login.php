<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php Yii::app()->clientScript->registerCoreScript('jquery');?>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.accordion.js" type="text/javascript" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lib/jquery.easing.js"></script>
        <script type="text/javascript">
	jQuery().ready(function(){
	jQuery('#navigation').accordionz({
	autoheight: false,
        header: '.head',
        navigation: true,
        event: 'click',
        animated: 'easeslide',
	active: false,
	alwaysOpen: false
	});
		// bind to change event of select to control first and seconds accordion
		// similar to tab's plugin triggerTab(), without an extra method
		var accordions = jQuery('#list1a, #list1b, #list2, #list3, #navigation, #wizard');

		jQuery('#switch select').change(function() {
			accordions.accordion("activate", this.selectedIndex-1 );
		});
		jQuery('#close').click(function() {
			accordions.accordion("activate", -1);
		});
		jQuery('#switch2').change(function() {
			accordions.accordion("activate", this.value);
		});
		jQuery('#enable').click(function() {
			accordions.accordion("enable");
		});
		jQuery('#disable').click(function() {
			accordions.accordion("disable");
		});
		jQuery('#remove').click(function() {
			accordions.accordion("destroy");
			wizardButtons.unbind("click");
		});
	});
	</script>
</head>

<body>
<div id="boxLoading" class="hide">loading...</div>
<div class="header_wrap clearfix">
        <div id="header">

                <div class="logo"><a href="index.php"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logoPMI.png" alt="logo" /></a></div>
            <div class="help fr"><a href="#" class="button rad">Panduan <img src="images/help.png" alt="help" align="absmiddle" /></a></div>

            <div class="search fr"><input name="" type="text" class="search_input" /><input name="" type="submit" class="search_button" value=""/></div>
            <div class="welcome fr">Welcome<a href="#"> <strong><?= Yii::app()->user->name?></strong></a></div>

        </div><!-- header -->



</div>

<div class="container content_frame" id="page">


<div class="container">

	<div class="span-6">
		<div id="sidebar">
		<?php
		/*
                $this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
*/
                        //$this->beginWidget('zii.widgets.CPortlet', array(
			//	'title'=>'Operations',
			//));


            // $this->menuzrs = array(
            // //'items'=>array(
                // array('label'=>'RJ', 'url'=>array('#'), 'htmlOptions'=>array('class'=>'head'),'items'=>array(
                    // array('label'=>Yii::t('app', 'Reg RJ') , 'url'=>array('/rs/datregister')),
                    // array('label'=>Yii::t('app', 'Detil RJ') , 'url'=>array('/rs/dattindakan')),
                // )),
                // array('label'=>'IGD', 'url'=>array('#'), 'htmlOptions'=>array('class'=>'head'), 'items'=>array(
                    // array('label'=>Yii::t('app', 'Register IGD') , 'url'=>array('/rs/registerIgd')),
                    // array('label'=>Yii::t('app', 'Detil IGD') , 'url'=>array('/rs/tindakanIgd')),
                    // array('label'=>Yii::t('app', 'Keluar IGD') , 'url'=>array('/rs/refpoli')),
                // )),
                // array('label'=>'RI', 'url'=>array('#'), 'htmlOptions'=>array('class'=>'head'), 'items'=>array(
                    // array('label'=>Yii::t('app', 'Deposit') , 'url'=>array('/rs/deposit')),
                    // array('label'=>Yii::t('app', 'Jadwal Praktek') , 'url'=>array('/rs/jadwalPraktek')),
                    // array('label'=>Yii::t('app', 'Pasien') , 'url'=>array('/rs/mspasien2')),
                    // array('label'=>Yii::t('app', 'Kamar') , 'url'=>array('/rs/kamar')),
                    // array('label'=>Yii::t('app', 'rawat') , 'url'=>array('/rs/datrrwt')),
                    // array('label'=>Yii::t('app', 'refobat') , 'url'=>array('/rs/refobat')),
                    // array('label'=>Yii::t('app', 'obat') , 'url'=>array('/rs/obat')),
                    // array('label'=>Yii::t('app', 'Surat Kelahiran') , 'url'=>array('/rs/suratkelahiran')),
                // )),
            // //),
            // );
			/*$this->widget('zii.widgets.CMenu', array(
                            'id'=>'navigation',
				'items'=>$this->menuzrs,
				'htmlOptions'=>array('class'=>'operations'),
			));*/
			//$this->endWidget();

            ?>


		</div><!-- sidebar -->
	</div>
        <div class="span-19 last">
            <div id="submenu">
            <?           $this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
			));
            ?>
            </div>
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>


	

	<div id="footer">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_logo.png" alt="logo" width="369" />

	</div><!-- footer -->

</div><!-- page -->
<script type="text/javascript">
/* <![CDATA[ */
    var baseUrl = '<?php echo Yii::app()->request->baseUrl ?>';
/*]]>*/
</script>

</body>
</html>