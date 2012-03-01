<?php
$this->breadcrumbs=array(
	'Master Polises'=>array('index'),
	$model->v_policy_no=>array('view','id'=>$model->v_policy_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterPolis','url'=>array('index')),
	array('label'=>'Create MasterPolis','url'=>array('create')),
	array('label'=>'View MasterPolis','url'=>array('view','id'=>$model->v_policy_no)),
	array('label'=>'Manage MasterPolis','url'=>array('admin')),
);
?>

<h1>Update MasterPolis <?php echo $model->v_policy_no; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>