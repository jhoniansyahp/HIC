<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_claim_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_claim_no),array('view','id'=>$data->v_claim_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_policy_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_policy_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_claim')); ?>:</b>
	<?php echo CHtml::encode($this->getDate()->toReadable($data->d_claim)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_submitted')); ?>:</b>
	<?php echo CHtml::encode($this->getDate()->toReadable($data->d_submitted)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_claim_intim')); ?>:</b>
	<?php echo CHtml::encode($data->v_claim_intim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_address')); ?>:</b>
	<?php echo CHtml::encode($data->v_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_city')); ?>:</b>
	<?php echo CHtml::encode($data->v_city); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_province')); ?>:</b>
	<?php echo CHtml::encode($data->v_province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_claim_status_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_claim_status_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_claim_status')); ?>:</b>
	<?php echo CHtml::encode($data->v_claim_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_diagnosa_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_diagnosa_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_doc_scan')); ?>:</b>
	<?php echo CHtml::encode($data->v_doc_scan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_sent_by')); ?>:</b>
	<?php echo CHtml::encode($data->v_sent_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_sent_to')); ?>:</b>
	<?php echo CHtml::encode($data->v_sent_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_sent_doc')); ?>:</b>
	<?php echo CHtml::encode($this->getDate()->toReadable($data->d_sent_doc)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_intim_email')); ?>:</b>
	<?php echo CHtml::encode($data->v_intim_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_intim_telp')); ?>:</b>
	<?php echo CHtml::encode($data->v_intim_telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_bank_code')); ?>:</b>
	<?php echo CHtml::encode($data->v_bank_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_bank_cabang')); ?>:</b>
	<?php echo CHtml::encode($data->v_bank_cabang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_rekening_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_rekening_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_rekening_nama')); ?>:</b>
	<?php echo CHtml::encode($data->v_rekening_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_cabang_layanan')); ?>:</b>
	<?php echo CHtml::encode($data->v_cabang_layanan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_incident_date')); ?>:</b>
	<?php echo CHtml::encode($this->getDate()->toReadable($data->d_incident_date)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_claim_doc')); ?>:</b>
	<?php echo CHtml::encode($data->v_claim_doc); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_member_no')); ?>:</b>
	<?php echo CHtml::encode($data->v_member_no); ?>
	<br />

	*/ ?>

</div>