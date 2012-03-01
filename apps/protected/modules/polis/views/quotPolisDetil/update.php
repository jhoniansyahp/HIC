<?php
$this->breadcrumbs=array(
	'Quot Polis Detils'=>array('index'),
	$model->v_quotation_no=>array('view','id'=>$model->v_quotation_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuotPolisDetil','url'=>array('index')),
	array('label'=>'Create QuotPolisDetil','url'=>array('create')),
	array('label'=>'View QuotPolisDetil','url'=>array('view','id'=>$model->v_quotation_no)),
	array('label'=>'Manage QuotPolisDetil','url'=>array('admin')),
);
?>

<h1>Update QuotPolisDetil <?php echo $model->v_quotation_no; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>