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
	Yii::t('app','Detail Lookups')=>array('index'),
	Yii::t('app','View'),
);
/*
$this->menu=array(
	array('label'=>'List Detail Lookups','url'=>array('index')),
	array('label'=>'Create Detail Lookups','url'=>array('create')),
	array('label'=>'Update Detail Lookups','url'=>array('update','id'=>$model->v_lookup_dtl_code)),
	array('label'=>'Delete Detail Lookups','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_lookup_dtl_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detail Lookups','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_lookup_dtl_id), array('update','id'=>$model->n_lookup_dtl_id));
?>
</div>

<div class="page-header"><h1><?php echo Yii::t('app','View #{no}',array('{no}'=>$model->v_lookup_dtl_code)); ?></h1></div>


<?php 
$mstOrg = SetupMstOrganizations::model();
$coy = $mstOrg->findByPK($model->n_coy_id);
$org = $mstOrg->findByPK($model->n_org_id);

$this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array(
			"name" => "n_coy_id",
			"value" => isset($coy->v_org_name) ? $coy->v_org_name : '-',
		),
		array(
			"name" => "n_org_id",
			"value" => isset($org->v_org_name) ? $org->v_org_name : '-',
		),
		array(
			"name" => "v_lookup_code",
			"value" => $this->lookupHelper()->custom(SetupMstLookups::model(),$model->v_lookup_code,'v_lookup_name'),
		),
		'v_lookup_dtl_code',
		'v_lookup_dtl_name',
		'v_lookup_dtl_desc',
		array(
			'name' => 'v_flex',
			'value' => Controller::appHelper()->statusActivate($model->v_flex),
		),
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
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_lookup_dtl_id),array('update','id'=>$model->n_lookup_dtl_id),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_dtl_code), array('update','id'=>$model->n_lookup_dtl_id));
?>
</div>
</p>
-->