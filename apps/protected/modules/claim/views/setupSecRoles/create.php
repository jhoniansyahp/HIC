<?php
$this->breadcrumbs=array(
	'Setup Sec Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SetupSecRoles','url'=>array('index')),
	array('label'=>'Manage SetupSecRoles','url'=>array('admin')),
);
?>

<h1>Create SetupSecRoles</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>