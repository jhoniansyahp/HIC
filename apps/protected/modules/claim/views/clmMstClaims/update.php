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
	Yii::t('app','Clm Mst Claims')=>array('index'),
	Yii::t('app','View')=>array('view','id'=>$model->v_claim_no),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>'List ClmMstClaims','url'=>array('index')),
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
	array('label'=>'View ClmMstClaims','url'=>array('view','id'=>$model->v_claim_no)),
	array('label'=>'Manage ClmMstClaims','url'=>array('admin')),
	array('label' => Yii::t('app', 'Create') . ' Detail', 'url'=>array('clmDtlClaims/create', 'v_claim_no'=>$model->v_claim_no)),
);
?>

<h1><?php
echo Yii::t('app','Update #{n}',array('{n}'=>$model->v_claim_no));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<p>
<?php
echo CHtml::link(Yii::t('app','Add'),array('clmDtlClaims/create', 'v_claim_no'=>$model->v_claim_no), array('class'=>'btn btn-primary'));

?>
&nbsp;
<?php

echo CHtml::Button(Yii::t('app','Delete'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>
<?php 
$DataProvider=new CActiveDataProvider('ClmDtlClaims', array(
            'criteria'=>array(
                'condition'=>"v_claim_no='".$model->v_claim_no."'",                
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
$this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'clm-dtl-claims-grid',
	'dataProvider'=>$DataProvider,
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('clm-dtl-claims-master-checkbox'),
		'value'=>$model->v_claim_no,
		'class'=>'CCheckBoxColumn',
	),
			'v_claim_no',
		'n_line_no',
		'v_benefit',
		'v_benefit_type',
		'v_hospital_note',
		'v_doctor_note',
		'v_medicine_note',
		/*
		'v_period_day_visit',
		'v_medical_indicate_note',
		'v_provider_non',
		'v_document',
		'n_max_claim',
		'n_claim_amount',
		'v_telp_provider',
		'v_alamat_provider',
		'v_nama_provider',
		'v_verifikasi_by',
		'd_verifikasi_date',
		'v_upload_by',
		'd_upload_date',
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
		'n_verifikasi_amount',
		'v_kode_provider',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

?>