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
	'Setup Mst Plans'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupMstPlans','url'=>array('index')),
	array('label'=>'Manage SetupMstPlans','url'=>array('admin')),
);*/
?>

<h1>Create SetupMstPlans</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>