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
	'Setup Mst Lookups'=>array('index'),
	$model->v_lookup_code=>array('view','id'=>$model->v_lookup_code),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List SetupMstLookups','url'=>array('index')),
	array('label'=>'Create SetupMstLookups','url'=>array('create')),
	array('label'=>'View SetupMstLookups','url'=>array('view','id'=>$model->v_lookup_code)),
	array('label'=>'Manage SetupMstLookups','url'=>array('admin')),
);*/
?>

<h1><?php
Yii::t('setupModule.main','Update Data No. {n}',$model->v_lookup_code);
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>