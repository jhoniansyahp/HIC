<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'quot-polis-detil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'v_quotation_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'n_line_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_policy_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'n_line_policy',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_rek_no',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_status_member',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'n_premi',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_note',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'v_main_member',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'v_nik',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'v_member_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'v_card_number',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'v_name',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'v_kary_family_status',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'v_sex',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'v_maried_status',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'d_dob',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_buss_code',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_buss_name',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'v_subs_coy_code',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_subs_coy_name',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'v_class_ip',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_benefit',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_ip_plan',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_op_plan',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_mt_plan',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_dt_plan',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_gl_plan',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_ot_plan',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_ppk_code',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'v_ppk_name',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'v_address',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'d_start',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'d_end',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'d_migrate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'d_mutasi',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_verifikasi_by',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'d_verifikasi_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_upload_by',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'d_upload_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_created_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'d_created_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_updated_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'d_updated_date',array('class'=>'span5','maxlength'=>6)); ?>

	<div class="actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
