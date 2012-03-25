<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'clm-mst-claims-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php  echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row-fluid">
	<div class="span4">
<?php echo $form->textFieldRow($model,'v_claim_no',array('class'=>'span3','maxlength'=>100)); ?>
<?php 
		
			echo '<div class="control-group">';
			echo $form->labelEx($model, 'v_policy_no');
			 echo '<div class="controls">';
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'v_policy_no', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>array('combo_pol-mst-polis'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'vPolicyNo', // the relation name defined above
			  'displayAttr'=>'v_policy_no',  // attribute or pseudo-attribute to display
			  // length of the AutoComplete/display field, defaults to 50
			  //'autoCompleteLength'=>15,
			  // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may
			  // also be defined.  read the code and docs for all options
			  'options'=>array(
				  // number of characters that must be typed before
				  // autoCompleter returns a value, defaults to 2
				  'minLength'=>2,
			  ),
			  'htmlOptions' => array(
					'class' => 'span3',
			  ),
		 ));
		 echo $form->error($model, 'v_policy_no');
		 echo "</div>
</div>";?>
<?php echo $form->textFieldRow($model,'n_line_no',array('class'=>'span3')); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_claim');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_claim',
	        'name'=>'d_claim',    // This is how it works for me.
			'value'=>'',
	        'options'=>array('dateFormat'=>'dd/mm/yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span3 date')
	   ));
		echo "</div>
</div>"; ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_submitted');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_submitted',
	        'name'=>'d_submitted',    // This is how it works for me.
			'value'=>'',
	        'options'=>array('dateFormat'=>'dd/mm/yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span3 date')
	   ));
		echo "</div>
</div>"; ?>
<?php echo $form->textFieldRow($model,'v_claim_intim',array('class'=>'span3','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_address',array('class'=>'span3','maxlength'=>300)); ?>
<?php echo $form->textFieldRow($model,'v_city',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_province',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_claim_status_note',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_claim_status',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_diagnosa_note',array('class'=>'span3','maxlength'=>250)); ?>
</div>
<div class="span4">
<?php echo $form->textFieldRow($model,'v_doc_scan',array('class'=>'span3','maxlength'=>250)); ?>
<div class="control-group">
<?php echo $form->textFieldRow($model,'v_sent_by',array('class'=>'span3','maxlength'=>250)); ?>
</div>
<?php echo $form->textFieldRow($model,'v_sent_to',array('class'=>'span3','maxlength'=>250)); ?>

<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_sent_doc');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_sent_doc',
	        'name'=>'d_sent_doc',    // This is how it works for me.
			'value'=>'',
	        'options'=>array('dateFormat'=>'dd/mm/yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span3 date')
	   ));
		echo "</div>
</div>"; ?>
<div class="control-group">
<?php echo $form->textFieldRow($model,'v_intim_email',array('class'=>'span3','maxlength'=>100)); ?>
</div>
<?php echo $form->textFieldRow($model,'v_intim_telp',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_bank_code',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_bank_cabang',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_rekening_no',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_rekening_nama',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_cabang_layanan',array('class'=>'span3','maxlength'=>100)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_incident_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_incident_date',
	        'name'=>'d_incident_date',    // This is how it works for me.
			'value'=>'',
	        'options'=>array('dateFormat'=>'dd/mm/yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span3 date')
	   ));
		echo "</div>
</div>"; ?>
<?php echo $form->textFieldRow($model,'v_claim_doc',array('class'=>'span3','maxlength'=>250)); ?>
</div>

<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
</div>
	<div class="actions">
		<?php
		echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'btn primary')); 
		?>
		&nbsp;
		
		<?php
		echo CHtml::resetButton(Yii::t('app','Cancel'),array('class'=>'btn primary')); ?>&nbsp;|
		
		<?php
		echo CHtml::link(Yii::t('app','Back to List'),array('index'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>
<p>
<?php
echo CHtml::link(Yii::t('app','Add'),array('Create'), array('class'=>'btn btn-primary'));

?>
&nbsp;
<?php

echo CHtml::Button(Yii::t('app','Delete'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>
<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'clm-dtl-claims-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

	array(
		'header'=>CHtml::checkBox('clm-dtl-claims-master-checkbox'),
		'value'=>$model->v_claim_no,
		'class'=>'CCheckBoxColumn',
	),
			'v_claim_no',
		'n_line_no',
		'v_benefit',
		'v_benefit_type',
		'v_hospital_note',
		'v_doctor_note',
		'v_medicine_note',
		/*
		'v_period_day_visit',
		'v_medical_indicate_note',
		'v_provider_non',
		'v_document',
		'n_max_claim',
		'n_claim_amount',
		'v_telp_provider',
		'v_alamat_provider',
		'v_nama_provider',
		'v_verifikasi_by',
		'd_verifikasi_date',
		'v_upload_by',
		'd_upload_date',
		'v_created_by',
		'd_created_date',
		'v_updated_by',
		'd_updated_date',
		'n_verifikasi_amount',
		'v_kode_provider',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

?>
