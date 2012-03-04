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
	$model->n_agent_no,
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
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->n_agent_no), array('update','id'=>$model->n_agent_no));
?>
</div>

<h1>View SetupMstAgents #<?php echo $model->n_agent_no; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_agent_no',
		'v_agent_code',
		'v_agent_name',
		'v_agent_type',
		'v_status_agent',
		'v_channel_no',
		'v_jabatan',
		'v_reporting_to',
		'n_coy_id',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->n_agent_no),array('update','id'=>$model->n_agent_no),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->n_agent_no), array('update','id'=>$model->n_agent_no));
?>
</div>
</p>
-->