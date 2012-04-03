<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'clm-dtl-claims-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php  echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>
<div class="row-fluid">
<div class="span4">
<?php 
		
			echo '<div class="control-group">';
			echo $form->labelEx($model, 'v_claim_no');
			 echo '<div class="controls">';
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'v_claim_no', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>array('combo_clm-mst-claims'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'vClaimNo', // the relation name defined above
			  'displayAttr'=>'v_claim_no',  // attribute or pseudo-attribute to display
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
		 echo $form->error($model, 'v_claim_no');
		 echo "</div>
</div>";?>
<?php echo $form->textFieldRow($model,'n_line_no',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'v_benefit',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_benefit_type',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_hospital_note',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_doctor_note',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_medicine_note',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_period_day_visit',array('class'=>'span3','maxlength'=>250)); ?>
</div>
<div class="span4">
<div class="control-group">
<?php echo $form->textFieldRow($model,'v_medical_indicate_note',array('class'=>'span3','maxlength'=>250)); ?>
</div>
<?php echo $form->textFieldRow($model,'v_provider_non',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_document',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'n_max_claim',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_claim_amount',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_telp_provider',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_alamat_provider',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_nama_provider',array('class'=>'span3','maxlength'=>250)); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
</div>
</div>
<?php echo $form->textFieldRow($model,'v_kode_provider',array('class'=>'span3','maxlength'=>50)); ?>
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
