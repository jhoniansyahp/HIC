<?php
$this->breadcrumbs=array(
	'Setup Sec Roles'=>array('index'),
	$model->v_role_code=>array('view','id'=>$model->v_role_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List SetupSecRoles','url'=>array('index')),
	array('label'=>'Create SetupSecRoles','url'=>array('create')),
	array('label'=>'View SetupSecRoles','url'=>array('view','id'=>$model->v_role_code)),
	array('label'=>'Manage SetupSecRoles','url'=>array('admin')),
);
?>

<h1>Update SetupSecRoles <?php echo $model->v_role_code; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>