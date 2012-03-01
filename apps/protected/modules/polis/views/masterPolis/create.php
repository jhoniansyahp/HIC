<?php
$this->breadcrumbs=array(
	'Master Polises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterPolis','url'=>array('index')),
	array('label'=>'Manage MasterPolis','url'=>array('admin')),
);
?>

<h1>Create MasterPolis</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>