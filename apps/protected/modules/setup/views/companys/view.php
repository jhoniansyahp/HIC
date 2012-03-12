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
	Yii::t('app',"Companys")=>array('index'),
	Yii::t('app','View'),
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
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_company_code), array('update','id'=>$model->v_company_code));
?>
</div>

<div class="page-header"><h1><?php echo Yii::t('app',"View Company",array("\$company_name"=>$model->v_company_name));?></h1></div>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_company_code',
		'v_company_group',
		array(
			"name" => "v_inst_type",
			"value" => Controller::lookupHelper()->toReadable("INST_TYPE",$model->v_inst_type),
		),
		'v_company_name',
		'v_regn_no',
		'v_short_name',
		array(
			"name" => "v_jenis_usaha",
			"value" => Controller::lookupHelper()->toReadable("BUSINESS_LINES",$model->v_jenis_usaha),
		),
		array(
			"name" => "v_mobilitas",
			"value" => Controller::lookupHelper()->toReadable("BUSINESS_MOBILITY",$model->v_mobilitas),
		),
		'v_office_hours',
		array(
			"value"=>Controller::lookupHelper()->custom(SetupMstAgents::model(),$model->n_existing_agent,'v_agent_name'),
			"name" => "n_existing_agent",
		),
		'v_comp_add1',
		'v_comp_add2',
		'v_comp_add3',
		'v_postcode',
		'v_town',
		array(
			"name" => "v_state_code",
			"value" => Controller::lookupHelper()->toReadable("PROVINCE",$model->v_state_code),
		),
		array(
			"name" => "v_country_code",
			"value" => Controller::lookupHelper()->toReadable("COUNTRY",$model->v_country_code),
		),
		'v_phone1',
		'v_phone2',
		'v_fax',
		'v_email',
		'v_contact_person',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_company_code),array('update','id'=>$model->v_company_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_company_code), array('update','id'=>$model->v_company_code));
?>
</div>
</p>
-->