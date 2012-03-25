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
/*
$this->menu=array(
	array('label'=>'List ClmMstClaims','url'=>array('index')),
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
	array('label'=>'View ClmMstClaims','url'=>array('view','id'=>$model->v_claim_no)),
	array('label'=>'Manage ClmMstClaims','url'=>array('admin')),
);*/
?>

<h1><?php
echo Yii::t('app','Update #{n}',array('{n}'=>$model->v_claim_no));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>