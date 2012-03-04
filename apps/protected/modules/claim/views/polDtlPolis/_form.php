<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'pol-dtl-polis-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'v_policy_no'); ?>
		<?php echo $form->dropDownList($model, 'v_policy_no', GxHtml::listDataEx(PolMstPolis::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'v_policy_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_line_no'); ?>
		<?php echo $form->textField($model, 'n_line_no'); ?>
		<?php echo $form->error($model,'n_line_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_plan_code'); ?>
		<?php echo $form->textField($model, 'v_plan_code', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_plan_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_rek_no'); ?>
		<?php echo $form->textField($model, 'v_rek_no', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'v_rek_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_status_member'); ?>
		<?php echo $form->textField($model, 'v_status_member', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_status_member'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_premi'); ?>
		<?php echo $form->textField($model, 'n_premi', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'n_premi'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_note'); ?>
		<?php echo $form->textField($model, 'v_note', array('maxlength' => 300)); ?>
		<?php echo $form->error($model,'v_note'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_main_member'); ?>
		<?php echo $form->textField($model, 'v_main_member', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_main_member'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_nik'); ?>
		<?php echo $form->textField($model, 'v_nik', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_nik'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_member_no'); ?>
		<?php echo $form->textField($model, 'v_member_no', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_member_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_card_number'); ?>
		<?php echo $form->textField($model, 'v_card_number', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_card_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_name'); ?>
		<?php echo $form->textField($model, 'v_name', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'v_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_kary_family_status'); ?>
		<?php echo $form->textField($model, 'v_kary_family_status', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'v_kary_family_status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_sex'); ?>
		<?php echo $form->textField($model, 'v_sex', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'v_sex'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_maried_status'); ?>
		<?php echo $form->textField($model, 'v_maried_status', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'v_maried_status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_dob'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_dob',
			'value' => $model->d_dob,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_dob'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_buss_code'); ?>
		<?php echo $form->textField($model, 'v_buss_code', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_buss_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_buss_name'); ?>
		<?php echo $form->textField($model, 'v_buss_name', array('maxlength' => 300)); ?>
		<?php echo $form->error($model,'v_buss_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_subs_coy_code'); ?>
		<?php echo $form->textField($model, 'v_subs_coy_code', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_subs_coy_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_subs_coy_name'); ?>
		<?php echo $form->textField($model, 'v_subs_coy_name', array('maxlength' => 300)); ?>
		<?php echo $form->error($model,'v_subs_coy_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_class_ip'); ?>
		<?php echo $form->textField($model, 'v_class_ip', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_class_ip'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_benefit'); ?>
		<?php echo $form->textField($model, 'v_benefit', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_benefit'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_ip_plan'); ?>
		<?php echo $form->textField($model, 'v_ip_plan', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_ip_plan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_op_plan'); ?>
		<?php echo $form->textField($model, 'v_op_plan', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_op_plan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_mt_plan'); ?>
		<?php echo $form->textField($model, 'v_mt_plan', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_mt_plan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_dt_plan'); ?>
		<?php echo $form->textField($model, 'v_dt_plan', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_dt_plan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_gl_plan'); ?>
		<?php echo $form->textField($model, 'v_gl_plan', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_gl_plan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_ot_plan'); ?>
		<?php echo $form->textField($model, 'v_ot_plan', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_ot_plan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_ppk_code'); ?>
		<?php echo $form->textField($model, 'v_ppk_code', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_ppk_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_ppk_name'); ?>
		<?php echo $form->textField($model, 'v_ppk_name', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'v_ppk_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_address'); ?>
		<?php echo $form->textField($model, 'v_address', array('maxlength' => 300)); ?>
		<?php echo $form->error($model,'v_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_start'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_start',
			'value' => $model->d_start,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_start'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_end'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_end',
			'value' => $model->d_end,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_end'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_migrate'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_migrate',
			'value' => $model->d_migrate,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_migrate'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_mutasi'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_mutasi',
			'value' => $model->d_mutasi,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'d_mutasi'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_verifikasi_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'d_verifikasi_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 250)); ?>
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
		<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
		<?php echo $form->error($model,'id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('clmMstClaims')); ?></label>
		<?php echo $form->checkBoxList($model, 'clmMstClaims', GxHtml::encodeEx(GxHtml::listDataEx(ClmMstClaims::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->