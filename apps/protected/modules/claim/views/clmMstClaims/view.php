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
	$model->v_claim_no,
);
/*
$this->menu=array(
	array('label'=>'List ClmMstClaims','url'=>array('index')),
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
	array('label'=>'Update ClmMstClaims','url'=>array('update','id'=>$model->v_claim_no)),
	array('label'=>'Delete ClmMstClaims','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_claim_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClmMstClaims','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('claimModule.main','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('claimModule.main','Update &raquo;',$model->v_claim_no), array('update','id'=>$model->v_claim_no));
?>
</div>

<h1>View ClmMstClaims #<?php echo $model->v_claim_no; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_claim_no',
		'v_policy_no',
		'd_claim',
		'd_submitted',
		'v_claim_intim',
		'v_address',
		'v_city',
		'v_province',
		'v_claim_status_note',
		'v_claim_status',
		'v_diagnosa_note',
		'v_doc_scan',
		'v_sent_by',
		'v_sent_to',
		'd_sent_doc',
		'v_intim_email',
		'v_intim_telp',
		'v_bank_code',
		'v_bank_cabang',
		'v_rekening_no',
		'v_rekening_nama',
		'v_cabang_layanan',
		'd_incident_date',
		'v_claim_doc',
		'v_member_no',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('claimModule.main','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('claimModule.main','Update &raquo;',$model->v_claim_no),array('update','id'=>$model->v_claim_no),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('claimModule.main','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('claimModule.main','Update &raquo;',$model->v_claim_no), array('update','id'=>$model->v_claim_no));
?>
</div>
</p>
-->