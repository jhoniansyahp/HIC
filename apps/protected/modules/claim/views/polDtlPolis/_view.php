<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('v_policy_no')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->vPolicyNo)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('n_line_no')); ?>:
	<?php echo GxHtml::encode($data->n_line_no); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_plan_code')); ?>:
	<?php echo GxHtml::encode($data->v_plan_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_rek_no')); ?>:
	<?php echo GxHtml::encode($data->v_rek_no); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_status_member')); ?>:
	<?php echo GxHtml::encode($data->v_status_member); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('n_premi')); ?>:
	<?php echo GxHtml::encode($data->n_premi); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('v_note')); ?>:
	<?php echo GxHtml::encode($data->v_note); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_main_member')); ?>:
	<?php echo GxHtml::encode($data->v_main_member); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_nik')); ?>:
	<?php echo GxHtml::encode($data->v_nik); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_member_no')); ?>:
	<?php echo GxHtml::encode($data->v_member_no); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_card_number')); ?>:
	<?php echo GxHtml::encode($data->v_card_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_name')); ?>:
	<?php echo GxHtml::encode($data->v_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_kary_family_status')); ?>:
	<?php echo GxHtml::encode($data->v_kary_family_status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_sex')); ?>:
	<?php echo GxHtml::encode($data->v_sex); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_maried_status')); ?>:
	<?php echo GxHtml::encode($data->v_maried_status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_dob')); ?>:
	<?php echo GxHtml::encode($data->d_dob); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_buss_code')); ?>:
	<?php echo GxHtml::encode($data->v_buss_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_buss_name')); ?>:
	<?php echo GxHtml::encode($data->v_buss_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_subs_coy_code')); ?>:
	<?php echo GxHtml::encode($data->v_subs_coy_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_subs_coy_name')); ?>:
	<?php echo GxHtml::encode($data->v_subs_coy_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_class_ip')); ?>:
	<?php echo GxHtml::encode($data->v_class_ip); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_benefit')); ?>:
	<?php echo GxHtml::encode($data->v_benefit); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_ip_plan')); ?>:
	<?php echo GxHtml::encode($data->v_ip_plan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_op_plan')); ?>:
	<?php echo GxHtml::encode($data->v_op_plan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_mt_plan')); ?>:
	<?php echo GxHtml::encode($data->v_mt_plan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_dt_plan')); ?>:
	<?php echo GxHtml::encode($data->v_dt_plan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_gl_plan')); ?>:
	<?php echo GxHtml::encode($data->v_gl_plan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_ot_plan')); ?>:
	<?php echo GxHtml::encode($data->v_ot_plan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_ppk_code')); ?>:
	<?php echo GxHtml::encode($data->v_ppk_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_ppk_name')); ?>:
	<?php echo GxHtml::encode($data->v_ppk_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_address')); ?>:
	<?php echo GxHtml::encode($data->v_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_start')); ?>:
	<?php echo GxHtml::encode($data->d_start); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_end')); ?>:
	<?php echo GxHtml::encode($data->d_end); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_migrate')); ?>:
	<?php echo GxHtml::encode($data->d_migrate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_mutasi')); ?>:
	<?php echo GxHtml::encode($data->d_mutasi); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_verifikasi_by')); ?>:
	<?php echo GxHtml::encode($data->v_verifikasi_by); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_verifikasi_date')); ?>:
	<?php echo GxHtml::encode($data->d_verifikasi_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_upload_by')); ?>:
	<?php echo GxHtml::encode($data->v_upload_by); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_upload_date')); ?>:
	<?php echo GxHtml::encode($data->d_upload_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_created_by')); ?>:
	<?php echo GxHtml::encode($data->v_created_by); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_created_date')); ?>:
	<?php echo GxHtml::encode($data->d_created_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('v_updated_by')); ?>:
	<?php echo GxHtml::encode($data->v_updated_by); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('d_updated_date')); ?>:
	<?php echo GxHtml::encode($data->d_updated_date); ?>
	<br />
	*/ ?>

</div>