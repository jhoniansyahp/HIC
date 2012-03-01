<?php
$this->breadcrumbs=array(
	'Quot Polis Detils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuotPolisDetil','url'=>array('index')),
	array('label'=>'Manage QuotPolisDetil','url'=>array('admin')),
);
?>

<h1>Create QuotPolisDetil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>