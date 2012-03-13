<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_dtl_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_lookup_dtl_code),array('view','id'=>$data->v_lookup_dtl_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_coy_id')); ?>:</b>
	<?php echo CHtml::encode($data->n_coy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_org_id')); ?>:</b>
	<?php echo CHtml::encode($data->n_org_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_lookup_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_dtl_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_lookup_dtl_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lookup_dtl_desc')); ?>:</b>
	<?php echo CHtml::encode($data->v_lookup_dtl_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_flex')); ?>:</b>
	<?php echo CHtml::encode($data->v_flex); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_sub_kelompok')); ?>:</b>
	<?php echo CHtml::encode($data->v_sub_kelompok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_kelompok')); ?>:</b>
	<?php echo CHtml::encode($data->v_kelompok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_laporan')); ?>:</b>
	<?php echo CHtml::encode($data->v_laporan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_dr_cr')); ?>:</b>
	<?php echo CHtml::encode($data->v_dr_cr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_variable_1')); ?>:</b>
	<?php echo CHtml::encode($data->v_variable_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_variable_2')); ?>:</b>
	<?php echo CHtml::encode($data->v_variable_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_variable_3')); ?>:</b>
	<?php echo CHtml::encode($data->v_variable_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_variable_4')); ?>:</b>
	<?php echo CHtml::encode($data->v_variable_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_variable_5')); ?>:</b>
	<?php echo CHtml::encode($data->v_variable_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_variable_6')); ?>:</b>
	<?php echo CHtml::encode($data->v_variable_6); ?>
	<br />

	*/ ?>

</div>