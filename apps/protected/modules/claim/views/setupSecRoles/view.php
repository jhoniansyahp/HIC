<?php
$this->breadcrumbs=array(
	'Setup Sec Roles'=>array('index'),
	$model->v_role_code,
);

$this->menu=array(
	array('label'=>'List SetupSecRoles','url'=>array('index')),
	array('label'=>'Create SetupSecRoles','url'=>array('create')),
	array('label'=>'Update SetupSecRoles','url'=>array('update','id'=>$model->v_role_code)),
	array('label'=>'Delete SetupSecRoles','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_role_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupSecRoles','url'=>array('admin')),
);
?>

<h1>View SetupSecRoles #<?php echo $model->v_role_code; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'n_coy_id',
		'n_org_id',
		'v_role_code',
		'v_role_name',
	),
)); ?>
