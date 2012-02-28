<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'v_claim_no',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_policy_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'d_claim',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'d_submitted',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_claim_intim',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'v_address',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'v_city',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_province',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_claim_status_note',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_claim_status',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_diagnosa_note',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'v_doc_scan',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'v_sent_by',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'v_sent_to',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'d_sent_doc',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_intim_email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_intim_telp',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_bank_code',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_bank_cabang',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_rekening_no',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'v_rekening_nama',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'v_cabang_layanan',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'d_incident_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_claim_doc',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'v_verifikasi_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'d_verifikasi_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_upload_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'d_upload_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_created_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'d_created_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_updated_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'d_updated_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'v_member_no',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="actions">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
