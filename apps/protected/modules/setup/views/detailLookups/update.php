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
	Yii::t('app','Detail Lookups')=>array('index'),
	Yii::t('app','View')=>array('view','id'=>$model->n_lookup_dtl_id),
	Yii::t('app','Update'),
);
/*
$this->menu=array(
	array('label'=>'List Detail Lookups','url'=>array('index')),
	array('label'=>'Create Detail Lookups','url'=>array('create')),
	array('label'=>'View Detail Lookups','url'=>array('view','id'=>$model->v_lookup_dtl_code)),
	array('label'=>'Manage Detail Lookups','url'=>array('admin')),
);*/
?>

<h1><?php
echo Yii::t('app','Update #{n}',array('{n}'=>$model->n_lookup_dtl_id));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>