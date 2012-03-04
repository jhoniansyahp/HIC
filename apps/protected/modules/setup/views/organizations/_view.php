<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_org_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->n_org_id),array('view','id'=>$data->n_org_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_org_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_org_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_org_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_org_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_start_date')); ?>:</b>
	<?php echo CHtml::encode($this->ConvertDateNormal($data->d_start_date)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_end_date')); ?>:</b>
	<?php echo CHtml::encode($this->ConvertDateNormal($data->d_end_date)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_flag_coy_id')); ?>:</b>
	<?php echo CHtml::encode($data->v_flag_coy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_org_level')); ?>:</b>
	<?php echo CHtml::encode($data->v_org_level); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('n_org_parent')); ?>:</b>
	<?php echo CHtml::encode($data->n_org_parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_no_account')); ?>:</b>
	<?php echo CHtml::encode($data->v_no_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_npwp')); ?>:</b>
	<?php echo CHtml::encode($data->v_npwp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_currency')); ?>:</b>
	<?php echo CHtml::encode($data->v_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_address')); ?>:</b>
	<?php echo CHtml::encode($data->v_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_city')); ?>:</b>
	<?php echo CHtml::encode($data->v_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_province')); ?>:</b>
	<?php echo CHtml::encode($data->v_province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_country')); ?>:</b>
	<?php echo CHtml::encode($data->v_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_post_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_post_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_phone')); ?>:</b>
	<?php echo CHtml::encode($data->v_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->v_contact_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_phone_person')); ?>:</b>
	<?php echo CHtml::encode($data->v_phone_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_email_person')); ?>:</b>
	<?php echo CHtml::encode($data->v_email_person); ?>
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

	*/ ?>

</div>