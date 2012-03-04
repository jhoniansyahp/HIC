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
	'Setup Mst Lookups'=>array('index'),
	$model->v_lookup_code,
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
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_lookup_code), array('update','id'=>$model->v_lookup_code));
?>
</div>

<h1>View SetupMstLookups #<?php echo $model->v_lookup_code; ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_coy_id',
		'v_lookup_code',
		'v_lookup_name',
		'v_lookup_desc',
		'v_flag',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_lookup_code),array('update','id'=>$model->v_lookup_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_lookup_code), array('update','id'=>$model->v_lookup_code));
?>
</div>
</p>
-->