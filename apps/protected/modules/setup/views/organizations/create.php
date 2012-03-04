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
	'Setup Mst Organizations'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupMstOrganizations','url'=>array('index')),
	array('label'=>'Manage SetupMstOrganizations','url'=>array('admin')),
);*/
?>

<h1>Create SetupMstOrganizations</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>