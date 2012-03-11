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
	Yii::t('app','Lookups')=>array('index'),
	Yii::t('app','Create'),
);

/*
$this->menu=array(
	array('label'=>'List SetupMstLookups','url'=>array('index')),
	array('label'=>'Manage SetupMstLookups','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('app','Create Lookup');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>