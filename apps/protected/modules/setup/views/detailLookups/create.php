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
	'Setup Dtl Lookups'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupDtlLookups','url'=>array('index')),
	array('label'=>'Manage SetupDtlLookups','url'=>array('admin')),
);*/
?>

<h1>Create SetupDtlLookups</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>