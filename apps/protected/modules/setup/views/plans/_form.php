<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'setup-mst-plans-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>
<div class="row-fluid">
	<div class="span5">
<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span3','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_plan_name',array('class'=>'span3','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'v_plan_desc',array('class'=>'span3','maxlength'=>500)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_plan_start');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_plan_start',
	        'name'=>'d_plan_start',    // This is how it works for me.
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
		  echo $form->labelEx($model,'d_plan_end');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_plan_end',
	        'name'=>'d_plan_end',    // This is how it works for me.
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
</div>
<div class="span5">
<?php 
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('PRODUCT_LINE');
	echo $form->dropDownListRow($model, 'v_prod_line',$helperValues);
?>
<?php echo $form->dropDownListRow($model, 'v_prod_composition', array('Y'=>Yii::t('app','Yes'),'N' => Yii::t('app','No'))); ?>       
<?php echo $form->dropDownListRow($model, 'v_indv_or_group', array('G'=>Yii::t('app','Group'),'I' => Yii::t('app','Individual'),'J'=> Yii::t('app',"Joint"))); ?>       
<?php //echo $form->textFieldRow($model,'v_plan_type',array('class'=>'span3','maxlength'=>10)); ?>
<?php 
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('CURRENCY');
	echo $form->dropDownListRow($model, 'v_curr_code',$helperValues);
?>
<?php echo $form->dropDownListRow($model, 'v_status', array('A'=>Yii::t('app','Active'),'I' => Yii::t('app','Inactive'))); ?>
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
