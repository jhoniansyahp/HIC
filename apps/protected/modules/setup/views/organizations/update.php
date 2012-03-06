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
	Yii::t("setupModule.main","Setup Organization(s)")=>array('index'),
	$model->n_org_id=>array('view','id'=>$model->n_org_id),
	Yii::t("setupModule.main",'Update'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Create SetupMstOrganizations','url'=>array('create')),
	array('label'=>'View SetupMstOrganizations','url'=>array('view','id'=>$model->n_org_id)),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);*/
?>

<h1><?php
echo Yii::t('setupModule.main','Update Data $v_org_name',array("\$v_org_name"=>$model->v_org_name,'$v_org_code'=>$model->v_org_code));
?></h1>

<?php 


echo $this->renderPartial('_form',array('model'=>$model)); 

?>