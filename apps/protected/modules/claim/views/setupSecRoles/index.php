<?php
$this->breadcrumbs=array(
	'Setup Sec Roles',
);

$this->menu=array(
	array('label'=>'Create SetupSecRoles','url'=>array('create')),
	array('label'=>'Manage SetupSecRoles','url'=>array('admin')),
);
?>

<h1>Setup Sec Roles</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
