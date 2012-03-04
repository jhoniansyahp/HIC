<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'setup-mst-agents-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'n_agent_no',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'v_agent_code',array('class'=>'span5','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_agent_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_agent_type',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'v_status_agent',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_channel_no',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_jabatan',array('class'=>'span5','maxlength'=>30)); ?>
<?php 
		
			echo '<div class="control-group">';
			echo $form->labelEx($model, 'v_reporting_to');
			 echo '<div class="controls">';
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'v_reporting_to', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>array('combo_setup-mst-agents'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'vReportingTo', // the relation name defined above
			  'displayAttr'=>'v_reporting_to',  // attribute or pseudo-attribute to display
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
					'class' => 'span5',
			  ),
		 ));
		 echo $form->error($model, 'v_reporting_to');
		 echo "</div>
</div>";?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo $form->textFieldRow($model,'n_coy_id',array('class'=>'span5')); ?>
	<div class="actions">
		<?php
		echo CHtml::submitButton($model->isNewRecord ? Yii::t('setupModule.main','Buat') : Yii::t('setupModule.main','Simpan'),array('class'=>'btn primary')); 
		?>
		&nbsp;
		
		<?php
		echo CHtml::resetButton(Yii::t('setupModule.main','Batal'),array('class'=>'btn primary')); ?>&nbsp;|
		
		<?php
		echo CHtml::link(Yii::t('setupModule.main','Kembali Ke List'),array('index'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>
