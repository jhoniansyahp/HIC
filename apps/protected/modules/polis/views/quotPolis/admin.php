<?php
$this->breadcrumbs=array(
	Yii::t('polisModule.main','Kuotasi Polis')=>array('admin')
);
/*
$this->menu=array(
	array('label'=>'List QuotPolis','url'=>array('index')),
	array('label'=>'Create QuotPolis','url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').slideToggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('quot-polis-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('polisModule.main','Data Polis');?></h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

<?php echo CHtml::link(Yii::t('polisModule.main','Pencarian Mutakhir'),'#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br />
<br />
<p>
<?php echo CHtml::link(Yii::t('polisModule.main','Tambah'),Yii::app()->createUrl('polis/quotPolis/create'), array('class'=>'btn btn-primary')); ?>&nbsp;
<?php echo CHtml::link(Yii::t('polisModule.main','Hapus'),Yii::app()->createUrl('polis/quotPolis/delete'), array('class'=>'btn btn-primary')); ?>
</p>
<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'quot-polis-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass'=>'table table-bordered',
	'columns'=>array(
		'v_policy_no',
		'n_member',
		'v_plan_code',
		/*
		'n_agent_no',
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
			'class'=>'bootstrap.widgets.BootButtonColumn',
		    'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
