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
	Yii::t('app','Clm Dtl Claims')=>array('index'),
	Yii::t('app','Create'),
);

/*
$this->menu=array(
	array('label'=>'List ClmDtlClaims','url'=>array('index')),
	array('label'=>'Manage ClmDtlClaims','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t("app","Create ClmDtlClaims");?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>