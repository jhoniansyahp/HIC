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
	Yii::t('setupModule.main','Setup Company(s)')=>array('index'),
	Yii::t("setupModule.main","Lihat \$company_code",array("\$company_code"=>$model->v_company_code,"\$company_name"=>$model->v_company_name))=>array('view','id'=>$model->v_company_code),
	Yii::t('setupModule.Main','Update'),
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
echo Yii::t('setupModule.main','Update Data $company_name',array("\$company_code"=>$model->v_company_code,"\$company_name"=>$model->v_company_name));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>