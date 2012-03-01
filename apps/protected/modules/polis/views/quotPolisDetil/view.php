<?php
$this->breadcrumbs=array(
	'Quot Polis Detils'=>array('index'),
	$model->v_quotation_no,
);

$this->menu=array(
	array('label'=>'List QuotPolisDetil','url'=>array('index')),
	array('label'=>'Create QuotPolisDetil','url'=>array('create')),
	array('label'=>'Update QuotPolisDetil','url'=>array('update','id'=>$model->v_quotation_no)),
	array('label'=>'Delete QuotPolisDetil','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_quotation_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuotPolisDetil','url'=>array('admin')),
);
?>

<h1>View QuotPolisDetil #<?php echo $model->v_quotation_no; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_quotation_no',
		'n_line_no',
		'v_policy_no',
		'n_line_policy',
		'v_plan_code',
		'v_rek_no',
		'v_status_member',
		'n_premi',
		'v_note',
		'v_main_member',
		'v_nik',
		'v_member_no',
		'v_card_number',
		'v_name',
		'v_kary_family_status',
		'v_sex',
		'v_maried_status',
		'd_dob',
		'v_buss_code',
		'v_buss_name',
		'v_subs_coy_code',
		'v_subs_coy_name',
		'v_class_ip',
		'v_benefit',
		'v_ip_plan',
		'v_op_plan',
		'v_mt_plan',
		'v_dt_plan',
		'v_gl_plan',
		'v_ot_plan',
		'v_ppk_code',
		'v_ppk_name',
		'v_address',
		'd_start',
		'd_end',
		'd_migrate',
		'd_mutasi',
		'v_verifikasi_by',
		'd_verifikasi_date',
		'v_upload_by',
		'd_upload_date',
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
	),
)); ?>
