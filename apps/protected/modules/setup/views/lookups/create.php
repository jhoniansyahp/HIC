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
	'Setup Mst Lookups'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupMstLookups','url'=>array('index')),
	array('label'=>'Manage SetupMstLookups','url'=>array('admin')),
);*/
?>

<h1>Create SetupMstLookups</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>