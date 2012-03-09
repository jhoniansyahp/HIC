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
	'Setup Dtl Lookups'=>array('index'),
	$model->v_lookup_dtl_code=>array('view','id'=>$model->v_lookup_dtl_code),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List SetupDtlLookups','url'=>array('index')),
	array('label'=>'Create SetupDtlLookups','url'=>array('create')),
	array('label'=>'View SetupDtlLookups','url'=>array('view','id'=>$model->v_lookup_dtl_code)),
	array('label'=>'Manage SetupDtlLookups','url'=>array('admin')),
);*/
?>

<h1><?php
Yii::t('app','Update Data No. {n}',$model->v_lookup_dtl_code);
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>