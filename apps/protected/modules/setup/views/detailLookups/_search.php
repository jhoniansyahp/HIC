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
<?php echo $form->textFieldRow($model,'n_coy_id',array('class'=>'span5','maxlength'=>22)); ?>
<?php echo $form->textFieldRow($model,'n_org_id',array('class'=>'span5','maxlength'=>22)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_code',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_dtl_code',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_dtl_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_dtl_desc',array('class'=>'span5','maxlength'=>500)); ?>
<?php echo $form->textFieldRow($model,'v_flex',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo $form->textFieldRow($model,'v_sub_kelompok',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_kelompok',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_laporan',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_dr_cr',array('class'=>'span5','maxlength'=>2)); ?>
<?php echo $form->textFieldRow($model,'v_variable_1',array('class'=>'span5','maxlength'=>200)); ?>
<?php echo $form->textFieldRow($model,'v_variable_2',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_variable_3',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_variable_4',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_variable_5',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_variable_6',array('class'=>'span5','maxlength'=>15)); ?>
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
