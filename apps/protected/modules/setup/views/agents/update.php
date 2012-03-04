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
	'Setup Mst Agents'=>array('index'),
	$model->n_agent_no=>array('view','id'=>$model->n_agent_no),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List SetupMstAgents','url'=>array('index')),
	array('label'=>'Create SetupMstAgents','url'=>array('create')),
	array('label'=>'View SetupMstAgents','url'=>array('view','id'=>$model->n_agent_no)),
	array('label'=>'Manage SetupMstAgents','url'=>array('admin')),
);*/
?>

<h1><?php
Yii::t('setupModule.main','Update Data No. {n}',$model->n_agent_no);
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>