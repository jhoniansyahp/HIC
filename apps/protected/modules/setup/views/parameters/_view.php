<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_param_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_param_code),array('view','id'=>$data->v_param_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_param_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_param_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_param_desc')); ?>:</b>
	<?php echo CHtml::encode($data->v_param_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_flag')); ?>:</b>
	<?php echo CHtml::encode($data->v_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_value_number')); ?>:</b>
	<?php echo CHtml::encode($data->n_value_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_value_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_value_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_value_char')); ?>:</b>
	<?php echo CHtml::encode($data->v_value_char); ?>
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