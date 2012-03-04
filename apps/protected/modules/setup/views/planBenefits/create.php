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
	'Setup Plan Benefits'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupPlanBenefits','url'=>array('index')),
	array('label'=>'Manage SetupPlanBenefits','url'=>array('admin')),
);*/
?>

<h1>Create SetupPlanBenefits</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>