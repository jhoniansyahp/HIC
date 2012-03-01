<?php
$this->breadcrumbs=array(
	'Master Polises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MasterPolis','url'=>array('index')),
	array('label'=>'Create MasterPolis','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('master-polis-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Master Polises</h1>

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
	'id'=>'master-polis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'v_policy_no',
		'd_start',
		'v_plan_code',
		'v_currency',
		'v_company_code',
		'n_agent_no',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
