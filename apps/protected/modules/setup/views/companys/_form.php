<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'setup-mst-coys-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app','Fields with {required} are required.',array('{required}'=>'<span class="required">*</span>'));?> </p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row-fluid">
		<div class="span5">

<?php echo $form->textFieldRow($model,'v_company_code',array('class'=>'span3','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_company_group',array('class'=>'span3','maxlength'=>50)); ?>
<?php 
	$instTypeHelper = $this->lookupHelper();
	$instType = $instTypeHelper->findByPK('INST_TYPE');
	echo $form->dropDownListRow($model, 'v_inst_type',$instType); 
?>
<?php echo $form->textFieldRow($model,'v_company_name',array('class'=>'span3','maxlength'=>500)); ?>
<?php echo $form->textFieldRow($model,'v_regn_no',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_short_name',array('class'=>'span3','maxlength'=>100)); ?>
<?php 
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('BUSINESS_LINES');
	echo $form->dropDownListRow($model, 'v_jenis_usaha',$helperValues);
?>
<?php 
$helper = $this->lookupHelper();
$helperValues = $helper->findByPK('BUSINESS_MOBILITY');
echo $form->dropDownListRow($model, 'v_mobilitas',$helperValues);
?>
<?php echo $form->textFieldRow($model,'v_office_hours',array('class'=>'span3','maxlength'=>50)); ?>
<?php 
		
			echo '<div class="control-group">';
			echo $form->labelEx($model, 'n_existing_agent');
			 echo '<div class="controls">';
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'n_existing_agent', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>array('agents/combo_setup-mst-agents'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'nExistingAgent', // the relation name defined above
			  'displayAttr'=>'v_agent_name',  // attribute or pseudo-attribute to display
			  // length of the AutoComplete/display field, defaults to 50
			  //'autoCompleteLength'=>15,
			  // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may
			  // also be defined.  read the code and docs for all options
			  'options'=>array(
				  // number of characters that must be typed before
				  // autoCompleter returns a value, defaults to 2
				  'minLength'=>1,
			  ),
			  'htmlOptions' => array(
					'class' => 'span3',
			  ),
		 ));
		 echo $form->error($model, 'n_existing_agent');
		 echo "</div>
</div>";?>
<?php echo $form->textFieldRow($model,'v_comp_add1',array('class'=>'span3','maxlength'=>100)); ?>
</div>
<div class="span5">
<?php echo $form->textFieldRow($model,'v_comp_add2',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_comp_add3',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_postcode',array('class'=>'span3','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_town',array('class'=>'span3','maxlength'=>30)); ?>
<?php 
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('PROVINCE');
	echo $form->dropDownListRow($model, 'v_state_code',$helperValues);
?>
<?php 
	$helper = $this->lookupHelper();
	$helperValues = $helper->findByPK('COUNTRY');
	echo $form->dropDownListRow($model, 'v_country_code',$helperValues);
?>
<?php echo $form->textFieldRow($model,'v_phone1',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_phone2',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_fax',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_email',array('class'=>'span3','maxlength'=>80)); ?>
<?php echo $form->textFieldRow($model,'v_contact_person',array('class'=>'span3','maxlength'=>50)); ?>
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
