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
<div class="row-fluid">
	<div class="span5">
<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span3','maxlength'=>10)); ?>
<?php 
	unset($helperValues);
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('BENEFIT_TEMPLATE');
	$helperValues = $this->formHelper()->array_merge_keys(array(""=>"Standar"),$helperValues);
	echo $form->dropDownListRow($model, 'v_template',$helperValues);
?>
<?php 
	unset($helperValues);
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('BENEFIT_GROUP');
	echo $form->dropDownListRow($model, 'v_kelompok',$helperValues);
?>
<?php echo $form->textFieldRow($model,'n_baris',array('class'=>'span3','maxlength'=>10)); ?>
<?php 
	unset($helperValues);
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('BENEFIT');
	echo $form->dropDownListRow($model, 'v_benefit',$helperValues);
?>
</div>
<div class="span5">
<?php echo $form->textFieldRow($model,'v_formula',array('class'=>'span3','maxlength'=>50)); ?>
<?php //echo $form->textFieldRow($model,'v_update',array('class'=>'span3','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'n_max_harirawat',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_max_klaim_pmonth',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_max_klaim_pday',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_max_visite_pday',array('class'=>'span3')); ?>
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
