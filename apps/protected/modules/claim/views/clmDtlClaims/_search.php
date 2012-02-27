<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'v_claim_no'); ?>
		<?php echo $form->textField($model, 'v_claim_no', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_line_no'); ?>
		<?php echo $form->textField($model, 'n_line_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_benefit'); ?>
		<?php echo $form->textField($model, 'v_benefit', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_benefit_type'); ?>
		<?php echo $form->textField($model, 'v_benefit_type', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_hospital_note'); ?>
		<?php echo $form->textField($model, 'v_hospital_note', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_doctor_note'); ?>
		<?php echo $form->textField($model, 'v_doctor_note', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_medicine_note'); ?>
		<?php echo $form->textField($model, 'v_medicine_note', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_period_day_visit'); ?>
		<?php echo $form->textField($model, 'v_period_day_visit', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_medical_indicate_note'); ?>
		<?php echo $form->textField($model, 'v_medical_indicate_note', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_provider_non'); ?>
		<?php echo $form->textField($model, 'v_provider_non', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_document'); ?>
		<?php echo $form->textField($model, 'v_document', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_max_claim'); ?>
		<?php echo $form->textField($model, 'n_max_claim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_claim_amount'); ?>
		<?php echo $form->textField($model, 'n_claim_amount', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_telp_provider'); ?>
		<?php echo $form->textField($model, 'v_telp_provider', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_alamat_provider'); ?>
		<?php echo $form->textField($model, 'v_alamat_provider', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_nama_provider'); ?>
		<?php echo $form->textField($model, 'v_nama_provider', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_upload_date'); ?>
		<?php echo $form->textField($model, 'd_upload_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_created_by'); ?>
		<?php echo $form->textField($model, 'v_created_by', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_created_date'); ?>
		<?php echo $form->textField($model, 'd_created_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_updated_by'); ?>
		<?php echo $form->textField($model, 'v_updated_by', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_updated_date'); ?>
		<?php echo $form->textField($model, 'd_updated_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
