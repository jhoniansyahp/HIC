<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->v_policy_no)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->v_policy_no), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'v_policy_no',
'd_start',
array(
			'name' => 'vPlanCode',
			'type' => 'raw',
			'value' => $model->vPlanCode !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->vPlanCode)), array('setupMstPlans/view', 'id' => GxActiveRecord::extractPkValue($model->vPlanCode, true))) : null,
			),
'v_currency',
array(
			'name' => 'vCompanyCode',
			'type' => 'raw',
			'value' => $model->vCompanyCode !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->vCompanyCode)), array('setupMstCoys/view', 'id' => GxActiveRecord::extractPkValue($model->vCompanyCode, true))) : null,
			),
array(
			'name' => 'nAgentNo',
			'type' => 'raw',
			'value' => $model->nAgentNo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->nAgentNo)), array('setupMstAgents/view', 'id' => GxActiveRecord::extractPkValue($model->nAgentNo, true))) : null,
			),
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

<h2><?php echo GxHtml::encode($model->getRelationLabel('polDtlPolises')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->polDtlPolises as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('polDtlPolis/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>