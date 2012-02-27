<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'clm-mst-claims-form',
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
		<?php echo $form->labelEx($model,'v_policy_no'); ?>
		<?php echo $form->textField($model, 'v_policy_no', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_policy_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_line_no'); ?>
		<?php echo $form->textField($model, 'n_line_no'); ?>
		<?php echo $form->error($model,'n_line_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_claim'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_claim',
			'value' => $model->d_claim,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_claim'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_submitted'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_submitted',
			'value' => $model->d_submitted,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_submitted'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_claim_intim'); ?>
		<?php echo $form->textField($model, 'v_claim_intim', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'v_claim_intim'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_address'); ?>
		<?php echo $form->textField($model, 'v_address', array('maxlength' => 300)); ?>
		<?php echo $form->error($model,'v_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_city'); ?>
		<?php echo $form->textField($model, 'v_city', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_province'); ?>
		<?php echo $form->textField($model, 'v_province', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_province'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_claim_status_note'); ?>
		<?php echo $form->textField($model, 'v_claim_status_note', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_claim_status_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_claim_status'); ?>
		<?php echo $form->textField($model, 'v_claim_status', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_claim_status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_diagnosa_note'); ?>
		<?php echo $form->textField($model, 'v_diagnosa_note', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_diagnosa_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_doc_scan'); ?>
		<?php echo $form->textField($model, 'v_doc_scan', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_doc_scan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_sent_by'); ?>
		<?php echo $form->textField($model, 'v_sent_by', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_sent_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_sent_to'); ?>
		<?php echo $form->textField($model, 'v_sent_to', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_sent_to'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_sent_doc'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_sent_doc',
			'value' => $model->d_sent_doc,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_sent_doc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_intim_email'); ?>
		<?php echo $form->textField($model, 'v_intim_email', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_intim_email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_intim_telp'); ?>
		<?php echo $form->textField($model, 'v_intim_telp', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_intim_telp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_bank_code'); ?>
		<?php echo $form->textField($model, 'v_bank_code', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_bank_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_bank_cabang'); ?>
		<?php echo $form->textField($model, 'v_bank_cabang', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_bank_cabang'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_rekening_no'); ?>
		<?php echo $form->textField($model, 'v_rekening_no', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_rekening_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_rekening_nama'); ?>
		<?php echo $form->textField($model, 'v_rekening_nama', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_rekening_nama'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_cabang_layanan'); ?>
		<?php echo $form->textField($model, 'v_cabang_layanan', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_cabang_layanan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_incident_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_incident_date',
			'value' => $model->d_incident_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_incident_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_claim_doc'); ?>
		<?php echo $form->textField($model, 'v_claim_doc', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_claim_doc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_verifikasi_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'d_verifikasi_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 30)); ?>
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