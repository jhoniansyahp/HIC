<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'clm-mst-claims-form',
	'type'=>'vertical',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>	

	<?php //echo $form->textFieldRow($model,'v_member_no',array('class'=>'span5','maxlength'=>50)); ?>
	<div>
		<?php echo $form->labelEx($model, 'v_member_no');
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'v_member_no', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>$this->createUrl('/polis/pol_/aclist'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'vMemberNo', // the relation name defined above
			  'displayAttr'=>'nama',  // attribute or pseudo-attribute to display
			  // length of the AutoComplete/display field, defaults to 50
			  'autoCompleteLength'=>15,
			  // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may
			  // also be defined.  read the code and docs for all options
			  'options'=>array(
				  // number of characters that must be typed before
				  // autoCompleter returns a value, defaults to 2
				  'minLength'=>1,
			  ),
		 ));
		 echo $form->error($model, 'v_member_no');?>
	</div>
	<?php echo $form->textFieldRow($model,'v_policy_no',array('class'=>'span5','maxlength'=>50)); ?>
	<? //echo $form->labelEx($model, 'd_claim');?><!--div class="controls"-->
	<?php 
	// $this->widget('CMaskedTextField', array(
		// 'model' => $model,
		// 'attribute' => 'd_claim',
		// 'mask' => '99/99/9999',
		// 'htmlOptions' => array('size' => 6)
		// ));
	?><!--/div-->

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


	<div class="actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
