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
	Yii::t("app","Organizations")=>array('index'),
	Yii::t("app","View")=>array('view','id'=>$model->n_org_id),
	Yii::t("app",'Update'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Create SetupMstOrganizations','url'=>array('create')),
	array('label'=>'View SetupMstOrganizations','url'=>array('view','id'=>$model->n_org_id)),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);*/
?>

<div class="page-header"><h1>
<?php
echo Yii::t('app','Update Organization',array("\$v_org_name"=>$model->v_org_name,'$v_org_code'=>$model->v_org_code));
?></h1></div>

<?php 


echo $this->renderPartial('_form',array('model'=>$model)); 

?>