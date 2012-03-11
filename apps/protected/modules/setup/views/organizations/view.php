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
	Yii::t('app','View ',array("\$n_org_id"=>$model->n_org_id,"\$v_org_name"=>$model->v_org_name)),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Create SetupMstOrganizations','url'=>array('create')),
	array('label'=>'Update SetupMstOrganizations','url'=>array('update','id'=>$model->n_org_id)),
	array('label'=>'Delete SetupMstOrganizations','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->n_org_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_org_id), array('update','id'=>$model->n_org_id));
?>
</div>

<h1><?php echo Yii::t('app','View Organization',array('$v_org_name'=>$model->v_org_name,'$n_org_id'=>$model->n_org_id)); ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_org_id',
		'v_org_code',
		'v_org_name',
		array(
			"name"=>'d_start_date',
			"value"=>$this->getDate()->toReadable($model->d_start_date),
		),
		array(
			"name"=>'d_end_date',
			"value"=>$this->getDate()->toReadable($model->d_end_date),
		),
		array(
			"name"=>"v_flag_coy_id",
			"value"=> $this->appHelper()->labelOrganizationFlagCoy($model->v_flag_coy_id),
		),
		array(
			"name" => "v_org_level",
			"value" => Controller::lookupHelper()->toReadable("ORGANIZATION_LEVEL",$model->v_org_level),
		),
		array(
			"name" => "n_org_parent",
			"value" => $this->lookupHelper()->custom(SetupMstOrganizations::model(),$model->n_org_parent,'v_org_name'),
			"visible" => !empty($model->n_org_parent) ? true : false,
		),
		'v_no_account',
		'v_npwp',
		'v_currency',
		'v_address',
		'v_city',
		array(
			"name" => "v_province",
			"value" => Controller::lookupHelper()->toReadable("PROVINCE",$model->v_province),
		),
		array(
			"name" => "v_country",
			"value" => Controller::lookupHelper()->toReadable("COUNTRY",$model->v_country),
		),
		'v_post_code',
		'v_phone',
		'v_contact_person',
		'v_phone_person',
		'v_email_person',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_org_id),array('update','id'=>$model->n_org_id),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->n_org_id), array('update','id'=>$model->n_org_id));
?>
</div>
</p>
-->