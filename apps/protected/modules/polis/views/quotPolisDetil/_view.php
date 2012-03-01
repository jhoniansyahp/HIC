<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_quotation_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_quotation_no),array('view','id'=>$data->v_quotation_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_line_no')); ?>:</b>
	<?php echo CHtml::encode($data->n_line_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_policy_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_policy_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_line_policy')); ?>:</b>
	<?php echo CHtml::encode($data->n_line_policy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_plan_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_plan_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_rek_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_rek_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_status_member')); ?>:</b>
	<?php echo CHtml::encode($data->v_status_member); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('n_premi')); ?>:</b>
	<?php echo CHtml::encode($data->n_premi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_main_member')); ?>:</b>
	<?php echo CHtml::encode($data->v_main_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_nik')); ?>:</b>
	<?php echo CHtml::encode($data->v_nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_member_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_member_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_card_number')); ?>:</b>
	<?php echo CHtml::encode($data->v_card_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_kary_family_status')); ?>:</b>
	<?php echo CHtml::encode($data->v_kary_family_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_sex')); ?>:</b>
	<?php echo CHtml::encode($data->v_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_maried_status')); ?>:</b>
	<?php echo CHtml::encode($data->v_maried_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_dob')); ?>:</b>
	<?php echo CHtml::encode($data->d_dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_buss_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_buss_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_buss_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_buss_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_subs_coy_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_subs_coy_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_subs_coy_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_subs_coy_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_class_ip')); ?>:</b>
	<?php echo CHtml::encode($data->v_class_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_benefit')); ?>:</b>
	<?php echo CHtml::encode($data->v_benefit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_ip_plan')); ?>:</b>
	<?php echo CHtml::encode($data->v_ip_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_op_plan')); ?>:</b>
	<?php echo CHtml::encode($data->v_op_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_mt_plan')); ?>:</b>
	<?php echo CHtml::encode($data->v_mt_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_dt_plan')); ?>:</b>
	<?php echo CHtml::encode($data->v_dt_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_gl_plan')); ?>:</b>
	<?php echo CHtml::encode($data->v_gl_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_ot_plan')); ?>:</b>
	<?php echo CHtml::encode($data->v_ot_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_ppk_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_ppk_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_ppk_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_ppk_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_address')); ?>:</b>
	<?php echo CHtml::encode($data->v_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_start')); ?>:</b>
	<?php echo CHtml::encode($data->d_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_end')); ?>:</b>
	<?php echo CHtml::encode($data->d_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_migrate')); ?>:</b>
	<?php echo CHtml::encode($data->d_migrate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_mutasi')); ?>:</b>
	<?php echo CHtml::encode($data->d_mutasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_verifikasi_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_verifikasi_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_verifikasi_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_verifikasi_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_upload_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_upload_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_upload_date')); ?>:</b>
	<?php echo CHtml::encode($data->d_upload_date); ?>
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