<?php
$this->breadcrumbs=array(
	'Clm Mst Claims',
);

$this->menu=array(
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
	array('label'=>'Manage ClmMstClaims','url'=>array('admin')),
);
?>

<h1>Clm Mst Claims</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
