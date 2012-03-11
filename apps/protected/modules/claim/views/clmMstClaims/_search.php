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
<?php echo $form->textFieldRow($model,'v_policy_no',array('class'=>'span5','maxlength'=>50)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_claim');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_claim',
	        'name'=>'d_claim',    // This is how it works for me.
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
		  echo $form->labelEx($model,'d_submitted');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_submitted',
	        'name'=>'d_submitted',    // This is how it works for me.
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
<?php echo $form->textFieldRow($model,'v_claim_intim',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_address',array('class'=>'span5','maxlength'=>300)); ?>
<?php echo $form->textFieldRow($model,'v_city',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_province',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_claim_status_note',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_claim_status',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_diagnosa_note',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_doc_scan',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_sent_by',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_sent_to',array('class'=>'span5','maxlength'=>250)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_sent_doc');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_sent_doc',
	        'name'=>'d_sent_doc',    // This is how it works for me.
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
<?php echo $form->textFieldRow($model,'v_intim_email',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_intim_telp',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_bank_code',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_bank_cabang',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_rekening_no',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'v_rekening_nama',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo $form->textFieldRow($model,'v_cabang_layanan',array('class'=>'span5','maxlength'=>100)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_incident_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_incident_date',
	        'name'=>'d_incident_date',    // This is how it works for me.
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
<?php echo $form->textFieldRow($model,'v_claim_doc',array('class'=>'span5','maxlength'=>250)); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo $form->textFieldRow($model,'v_member_no',array('class'=>'span5','maxlength'=>50)); ?>
	<div class="actions">
		<?php
		 echo CHtml::submitButton(Yii::t('claimModule.main','Search'),array('class'=>'btn primary'));
		  echo '&nbsp;';
		 echo CHtml::submitButton(Yii::t('claimModule.main','Cancel'), array('class'=>'btn','onclick'=>'this.form.reset()'));
		 echo '&nbsp;';
 
		 echo CHtml::link(Yii::t('claimModule.main','Simple Search'),'#',array('class'=>'search-simple-button btn')); 
		?>
	</div>
</div>
<?php $this->endWidget(); ?>
