<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'master-polis-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'v_policy_no',array('class'=>'span5','maxlength'=>50)); ?>
	<?php echo $form->textFieldRow($model,'n_member',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span5','maxlength'=>30)); ?>
	
	<?php echo $form->textFieldRow($model,'v_currency',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'v_company_code',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'n_agent_no',array('class'=>'span5')); ?>

	


	<?php //echo $form->textFieldRow($model,'v_contact_person',array('class'=>'span5','maxlength'=>150)); ?>

	<?php //echo $form->textFieldRow($model,'v_contact_telp',array('class'=>'span5','maxlength'=>50)); ?>

	<?php //echo $form->textFieldRow($model,'v_address',array('class'=>'span5','maxlength'=>250)); ?>

	<?php //echo $form->textFieldRow($model,'v_city',array('class'=>'span5','maxlength'=>150)); ?>

	<?php //echo $form->textFieldRow($model,'v_policy_status',array('class'=>'span5','maxlength'=>20)); ?>



	<?php //echo $form->textFieldRow($model,'v_premi_freq',array('class'=>'span5','maxlength'=>4)); ?>

	<?php //echo $form->textFieldRow($model,'n_premi_budget',array('class'=>'span5','maxlength'=>30)); ?>

	<?php //echo $form->textFieldRow($model,'v_add_info_penanggung',array('class'=>'span5','maxlength'=>150)); ?>

	<?php //echo $form->textFieldRow($model,'n_add_info_premi',array('class'=>'span5','maxlength'=>30)); ?>

	<?php //echo $form->textFieldRow($model,'v_upload_by',array('class'=>'span5','maxlength'=>250)); ?>

	<?php //echo $form->textFieldRow($model,'d_upload_date',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'v_verifikasi_by',array('class'=>'span5','maxlength'=>250)); ?>

	<?php //echo $form->textFieldRow($model,'d_verifikasi_date',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'v_created_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php //echo $form->textFieldRow($model,'d_created_date',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'v_updated_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php //echo $form->textFieldRow($model,'d_updated_date',array('class'=>'span5')); ?>

	<div class="actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
