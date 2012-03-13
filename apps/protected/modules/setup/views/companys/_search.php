<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>
<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="alert alert-warning">
<div class="row-fluid">
<div class="span5">
<?php echo $form->textFieldRow($model,'v_company_code',array('class'=>'span3','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_company_group',array('class'=>'span3','maxlength'=>50)); ?>
<?php
unset($helperValues);
$helper = $this->lookupHelper();
$helperValues = $helper->findByPK('INST_TYPE');
$helperValues = $this->formHelper()->array_merge_keys(array(""=>"All"),$helperValues);
echo $form->dropDownListRow($model, 'v_inst_type',$helperValues);
?>
<?php echo $form->textFieldRow($model,'v_company_name',array('class'=>'span3','maxlength'=>500)); ?>
</div>
<div class="span5">
<!--
<?php echo $form->textFieldRow($model,'v_regn_no',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_short_name',array('class'=>'span3','maxlength'=>100)); ?>
-->
<?php
unset($helperValues);
$helper = $this->lookupHelper();
$helperValues = $helper->findByPK('BUSINESS_LINES');
$helperValues = $this->formHelper()->array_merge_keys(array(""=>"All"),$helperValues);
echo $form->dropDownListRow($model, 'v_jenis_usaha',$helperValues);
?>
<!--
<?php echo $form->textFieldRow($model,'v_mobilitas',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_office_hours',array('class'=>'span3','maxlength'=>50)); ?>
-->
<?php echo $form->textFieldRow($model,'n_existing_agent',array('class'=>'span3')); ?>
<?php
unset($helperValues);
$helper = $this->lookupHelper();
$helperValues = $helper->findByPK('PROVINCE');
$helperValues = $this->formHelper()->array_merge_keys(array(""=>"All"),$helperValues);
echo $form->dropDownListRow($model, 'v_state_code',$helperValues);
?>
<!--
<?php echo $form->textFieldRow($model,'v_comp_add1',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_comp_add2',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_comp_add3',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_postcode',array('class'=>'span3','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_town',array('class'=>'span3','maxlength'=>30)); ?>

<?php echo $form->textFieldRow($model,'v_country_code',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_phone1',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_phone2',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_fax',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_email',array('class'=>'span3','maxlength'=>80)); ?>
-->
<?php echo $form->textFieldRow($model,'v_contact_person',array('class'=>'span3','maxlength'=>50)); ?>
</div>
</div>
	<div class="actions">
		<?php
		 echo CHtml::submitButton(Yii::t('app','Search'),array('class'=>'btn primary'));
		  echo '&nbsp;';
		 echo CHtml::submitButton(Yii::t('app','Cancel'), array('class'=>'btn','onclick'=>'this.form.reset()'));
		 echo '&nbsp;';
 
		 echo CHtml::link(Yii::t('app','Simple Search'),'#',array('class'=>'search-simple-button btn')); 
		?>
	</div>
</div>
<?php $this->endWidget(); ?>
