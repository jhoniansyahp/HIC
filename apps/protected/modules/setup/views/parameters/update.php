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
	Yii::t('setupModule.main','Setup Parameters')=>array('index'),
	Yii::t('setupModule.main','Lihat')=>array('view','id'=>$model->v_param_code),
	Yii::t('setupModule.main','Update'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstParameters','url'=>array('index')),
	array('label'=>'Create SetupMstParameters','url'=>array('create')),
	array('label'=>'View SetupMstParameters','url'=>array('view','id'=>$model->v_param_code)),
	array('label'=>'Manage SetupMstParameters','url'=>array('admin')),
);*/
?>

<h1><?php
echo Yii::t('setupModule.main','Update Data $v_param_name',array("\$v_param_name"=>$model->v_param_name));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>