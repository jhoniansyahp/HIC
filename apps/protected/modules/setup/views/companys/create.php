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
	'Setup Mst Coys'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List SetupMstCoys','url'=>array('index')),
	array('label'=>'Manage SetupMstCoys','url'=>array('admin')),
);*/
?>

<h1>Create SetupMstCoys</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>