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
	$.fn.yiiGridView.update('clm-dtl-claims-grid', {
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
	'id' => 'clm-dtl-claims-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'v_claim_no',
		'n_line_no',
		'v_benefit',
		'v_benefit_type',
		'v_hospital_note',
		'v_doctor_note',
		/*
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
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>