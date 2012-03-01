<?php
$this->breadcrumbs=array(
	'Master Polises',
);

$this->menu=array(
	array('label'=>'Create MasterPolis','url'=>array('create')),
	array('label'=>'Manage MasterPolis','url'=>array('admin')),
);
?>

<h1>Master Polises</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
