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
	Yii::t('app',"Agents")=>array('index'),
	Yii::t('app',"View"),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstAgents','url'=>array('index')),
	array('label'=>'Create SetupMstAgents','url'=>array('create')),
	array('label'=>'Update SetupMstAgents','url'=>array('update','id'=>$model->n_agent_no)),
	array('label'=>'Delete SetupMstAgents','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->n_agent_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstAgents','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_agent_no), array('update','id'=>$model->n_agent_no));
?>
</div>

<div class="page-header"><h1><?php echo Yii::t('app','View Agent',array('$no_agent'=>$model->n_agent_no,'$name_agent'=>$model->v_agent_name));?></h1></div>


<?php 

$organizations = SetupMstOrganizations::model()->findByAttributes(array("n_org_id"=>$model->n_coy_id));
$organizationName = $model->n_coy_id;
if(isset($organizations->v_org_name)){
	$organizationName = $organizations->v_org_name;
}

$this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_agent_no',
		'v_agent_code',
		'v_agent_name',
		array(
			"name" => "v_agent_type",
			"value" => $this->appHelper()->labelAgentType($model->v_agent_type),
		),
		array(
			"name" => "v_status_agent",
			"value" => $this->appHelper()->statusActivate($model->v_status_agent),
		),
		'v_channel_no',
		'v_jabatan',
		array(
			"name" => "v_reporting_to",
			"value" => !empty($model->v_reporting_to) ? SetupMstAgents::model()->findByPK($model->v_reporting_to)->v_agent_name : '-',
		),
		array(
			"name" => "n_coy_id",
			"value" => $organizationName,
		),
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_agent_no),array('update','id'=>$model->n_agent_no),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_agent_no), array('update','id'=>$model->n_agent_no));
?>
</div>
</p>
-->