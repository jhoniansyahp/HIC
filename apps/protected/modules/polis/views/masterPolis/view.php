<?php
$this->breadcrumbs=array(
	'Master Polises'=>array('index'),
	$model->v_policy_no,
);

$this->menu=array(
	array('label'=>'List MasterPolis','url'=>array('index')),
	array('label'=>'Create MasterPolis','url'=>array('create')),
	array('label'=>'Update MasterPolis','url'=>array('update','id'=>$model->v_policy_no)),
	array('label'=>'Delete MasterPolis','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_policy_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterPolis','url'=>array('admin')),
);
?>

<h1>View MasterPolis #<?php echo $model->v_policy_no; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
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
