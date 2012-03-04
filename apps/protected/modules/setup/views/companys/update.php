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
	'Setup Mst Coys'=>array('index'),
	$model->v_company_code=>array('view','id'=>$model->v_company_code),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List SetupMstCoys','url'=>array('index')),
	array('label'=>'Create SetupMstCoys','url'=>array('create')),
	array('label'=>'View SetupMstCoys','url'=>array('view','id'=>$model->v_company_code)),
	array('label'=>'Manage SetupMstCoys','url'=>array('admin')),
);*/
?>

<h1><?php
Yii::t('setupModule.main','Update Data No. {n}',$model->v_company_code);
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>