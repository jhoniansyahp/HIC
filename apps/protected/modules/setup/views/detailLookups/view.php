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
	$model->v_lookup_dtl_code,
);
/*
$this->menu=array(
	array('label'=>'List SetupDtlLookups','url'=>array('index')),
	array('label'=>'Create SetupDtlLookups','url'=>array('create')),
	array('label'=>'Update SetupDtlLookups','url'=>array('update','id'=>$model->v_lookup_dtl_code)),
	array('label'=>'Delete SetupDtlLookups','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_lookup_dtl_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupDtlLookups','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_dtl_code), array('update','id'=>$model->v_lookup_dtl_code));
?>
</div>

<h1>View SetupDtlLookups #<?php echo $model->v_lookup_dtl_code; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_coy_id',
		'n_org_id',
		'v_lookup_code',
		'v_lookup_dtl_code',
		'v_lookup_dtl_name',
		'v_lookup_dtl_desc',
		'v_flex',
		'v_sub_kelompok',
		'v_kelompok',
		'v_laporan',
		'v_dr_cr',
		'v_variable_1',
		'v_variable_2',
		'v_variable_3',
		'v_variable_4',
		'v_variable_5',
		'v_variable_6',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_dtl_code),array('update','id'=>$model->v_lookup_dtl_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_dtl_code), array('update','id'=>$model->v_lookup_dtl_code));
?>
</div>
</p>
-->