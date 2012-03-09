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
	'Setup Mst Agents'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List SetupMstAgents','url'=>array('index')),
	array('label'=>'Create SetupMstAgents','url'=>array('create')),
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
	$.fn.yiiGridView.update('setup-mst-agents-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#setup-mst-agents-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"setup-mst-agents-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',true));	
		});
	}else{
		$('input[name=\"setup-mst-agents-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',false));	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"setup-mst-agents-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('setupModule.main','Pilih salah satu row')."');
        }
        else if (window.confirm('".Yii::t('setupModule.main','Apakah anda yakin ingin menghapus data ini?')."'))
        {
                document.getElementById('setup-mst-agents-form').action='".Yii::app()->createUrl($this->route,array('DeleteAll'))."';
                document.getElementById('setup-mst-agents-form').submit();
				return false;
        }
});

");
?>

<h1>Setup Mst Agents</h1>
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
        'id'=>'setup-mst-agents-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'setup-mst-agents-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('setup-mst-agents-master-checkbox'),
		'value'=>$model->n_agent_no,
		'class'=>'CCheckBoxColumn',
	),
			'n_agent_no',
		'v_agent_code',
		'v_agent_name',
		'v_agent_type',
		'v_status_agent',
		'v_channel_no',
		'v_jabatan',
		/*
		'v_reporting_to',
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
		'n_coy_id',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

$this->endWidget();
?>