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
	'Setup Plan Benefits'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List SetupPlanBenefits','url'=>array('index')),
	array('label'=>'Create SetupPlanBenefits','url'=>array('create')),
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
	$.fn.yiiGridView.update('setup-plan-benefits-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#setup-plan-benefits-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"setup-plan-benefits-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',true));	
		});
	}else{
		$('input[name=\"setup-plan-benefits-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',false));	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"setup-plan-benefits-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('setupModule.main','Pilih salah satu row')."');
        }
        else if (window.confirm('".Yii::t('setupModule.main','Apakah anda yakin ingin menghapus data ini?')."'))
        {
                document.getElementById('setup-plan-benefits-form').action='".Yii::app()->createUrl($this->route,array('DeleteAll'))."';
                document.getElementById('setup-plan-benefits-form').submit();
				return false;
        }
});

");
?>

<h1 style="display:none;"><?php echo Yii::t('setupModule.main',"Detail Plan Benefits");?></h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<div style="display:none;">
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
</div>

<p>
<?php
echo CHtml::link(Yii::t('setupModule.main','Tambah'),array('/setup/plans/createdetail','id'=>$model->v_plan_code), array('class'=>'btn btn-primary'));

?>
&nbsp;
<?php
echo CHtml::Button(Yii::t('setupModule.main','Hapus'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>

<?php
$form=$this->beginWidget('CActiveForm', array(
        'id'=>'setup-plan-benefits-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'setup-plan-benefits-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('setup-plan-benefits-master-checkbox'),
		'value'=>$model->v_plan_code,
		'class'=>'CCheckBoxColumn',
	),
			'v_plan_code',
		'v_template',
		'v_kelompok',
		'n_baris',
		'v_benefit',
		'v_formula',
		'v_update',
		/*
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