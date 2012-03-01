<?php
$this->breadcrumbs=array(
	'Quot Polis Detils',
);

$this->menu=array(
	array('label'=>'Create QuotPolisDetil','url'=>array('create')),
	array('label'=>'Manage QuotPolisDetil','url'=>array('admin')),
);
?>

<h1>Quot Polis Detils</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
