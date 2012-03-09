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
	Yii::t('app','Setup Lookups')=>array('index'),
	Yii::t('app','View $v_lookup_code',array('$v_lookup_code'=>$model->v_lookup_code)),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstLookups','url'=>array('index')),
	array('label'=>'Create SetupMstLookups','url'=>array('create')),
	array('label'=>'Update SetupMstLookups','url'=>array('update','id'=>$model->v_lookup_code)),
	array('label'=>'Delete SetupMstLookups','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_lookup_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstLookups','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_code), array('update','id'=>$model->v_lookup_code));
?>
</div>

<h1><?php echo Yii::t('app','View $v_lookup_code',array('$v_lookup_code'=>$model->v_lookup_code)); ?></h1>


<?php 
$org = SetupMstOrganizations::model()->findByAttributes(array("n_org_id"=>$model->n_coy_id,"v_flag_coy_id"=>"Y"));

$this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array(
			"name" => "n_coy_id",
			"value" => !empty($org) ? $org->v_org_name : '-',
		),
		'v_lookup_code',
		'v_lookup_code',
		'v_lookup_desc',
		array(
			"name" => "v_flag",
			"value" => $this->appHelper()->statusActivate($model->v_flag),
		),
	),
)); ?>


<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_code),array('update','id'=>$model->v_lookup_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_lookup_code), array('update','id'=>$model->v_lookup_code));
?>
</div>
</p>
-->