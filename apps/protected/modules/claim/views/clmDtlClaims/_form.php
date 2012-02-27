<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'clm-dtl-claims-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'v_claim_no'); ?>
		<?php echo $form->textField($model, 'v_claim_no', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_claim_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_line_no'); ?>
		<?php echo $form->textField($model, 'n_line_no'); ?>
		<?php echo $form->error($model,'n_line_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_benefit'); ?>
		<?php echo $form->textField($model, 'v_benefit', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_benefit'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_benefit_type'); ?>
		<?php echo $form->textField($model, 'v_benefit_type', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_benefit_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_hospital_note'); ?>
		<?php echo $form->textField($model, 'v_hospital_note', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_hospital_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_doctor_note'); ?>
		<?php echo $form->textField($model, 'v_doctor_note', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_doctor_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_medicine_note'); ?>
		<?php echo $form->textField($model, 'v_medicine_note', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_medicine_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_period_day_visit'); ?>
		<?php echo $form->textField($model, 'v_period_day_visit', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_period_day_visit'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_medical_indicate_note'); ?>
		<?php echo $form->textField($model, 'v_medical_indicate_note', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_medical_indicate_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_provider_non'); ?>
		<?php echo $form->textField($model, 'v_provider_non', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_provider_non'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_document'); ?>
		<?php echo $form->textField($model, 'v_document', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_document'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_max_claim'); ?>
		<?php echo $form->textField($model, 'n_max_claim'); ?>
		<?php echo $form->error($model,'n_max_claim'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_claim_amount'); ?>
		<?php echo $form->textField($model, 'n_claim_amount', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'n_claim_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_telp_provider'); ?>
		<?php echo $form->textField($model, 'v_telp_provider', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_telp_provider'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_alamat_provider'); ?>
		<?php echo $form->textField($model, 'v_alamat_provider', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_alamat_provider'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_nama_provider'); ?>
		<?php echo $form->textField($model, 'v_nama_provider', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_nama_provider'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'v_verifikasi_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'d_verifikasi_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'v_upload_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_upload_date'); ?>
		<?php echo $form->textField($model, 'd_upload_date', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'d_upload_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_created_by'); ?>
		<?php echo $form->textField($model, 'v_created_by', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_created_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_created_date'); ?>
		<?php echo $form->textField($model, 'd_created_date', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'d_created_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_updated_by'); ?>
		<?php echo $form->textField($model, 'v_updated_by', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_updated_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_updated_date'); ?>
		<?php echo $form->textField($model, 'd_updated_date', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'d_updated_date'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->