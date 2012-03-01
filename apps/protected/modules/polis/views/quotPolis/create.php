<?php
$this->breadcrumbs=array(
	Yii::t('polisModule.main','Kuotasi Polis')=>array('admin'),
	Yii::t('polisModule.main','Buat Polis'),
);
/*
$this->menu=array(
	array('label'=>'List QuotPolis','url'=>array('index')),
	array('label'=>'Manage QuotPolis','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('polisModule.main','Buat Kuotasi Polis'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>