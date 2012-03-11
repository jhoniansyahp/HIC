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
	Yii::t('app','Agents')=>array('index'),
	Yii::t('app','Create'),
);

/*
$this->menu=array(
	array('label'=>'List SetupMstAgents','url'=>array('index')),
	array('label'=>'Manage SetupMstAgents','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('app','Create Agent');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>