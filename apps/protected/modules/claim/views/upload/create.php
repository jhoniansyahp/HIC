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
	Yii::t('app','Uploads')=>array('index'),
	Yii::t('app','Create'),
);

/*
$this->menu=array(
	array('label'=>'List Upload','url'=>array('index')),
	array('label'=>'Manage Upload','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t("app","Create Upload");?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>