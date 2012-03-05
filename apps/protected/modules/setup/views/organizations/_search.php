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
<?php //echo $form->textFieldRow($model,'n_org_id',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_org_code',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_org_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_start_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_start_date',
	        'name'=>'d_start_date',    // This is how it works for me.
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
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_end_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_end_date',
	        'name'=>'d_end_date',    // This is how it works for me.
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
<?php echo $form->textFieldRow($model,'v_flag_coy_id',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'v_org_level',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'n_org_parent',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_no_account',array('class'=>'span5','maxlength'=>60)); ?>
<?php //echo $form->textFieldRow($model,'v_npwp',array('class'=>'span5','maxlength'=>30)); ?>
<?php //echo $form->textFieldRow($model,'v_currency',array('class'=>'span5','maxlength'=>15)); ?>
<?php //echo $form->textFieldRow($model,'v_address',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_city',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_province',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_country',array('class'=>'span5','maxlength'=>30)); ?>
<?php //echo $form->textFieldRow($model,'v_post_code',array('class'=>'span5','maxlength'=>5)); ?>
<?php //echo $form->textFieldRow($model,'v_phone',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'v_contact_person',array('class'=>'span5','maxlength'=>60)); ?>
<?php //echo $form->textFieldRow($model,'v_phone_person',array('class'=>'span5','maxlength'=>15)); ?>
<?php //echo $form->textFieldRow($model,'v_email_person',array('class'=>'span5','maxlength'=>60)); ?>
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
