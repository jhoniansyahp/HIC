<?php
$this->breadcrumbs=array(
	'Clm Mst Claims'=>array('index'),
	$model->v_claim_no=>array('view','id'=>$model->v_claim_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClmMstClaims','url'=>array('index')),
	array('label'=>'Create ClmMstClaims','url'=>array('create')),
	array('label'=>'View ClmMstClaims','url'=>array('view','id'=>$model->v_claim_no)),
	array('label'=>'Manage ClmMstClaims','url'=>array('admin')),
);
?>

<h1>Update ClmMstClaims <?php echo $model->v_claim_no; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>