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
	Yii::t('app','View'),
);
/*
$this->menu=array(
	array('label'=>'List ClmDtlClaims','url'=>array('index')),
	array('label'=>'Create ClmDtlClaims','url'=>array('create')),
	array('label'=>'Update ClmDtlClaims','url'=>array('update','id'=>$model->v_claim_no)),
	array('label'=>'Delete ClmDtlClaims','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_claim_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClmDtlClaims','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_claim_no), array('update','id'=>$model->v_claim_no));
?>
</div>

<h1><?php echo Yii::t('app','View #{no}',array('{no}'=>'$model->v_claim_no'); ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_claim_no',
		'n_line_no',
		'v_benefit',
		'v_benefit_type',
		'v_hospital_note',
		'v_doctor_note',
		'v_medicine_note',
		'v_period_day_visit',
		'v_medical_indicate_note',
		'v_provider_non',
		'v_document',
		'n_max_claim',
		'n_claim_amount',
		'v_telp_provider',
		'v_alamat_provider',
		'v_nama_provider',
		'v_kode_provider',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_claim_no),array('update','id'=>$model->v_claim_no),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->v_claim_no), array('update','id'=>$model->v_claim_no));
?>
</div>
</p>
-->