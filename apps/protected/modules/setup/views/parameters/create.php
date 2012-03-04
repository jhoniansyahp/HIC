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
	'Setup Mst Parameters'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupMstParameters','url'=>array('index')),
	array('label'=>'Manage SetupMstParameters','url'=>array('admin')),
);*/
?>

<h1>Create SetupMstParameters</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>