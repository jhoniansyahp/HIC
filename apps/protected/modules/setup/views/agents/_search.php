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
<?php echo $form->textFieldRow($model,'n_agent_no',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'v_agent_code',array('class'=>'span5','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_agent_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_agent_type',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'v_status_agent',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_channel_no',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_jabatan',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_reporting_to',array('class'=>'span5')); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo $form->textFieldRow($model,'n_coy_id',array('class'=>'span5')); ?>
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
