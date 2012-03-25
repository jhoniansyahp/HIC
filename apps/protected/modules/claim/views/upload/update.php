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
	Yii::t('app','Uploads')=>array('index'),
	Yii::t('app','View')=>array('view','id'=>$model->id),
	Yii::t('app','Update'),
);
/*
$this->menu=array(
	array('label'=>'List Upload','url'=>array('index')),
	array('label'=>'Create Upload','url'=>array('create')),
	array('label'=>'View Upload','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Upload','url'=>array('admin')),
);*/
?>

<h1><?php
echo Yii::t('app','Update #{n}',array('{n}'=>$model->id));
?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>