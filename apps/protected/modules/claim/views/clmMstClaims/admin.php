<?php
$this->breadcrumbs=array(
	'Clm Mst Claims'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ClmMstClaims','url'=>array('index')),
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
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

<h1>Manage Clm Mst Claims</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'clm-mst-claims-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'v_claim_no',
		'v_policy_no',
		'd_claim',
		'd_submitted',
		'v_claim_intim',
		'v_address',
		/*
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
		'v_member_no',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
