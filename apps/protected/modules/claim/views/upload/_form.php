<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'upload-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php  echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'nama_file',array('class'=>'span5','maxlength'=>50)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'upload_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'upload_date',
	        'name'=>'upload_date',    // This is how it works for me.
			'value'=>'',
	        'options'=>array('dateFormat'=>'dd/mm/yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span5 date')
	   ));
		echo "</div>
</div>"; ?>
<?php echo $form->textFieldRow($model,'flag_proses',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'uploaded_by',array('class'=>'span5')); ?>
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
