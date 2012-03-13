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
	Yii::t('app','Plans')=>array('index'),
	Yii::t('app','View')=>array('view','id'=>$model->v_plan_code),
	Yii::t('app','Update'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstPlans','url'=>array('index')),
	array('label'=>'Create SetupMstPlans','url'=>array('create')),
	array('label'=>'View SetupMstPlans','url'=>array('view','id'=>$model->v_plan_code)),
	array('label'=>'Manage SetupMstPlans','url'=>array('admin')),
);*/
?>

<div class="page-header"><h1><?php
echo Yii::t('app','Update Plan',$model->v_plan_code);
?></h1></div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>