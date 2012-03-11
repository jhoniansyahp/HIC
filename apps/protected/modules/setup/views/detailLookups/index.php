<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>
<?php
$this->breadcrumbs=array(
	Yii::t('app','Detail Lookups')=>array('index'),
	Yii::t('app','Manage'),
);
/*
$this->menu=array(
	array('label'=>'List Detail Lookups','url'=>array('index')),
	array('label'=>'Create Detail Lookups','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-advanced-button').click(function(){
	$('.search-advanced-form').slideDown();
	$('.search-simple-form').slideUp();
	return false;
});

$('.search-simple-button').click(function(){
	$('.search-simple-form').slideDown();
	$('.search-advanced-form').slideUp();
	return false;
});

$('.search-advanced-form form,.search-simple-form form').submit(function(){
	$.fn.yiiGridView.update('setup-dtl-lookups-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#setup-dtl-lookups-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"setup-dtl-lookups-grid_c0[]\"]').each(function(){
			$(this).attr('checked',true);	
		});
	}else{
		$('input[name=\"setup-dtl-lookups-grid_c0[]\"]').each(function(){
			$(this).attr('checked',false);	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"setup-dtl-lookups-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('app','Please select row')."');
        }
        else if (window.confirm('".Yii::t('app','Are you sure want to delete this?')."'))
        {
                document.getElementById('setup-dtl-lookups-form').action='".Yii::app()->createUrl('/setup/detaillookups/deleteall')."';
                document.getElementById('setup-dtl-lookups-form').submit();
				return false;
        }
});

");
?>

<h1><?php echo Yii::t('app','Detail Lookups');?></h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

<div class="search-simple-form">
	<?php $this->renderPartial('_primary_search',array(
		'model'=>$model,
	)); ?>
</div>
<div class="search-advanced-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<p>
<?php
echo CHtml::link(Yii::t('app','Add'),array('Create'), array('class'=>'btn btn-primary'));

?>
&nbsp;
<?php

echo CHtml::Button(Yii::t('app','Delete'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>

<?php
$form=$this->beginWidget('CActiveForm', array(
        'id'=>'setup-dtl-lookups-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php 

$mstOrg = SetupMstOrganizations::model();
$coy = $mstOrg->findByPK($model->n_coy_id);
$org = $mstOrg->findByPK($model->n_org_id);

$this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'setup-dtl-lookups-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'enablePagination' => true,
	'template'=>"{items}\n{pager}",
	'pagerCssClass' => 'pagination',
	'pager' => array(
		'header' => 'Go To Page<br />',
		'pageSize' => '20',
		'htmlOptions' => array('class'=>''),
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('setup-dtl-lookups-master-checkbox'),
		'value'=>$model->v_lookup_dtl_code,
		'class'=>'CCheckBoxColumn',
	),
array(
	"name" => "n_coy_id",
	"value" => "Controller::lookupHelper()->custom(SetupMstOrganizations::model(),\$data->n_org_id,'v_org_name')",
),
array(
	"name" => "n_org_id",
	"value" => "\$org = SetupMstOrganizations::model()->findByPK(\$data->n_org_id); isset(\$org->v_org_name) ? \$org->v_org_name : '-'",
),
		'v_lookup_code',
		'v_lookup_dtl_code',
		'v_lookup_dtl_name',
		'v_lookup_dtl_desc',
		array(
			'name' => 'v_flex',
			'value' => "Controller::appHelper()->statusActivate(\$data->v_flex)",
		),
		/*
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
		'v_sub_kelompok',
		'v_kelompok',
		'v_laporan',
		'v_dr_cr',
		'v_variable_1',
		'v_variable_2',
		'v_variable_3',
		'v_variable_4',
		'v_variable_5',
		'v_variable_6',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

$this->endWidget();
?>