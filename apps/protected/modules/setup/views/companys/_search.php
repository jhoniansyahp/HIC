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
<?php echo $form->textFieldRow($model,'v_company_code',array('class'=>'span5','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_company_group',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'v_inst_type',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_company_name',array('class'=>'span5','maxlength'=>500)); ?>
<?php echo $form->textFieldRow($model,'v_regn_no',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_short_name',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_jenis_usaha',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_mobilitas',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_office_hours',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'n_existing_agent',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'v_comp_add1',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_comp_add2',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_comp_add3',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_postcode',array('class'=>'span5','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_town',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_state_code',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_country_code',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_phone1',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_phone2',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_fax',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_email',array('class'=>'span5','maxlength'=>80)); ?>
<?php echo $form->textFieldRow($model,'v_contact_person',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
	<div class="actions">
		<?php
		 echo CHtml::submitButton(Yii::t('setupModule.main','Cari'),array('class'=>'btn primary'));
		  echo '&nbsp;';
		 echo CHtml::submitButton(Yii::t('setupModule.main','Batal'), array('class'=>'btn','onclick'=>'this.form.reset()'));
		 echo '&nbsp;';
 
		 echo CHtml::link(Yii::t('setupModule.main','Pencarian Sederhana'),'#',array('class'=>'search-simple-button btn')); 
		?>
	</div>
</div>
<?php $this->endWidget(); ?>
