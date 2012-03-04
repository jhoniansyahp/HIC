<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_agent_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->n_agent_no),array('view','id'=>$data->n_agent_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_agent_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_agent_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_agent_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_agent_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_agent_type')); ?>:</b>
	<?php echo CHtml::encode($data->v_agent_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_status_agent')); ?>:</b>
	<?php echo CHtml::encode($data->v_status_agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_channel_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_channel_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->v_jabatan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reporting_to')); ?>:</b>
	<?php echo CHtml::encode($data->v_reporting_to); ?>
	<br />

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_coy_id')); ?>:</b>
	<?php echo CHtml::encode($data->n_coy_id); ?>
	<br />

	*/ ?>

</div>