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
	Yii::t('app','View')=>array('view','id'=>$model->v_claim_no),
	Yii::t('app','Update'),
);
/*
$this->menu=array(
	array('label'=>'List ClmDtlClaims','url'=>array('index')),
	array('label'=>'Create ClmDtlClaims','url'=>array('create')),
	array('label'=>'View ClmDtlClaims','url'=>array('view','id'=>$model->v_claim_no)),
	array('label'=>'Manage ClmDtlClaims','url'=>array('admin')),
);*/
?>

<h1><?php
echo Yii::t('app','Update #{n}',array('{n}'=>$model->v_claim_no));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>