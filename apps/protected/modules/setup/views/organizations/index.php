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
	Yii::t('app','Organizations')=>array('index'),
	Yii::t('app','Index'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Create SetupMstOrganizations','url'=>array('create')),
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
	$.fn.yiiGridView.update('setup-mst-organizations-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#setup-mst-organizations-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"setup-mst-organizations-grid_c0[]\"]').each(function(){
			$(this).attr('checked',true);	
		});
	}else{
		$('input[name=\"setup-mst-organizations-grid_c0[]\"]').each(function(){
			$(this).attr('checked',false);	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"setup-mst-organizations-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('app','Pilih salah satu row')."');
        }
        else if (window.confirm('".Yii::t('app','Are you sure want to delete this?')."'))
        {
                document.getElementById('setup-mst-organizations-form').action='".Yii::app()->createUrl('/setup/organizations/deleteall')."';
                document.getElementById('setup-mst-organizations-form').submit();
				return false;
        }
});

");
?>

<h1><?php echo Yii::t('app','Organizations');?></h1>
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
        'id'=>'setup-mst-organizations-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php 



$this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'setup-mst-organizations-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('setup-mst-organizations-master-checkbox'),
		'value'=>$model->n_org_id,
		'class'=>'CCheckBoxColumn',
	),
		//'n_org_id',
		array(
			'name'=>'v_org_code',
			"htmlOptions" => array("style"=>"text-align:center"),
		),
		'v_org_name',
			array(
		'name' => 'd_start_date',
		'value'=>'Controller::getDate()->toReadable($data->d_start_date)',
		"htmlOptions" => array("style"=>"text-align:center"),
	)
	,
	array(
		'name' => 'd_end_date',
		'value'=>'Controller::getDate()->toReadable($data->d_end_date)',
		"htmlOptions" => array("style"=>"text-align:center"),
	)
	,
	array(
		"name" => "v_flag_coy_id",
		"value" => "Controller::appHelper()->labelOrganizationFlagCoy(\$data->v_flag_coy_id)",
		"htmlOptions" => array("style"=>"text-align:center"),
	),
	array(
		"name" => 	"n_org_parent",
		"value" => " !empty(\$data->n_org_parent) ? SetupMstOrganizations::model()->findByPK(\$data->n_org_parent)->v_org_name : \"-\"",
		"htmlOptions" => array("style"=>"text-align:center"),
	),
	
		//'v_flag_coy_id',
		'v_org_level',
		/*
		'n_org_parent',
		'v_no_account',
		'v_npwp',
		'v_currency',
		'v_address',
		'v_city',
		'v_province',
		'v_country',
		'v_post_code',
		'v_phone',
		'v_contact_person',
		'v_phone_person',
		'v_email_person',
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
)); 

$this->endWidget();
?>