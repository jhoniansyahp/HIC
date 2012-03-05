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
	'Clm Mst Claims'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List ClmMstClaims','url'=>array('index')),
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
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
	$.fn.yiiGridView.update('clm-mst-claims-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#clm-mst-claims-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"clm-mst-claims-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',true));	
		});
	}else{
		$('input[name=\"clm-mst-claims-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',false));	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"clm-mst-claims-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('{$this->getModule()->name}Module.main','Pilih salah satu row')."');
        }
        else if (window.confirm('".Yii::t('{$this->getModule()->name}Module.main','Apakah anda yakin ingin menghapus data ini?')."'))
        {
                document.getElementById('clm-mst-claims-form').action='".Yii::app()->createUrl($this->route,array('DeleteAll'))."';
                document.getElementById('clm-mst-claims-form').submit();
				return false;
        }
});

");
?>

<h1>Clm Mst Claims</h1>
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
echo CHtml::link(Yii::t('claimModule.main','Tambah'),array('Create'), array('class'=>'btn btn-primary'));

?>
&nbsp;
<?php

echo CHtml::Button(Yii::t('claimModule.main','Hapus'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>

<?php
$form=$this->beginWidget('CActiveForm', array(
        'id'=>'clm-mst-claims-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'clm-mst-claims-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('clm-mst-claims-master-checkbox'),
		'value'=>$model->v_claim_no,
		'class'=>'CCheckBoxColumn',
	),
			'v_claim_no',
		'v_policy_no',
			array(
		'name' => 'd_claim',
		'value'=>'date("d M Y",strtotime($data->d_claim))',
	)
	,
			array(
		'name' => 'd_submitted',
		'value'=>'date("d M Y",strtotime($data->d_submitted))',
	)
	,
		'v_claim_intim',
		'v_address',
		'v_city',
		/*
		'v_province',
		'v_claim_status_note',
		'v_claim_status',
		'v_diagnosa_note',
		'v_doc_scan',
		'v_sent_by',
		'v_sent_to',
			array(
		'name' => 'd_sent_doc',
		'value'=>'date("d M Y",strtotime($data->d_sent_doc))',
	)
	,
		'v_intim_email',
		'v_intim_telp',
		'v_bank_code',
		'v_bank_cabang',
		'v_rekening_no',
		'v_rekening_nama',
		'v_cabang_layanan',
			array(
		'name' => 'd_incident_date',
		'value'=>'date("d M Y",strtotime($data->d_incident_date))',
	)
	,
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
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

$this->endWidget();
?>