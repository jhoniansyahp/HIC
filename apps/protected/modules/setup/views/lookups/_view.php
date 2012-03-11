<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_lookup_code),array('view','id'=>$data->v_lookup_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_coy_id')); ?>:</b>
	<?php echo CHtml::encode($data->n_coy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_lookup_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_desc')); ?>:</b>
	<?php echo CHtml::encode($data->v_lookup_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_flag')); ?>:</b>
	<?php echo CHtml::encode($data->v_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_created_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_created_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_created_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_updated_date); ?>
	<br />

	*/ ?>

</div>