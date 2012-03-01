<?php
$this->breadcrumbs=array(
	Yii::t('polisModule.main','Kuotasi Polis')=>array('admin'),
	$model->v_quotation_no,
);
/*
$this->menu=array(
	array('label'=>'List QuotPolis','url'=>array('index')),
	array('label'=>'Create QuotPolis','url'=>array('create')),
	array('label'=>'Update QuotPolis','url'=>array('update','id'=>$model->v_quotation_no)),
	array('label'=>'Delete QuotPolis','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_quotation_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuotPolis','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('polisModule.main','Lihat Polis Nomor {n}',$model->v_quotation_no); ?></h1>

<h3>
<?php
echo CHtml::Link(Yii::t('polisModule.main','&laquo; Kembali ke data polis'), Yii::app()->createUrl('polis/quotPolis/admin'));
?>
</h3>
<br />
<?php 

$this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_quotation_no',
		'v_policy_no',
		'd_start',
		'v_plan_code',
		'v_currency',
		'v_company_code',
		'n_agent_no',
		'v_contact_person',
		'v_contact_telp',
		'v_address',
		'v_city',
		'v_policy_status',
		'n_member',
		'v_premi_freq',
		'n_premi_budget',
		'v_add_info_penanggung',
		'n_add_info_premi',
		'v_upload_by',
		'd_upload_date',
		'v_verifikasi_by',
		'd_verifikasi_date',
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
	),
)); ?>

<h3>
<?php
echo CHtml::Link(Yii::t('polisModule.main','&laquo; Kembali ke data polis'), Yii::app()->createUrl('polis/quotPolis/admin'));
?>
</h3>
