<?php
$this->breadcrumbs=array(
	'Quot Polis Detils'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List QuotPolisDetil','url'=>array('index')),
	array('label'=>'Create QuotPolisDetil','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('quot-polis-detil-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Quot Polis Detils</h1>

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
	'id'=>'quot-polis-detil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'v_quotation_no',
		'n_line_no',
		'v_policy_no',
		'n_line_policy',
		'v_plan_code',
		'v_rek_no',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
