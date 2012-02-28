<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('clm-mst-claims-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'clm-mst-claims-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'v_claim_no',
		'v_policy_no',		
		'd_claim',
		'd_submitted',
		'v_claim_intim',
		/*
		'v_address',
		'v_city',
		'v_province',
		'v_claim_status_note',
		'v_claim_status',
		'v_diagnosa_note',
		'v_doc_scan',
		'v_sent_by',
		'v_sent_to',
		'd_sent_doc',
		'v_intim_email',
		'v_intim_telp',
		'v_bank_code',
		'v_bank_cabang',
		'v_rekening_no',
		'v_rekening_nama',
		'v_cabang_layanan',
		'd_incident_date',
		'v_claim_doc',
		'v_verifikasi_by',
		'd_verifikasi_date',
		'v_upload_by',
		'd_upload_date',
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>