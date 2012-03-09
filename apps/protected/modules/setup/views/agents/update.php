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
	Yii::t('app','View',array("no_agent"=>$model->n_agent_no))=>array('view','id'=>$model->n_agent_no),
	Yii::t('app','Update'),
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
echo Yii::t('app','Update Agent',array("\$agent_name"=>$model->v_agent_name,"\$agent_code"=>$model->v_agent_code));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>