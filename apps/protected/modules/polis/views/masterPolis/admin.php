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
	$.fn.yiiGridView.update('master-polis-grid', {
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
	'id' => 'master-polis-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'v_policy_no',
		'd_start',
		array(
				'name'=>'v_plan_code',
				'value'=>'GxHtml::valueEx($data->vPlanCode)',
				'filter'=>GxHtml::listDataEx(SetupMstPlans::model()->findAllAttributes(null, true)),
				),
		'v_currency',
		array(
				'name'=>'v_company_code',
				'value'=>'GxHtml::valueEx($data->vCompanyCode)',
				'filter'=>GxHtml::listDataEx(SetupMstCoys::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'n_agent_no',
				'value'=>'GxHtml::valueEx($data->nAgentNo)',
				'filter'=>GxHtml::listDataEx(SetupMstAgents::model()->findAllAttributes(null, true)),
				),
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
			'class' => 'CButtonColumn',
		),
	),
)); ?>