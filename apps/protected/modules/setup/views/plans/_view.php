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

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_plan_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_plan_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_plan_desc')); ?>:</b>
	<?php echo CHtml::encode($data->v_plan_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_plan_start')); ?>:</b>
	<?php echo CHtml::encode($this->ConvertDateNormal($data->d_plan_start)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_plan_end')); ?>:</b>
	<?php echo CHtml::encode($this->ConvertDateNormal($data->d_plan_end)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_prod_line')); ?>:</b>
	<?php echo CHtml::encode($data->v_prod_line); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_prod_composition')); ?>:</b>
	<?php echo CHtml::encode($data->v_prod_composition); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_indv_or_group')); ?>:</b>
	<?php echo CHtml::encode($data->v_indv_or_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_plan_type')); ?>:</b>
	<?php echo CHtml::encode($data->v_plan_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_curr_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_curr_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_status')); ?>:</b>
	<?php echo CHtml::encode($data->v_status); ?>
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
	<?php echo CHtml::encode($this->ConvertDateNormal($data->d_updated_date)); ?>a
	<br />

	*/ ?>

</div>