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
	'Setup Mst Coys'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List SetupMstCoys','url'=>array('index')),
	array('label'=>'Create SetupMstCoys','url'=>array('create')),
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
	$.fn.yiiGridView.update('setup-mst-coys-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#setup-mst-coys-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"setup-mst-coys-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',true));	
		});
	}else{
		$('input[name=\"setup-mst-coys-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',false));	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"setup-mst-coys-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('{$this->getModule()->name}Module.main','Pilih salah satu row')."');
        }
        else if (window.confirm('".Yii::t('{$this->getModule()->name}Module.main','Apakah anda yakin ingin menghapus data ini?')."'))
        {
                document.getElementById('setup-mst-coys-form').action='".Yii::app()->createUrl($this->route,array('DeleteAll'))."';
                document.getElementById('setup-mst-coys-form').submit();
				return false;
        }
});

");
?>

<h1>Setup Mst Coys</h1>
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
echo CHtml::link(Yii::t('setupModule.main','Tambah'),array('Create'), array('class'=>'btn btn-primary'));

?>
&nbsp;
<?php

echo CHtml::Button(Yii::t('setupModule.main','Hapus'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>

<?php
$form=$this->beginWidget('CActiveForm', array(
        'id'=>'setup-mst-coys-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'setup-mst-coys-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('setup-mst-coys-master-checkbox'),
		'value'=>$model->v_company_code,
		'class'=>'CCheckBoxColumn',
	),
			'v_company_code',
		'v_company_group',
		'v_inst_type',
		'v_company_name',
		'v_regn_no',
		'v_short_name',
		'v_jenis_usaha',
		/*
		'v_mobilitas',
		'v_office_hours',
		'n_existing_agent',
		'v_comp_add1',
		'v_comp_add2',
		'v_comp_add3',
		'v_postcode',
		'v_town',
		'v_state_code',
		'v_country_code',
		'v_phone1',
		'v_phone2',
		'v_fax',
		'v_email',
		'v_contact_person',
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