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
	Yii::t('app','Clm Dtl Claims')=>array('index'),
	Yii::t('app','Manage'),
);
/*
$this->menu=array(
	array('label'=>'List ClmDtlClaims','url'=>array('index')),
	array('label'=>'Create ClmDtlClaims','url'=>array('create')),
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
	$.fn.yiiGridView.update('clm-dtl-claims-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#clm-dtl-claims-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"clm-dtl-claims-grid_c0[]\"]').each(function(){
			$(this).attr('checked',true);	
		});
	}else{
		$('input[name=\"clm-dtl-claims-grid_c0[]\"]').each(function(){
			$(this).attr('checked',false);	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"clm-dtl-claims-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('app','Please select row')."');
        }
        else if (window.confirm('".Yii::t('app','Are you sure want to delete this?')."'))
        {
                document.getElementById('clm-dtl-claims-form').action='".Yii::app()->createUrl('/deleteall')."';
                document.getElementById('clm-dtl-claims-form').submit();
				return false;
        }
});

");
?>

<h1><?php echo Yii::t('app','Clm Dtl Claims');?></h1>
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
        'id'=>'clm-dtl-claims-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'clm-dtl-claims-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('clm-dtl-claims-master-checkbox'),
		'value'=>$model->v_claim_no,
		'class'=>'CCheckBoxColumn',
	),
			'v_claim_no',
		'n_line_no',
		'v_benefit',
		'v_benefit_type',
		'v_hospital_note',
		'v_doctor_note',
		'v_medicine_note',
		/*
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
		'n_verifikasi_amount',
		'v_kode_provider',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

$this->endWidget();
?>