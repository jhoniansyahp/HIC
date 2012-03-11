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
	Yii::t('app','Lookups')=>array('index'),
	Yii::t('app','Index'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstLookups','url'=>array('index')),
	array('label'=>'Create SetupMstLookups','url'=>array('create')),
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
	$.fn.yiiGridView.update('setup-mst-lookups-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#setup-mst-lookups-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"setup-mst-lookups-grid_c0[]\"]').each(function(){
			$(this).attr('checked',true);	
		});
	}else{
		$('input[name=\"setup-mst-lookups-grid_c0[]\"]').each(function(){
			$(this).attr('checked',false);	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"setup-mst-lookups-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('app','Please select row')."');
        }
        else if (window.confirm('".Yii::t('app','Are you sure want to delete this?')."'))
        {
                document.getElementById('setup-mst-lookups-form').action='".Yii::app()->createUrl('/setup/lookups/deleteall')."';
                document.getElementById('setup-mst-lookups-form').submit();
				return false;
        }
});

");
?>

<h1><?php echo Yii::t('app','Lookups');?></h1>
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
        'id'=>'setup-mst-lookups-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php 
$org = SetupMstOrganizations::model()->findByAttributes(array("n_org_id"=>$model->n_coy_id,"v_flag_coy_id"=>"Y"));
$orgname = !empty($org) ? $org->v_org_name : '-';


$this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'setup-mst-lookups-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(
		array(
			'header'=>CHtml::checkBox('setup-mst-lookups-master-checkbox'),
			'value'=>$model->v_lookup_code,
			'class'=>'CCheckBoxColumn',
		),
		array(
			"name" => "n_coy_id",
			"value"=> 'Controller::lookupHelper()->custom(SetupMstOrganizations::model(),$data->n_coy_id,"v_org_name")',
		),
		'v_lookup_code',
		'v_lookup_name',
		'v_lookup_desc',
		array(
			"name" => "v_flag",
			"value" => "Controller::appHelper()->statusActivate(\$data->v_flag)",
			"htmlOptions" => array('style'=>'text-align:center'),
		),
		/*'v_created_by',
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