<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'setup-plan-benefits-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php  echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_template',array('class'=>'span5','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_kelompok',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'n_baris',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_benefit',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'v_formula',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'v_update',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'n_max_harirawat',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'n_max_klaim_pmonth',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'n_max_klaim_pday',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'n_max_visite_pday',array('class'=>'span5')); ?>
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
