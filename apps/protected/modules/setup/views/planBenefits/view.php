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
	Yii::t('app','Claim Product')=>array('index'),
	Yii::t('app','View'),
);
/*
$this->menu=array(
	array('label'=>'List SetupPlanBenefits','url'=>array('index')),
	array('label'=>'Create SetupPlanBenefits','url'=>array('create')),
	array('label'=>'Update SetupPlanBenefits','url'=>array('update','id'=>$model->v_plan_code)),
	array('label'=>'Delete SetupPlanBenefits','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_plan_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupPlanBenefits','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_plan_code), array('update','id'=>$model->v_plan_code));
?>
</div>

<h1><?php Yii::t('app','View #{no}',array('{no}'=>'$model->v_plan_code'); ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_plan_code',
		'v_template',
		'v_kelompok',
		'n_baris',
		'v_benefit',
		'v_formula',
		'v_update',
		'n_max_harirawat',
		'n_max_klaim_pmonth',
		'n_max_klaim_pday',
		'n_max_visite_pday',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_plan_code),array('update','id'=>$model->v_plan_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_plan_code), array('update','id'=>$model->v_plan_code));
?>
</div>
</p>
-->