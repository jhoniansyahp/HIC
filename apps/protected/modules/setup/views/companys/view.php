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
	$model->v_company_code,
);
/*
$this->menu=array(
	array('label'=>'List SetupMstCoys','url'=>array('index')),
	array('label'=>'Create SetupMstCoys','url'=>array('create')),
	array('label'=>'Update SetupMstCoys','url'=>array('update','id'=>$model->v_company_code)),
	array('label'=>'Delete SetupMstCoys','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_company_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstCoys','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_company_code), array('update','id'=>$model->v_company_code));
?>
</div>

<h1>View SetupMstCoys #<?php echo $model->v_company_code; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_company_code',
		'v_company_group',
		'v_inst_type',
		'v_company_name',
		'v_regn_no',
		'v_short_name',
		'v_jenis_usaha',
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
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_company_code),array('update','id'=>$model->v_company_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_company_code), array('update','id'=>$model->v_company_code));
?>
</div>
</p>
-->