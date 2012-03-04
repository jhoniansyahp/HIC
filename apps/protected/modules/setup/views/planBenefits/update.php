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
	'Setup Plan Benefits'=>array('index'),
	$model->v_plan_code=>array('view','id'=>$model->v_plan_code),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List SetupPlanBenefits','url'=>array('index')),
	array('label'=>'Create SetupPlanBenefits','url'=>array('create')),
	array('label'=>'View SetupPlanBenefits','url'=>array('view','id'=>$model->v_plan_code)),
	array('label'=>'Manage SetupPlanBenefits','url'=>array('admin')),
);*/
?>

<h1><?php
Yii::t('setupModule.main','Update Data No. {n}',$model->v_plan_code);
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>