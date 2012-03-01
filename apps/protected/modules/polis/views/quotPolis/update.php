<?php
$this->breadcrumbs=array(
	Yii::t('polis.main','Kuotasi Polis')=>array('admin'),
	$model->v_quotation_no=>array('view','id'=>$model->v_quotation_no),
	Yii::t('polis.main','update'),
);
/* 
$this->menu=array(
	array('label'=>'List QuotPolis','url'=>array('index')),
	array('label'=>'Create QuotPolis','url'=>array('create')),
	array('label'=>'View QuotPolis','url'=>array('view','id'=>$model->v_quotation_no)),
	array('label'=>'Manage QuotPolis','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('polis.main','Ubah Kuotasi Polis'); ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>