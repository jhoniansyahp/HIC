<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->v_claim_no)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->v_claim_no), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'v_claim_no',
'n_line_no',
'v_benefit',
'v_benefit_type',
'v_hospital_note',
'v_doctor_note',
'v_medicine_note',
'v_period_day_visit',
'v_medical_indicate_note',
'v_provider_non',
'v_document',
'n_max_claim',
'n_claim_amount',
'v_telp_provider',
'v_alamat_provider',
'v_nama_provider',
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

