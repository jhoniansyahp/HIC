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
	Yii::t('app','Parameters')=>array('index'),
	Yii::t('app','Create'),
);

/*
$this->menu=array(
	array('label'=>'List SetupMstParameters','url'=>array('index')),
	array('label'=>'Manage SetupMstParameters','url'=>array('admin')),
);*/
?>

<div class="page-header"><h1><?php echo Yii::t('app',"Create Parameter");?></h1></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>