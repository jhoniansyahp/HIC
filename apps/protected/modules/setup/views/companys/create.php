<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>
<?php
$this->breadcrumbs=array(
	Yii::t('setupModule.main','Setup Company(s)')=>array('index'),
	Yii::t('setupModule.main','Buat'),
);

/*
$this->menu=array(
	array('label'=>'List SetupMstCoys','url'=>array('index')),
	array('label'=>'Manage SetupMstCoys','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('setupModule.main',"Buat Company");?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>