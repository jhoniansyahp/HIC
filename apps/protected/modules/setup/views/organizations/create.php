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
	Yii::t('app','Organizations')=>array('index'),
	Yii::t('app','Create'),
);

/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);*/
?>

<div class="page-header"><h1><?php echo Yii::t('app','Create Organizations');?></h1></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>