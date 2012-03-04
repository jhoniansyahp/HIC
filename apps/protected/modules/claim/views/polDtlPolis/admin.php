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
	$.fn.yiiGridView.update('pol-dtl-polis-grid', {
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
	'id' => 'pol-dtl-polis-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		array(
				'name'=>'v_policy_no',
				'value'=>'GxHtml::valueEx($data->vPolicyNo)',
				'filter'=>GxHtml::listDataEx(PolMstPolis::model()->findAllAttributes(null, true)),
				),
		'n_line_no',
		'v_plan_code',
		'v_rek_no',
		'v_status_member',
		'n_premi',
		/*
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
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>