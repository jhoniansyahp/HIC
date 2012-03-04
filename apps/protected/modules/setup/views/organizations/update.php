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
	'Setup Mst Organizations'=>array('index'),
	$model->n_org_id=>array('view','id'=>$model->n_org_id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Create SetupMstOrganizations','url'=>array('create')),
	array('label'=>'View SetupMstOrganizations','url'=>array('view','id'=>$model->n_org_id)),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);*/
?>

<h1><?php
Yii::t('setupModule.main','Update Data No. {n}',$model->n_org_id);
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>