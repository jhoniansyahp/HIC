<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
array(
			'name' => 'vPolicyNo',
			'type' => 'raw',
			'value' => $model->vPolicyNo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->vPolicyNo)), array('polMstPolis/view', 'id' => GxActiveRecord::extractPkValue($model->vPolicyNo, true))) : null,
			),
'n_line_no',
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
'id',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('clmMstClaims')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->clmMstClaims as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('clmMstClaims/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>