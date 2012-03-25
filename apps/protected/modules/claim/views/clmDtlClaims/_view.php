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

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_line_no')); ?>:</b>
	<?php echo CHtml::encode($data->n_line_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_benefit')); ?>:</b>
	<?php echo CHtml::encode($data->v_benefit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_benefit_type')); ?>:</b>
	<?php echo CHtml::encode($data->v_benefit_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_hospital_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_hospital_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_doctor_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_doctor_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_medicine_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_medicine_note); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_period_day_visit')); ?>:</b>
	<?php echo CHtml::encode($data->v_period_day_visit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_medical_indicate_note')); ?>:</b>
	<?php echo CHtml::encode($data->v_medical_indicate_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_provider_non')); ?>:</b>
	<?php echo CHtml::encode($data->v_provider_non); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_document')); ?>:</b>
	<?php echo CHtml::encode($data->v_document); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_max_claim')); ?>:</b>
	<?php echo CHtml::encode($data->n_max_claim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_claim_amount')); ?>:</b>
	<?php echo CHtml::encode($data->n_claim_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_telp_provider')); ?>:</b>
	<?php echo CHtml::encode($data->v_telp_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_alamat_provider')); ?>:</b>
	<?php echo CHtml::encode($data->v_alamat_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_nama_provider')); ?>:</b>
	<?php echo CHtml::encode($data->v_nama_provider); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_verifikasi_amount')); ?>:</b>
	<?php echo CHtml::encode($data->n_verifikasi_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_kode_provider')); ?>:</b>
	<?php echo CHtml::encode($data->v_kode_provider); ?>
	<br />

	*/ ?>

</div>