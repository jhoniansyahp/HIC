<?php
$this->breadcrumbs=array(
	Yii::t('polis.main','Quotation Policy'),
);
/*
$this->menu=array(
	array('label'=>'Create QuotPolis','url'=>array('create')),
	array('label'=>'Manage QuotPolis','url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('polis.main','List Data Polis');?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
