<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_plan_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_plan_code),array('view','id'=>$data->v_plan_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_template')); ?>:</b>
	<?php echo CHtml::encode($data->v_template); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_kelompok')); ?>:</b>
	<?php echo CHtml::encode($data->v_kelompok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_baris')); ?>:</b>
	<?php echo CHtml::encode($data->n_baris); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_benefit')); ?>:</b>
	<?php echo CHtml::encode($data->v_benefit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_formula')); ?>:</b>
	<?php echo CHtml::encode($data->v_formula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_update')); ?>:</b>
	<?php echo CHtml::encode($data->v_update); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_created_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_created_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_updated_date); ?>
	<br />

	*/ ?>

</div>