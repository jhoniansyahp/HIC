<?php
$this->breadcrumbs=array(
	'Clm Mst Claims'=>array('index'),
	'Create',
);

$this->menu=array(	
	array('label'=>'List Claims','url'=>array('index')),
	array('label'=>'Manage Claims','url'=>array('admin')),
);

?>

<h1>Create Claims</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>