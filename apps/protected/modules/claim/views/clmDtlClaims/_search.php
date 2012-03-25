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
<?php echo $form->textFieldRow($model,'v_claim_no',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'n_line_no',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'v_benefit',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_benefit_type',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_hospital_note',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_doctor_note',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_medicine_note',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_period_day_visit',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_medical_indicate_note',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_provider_non',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_document',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'n_max_claim',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'n_claim_amount',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_telp_provider',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_alamat_provider',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_nama_provider',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo $form->textFieldRow($model,'v_kode_provider',array('class'=>'span5','maxlength'=>50)); ?>
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
