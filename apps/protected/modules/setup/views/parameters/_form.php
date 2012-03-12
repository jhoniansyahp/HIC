<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'setup-mst-parameters-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row-fluid">
		<div class="span5">
<?php echo $form->textFieldRow($model,'v_param_code',array('class'=>'span3','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_param_name',array('class'=>'span3','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_param_desc',array('class'=>'span3','maxlength'=>150)); ?>
<?php echo $form->dropDownListRow($model, 'v_flag', array('A'=>Yii::t('app','Active'),'I' => Yii::t('app','Inactive'))); ?>
</div>
<div class="span5">
<?php echo $form->textFieldRow($model,'n_value_number',array('class'=>'span3','maxlength'=>30)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_value_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_value_date',
	        'name'=>'d_value_date',    // This is how it works for me.
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
<?php echo $form->textFieldRow($model,'v_value_char',array('class'=>'span3','maxlength'=>4000)); ?>
</div>
</div>
	<div class="actions btn-actions">
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
