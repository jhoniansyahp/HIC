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
	'Setup Mst Plans'=>array('index'),
	$model->v_plan_code,
);
/*
$this->menu=array(
	array('label'=>'List SetupMstPlans','url'=>array('index')),
	array('label'=>'Create SetupMstPlans','url'=>array('create')),
	array('label'=>'Update SetupMstPlans','url'=>array('update','id'=>$model->v_plan_code)),
	array('label'=>'Delete SetupMstPlans','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_plan_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstPlans','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_plan_code), array('update','id'=>$model->v_plan_code));
?>
</div>

<h1>View SetupMstPlans #<?php echo $model->v_plan_code; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_plan_code',
		'v_plan_name',
		'v_plan_desc',
		'd_plan_start',
		'd_plan_end',
		'v_prod_line',
		'v_prod_composition',
		'v_indv_or_group',
		'v_plan_type',
		'v_curr_code',
		'v_status',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_plan_code),array('update','id'=>$model->v_plan_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_plan_code), array('update','id'=>$model->v_plan_code));
?>
</div>
</p>
-->