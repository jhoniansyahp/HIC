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
<?php echo $form->textFieldRow($model,'v_param_code',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_param_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_param_desc',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->dropDownListRow($model, 'v_flag', array(''=>'Tidak ada','A'=>Yii::t('setupModule.main','Aktif'),'I' => Yii::t('setupModule.main','Non Aktif'))); ?>
<?php echo $form->textFieldRow($model,'n_value_number',array('class'=>'span5','maxlength'=>30)); ?>
<?php 
		  echo '<div class="control-group">';
		  echo $form->labelEx($model,'d_value_date');
		 echo '<div class="controls">';
		$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model,
	        'attribute'=>'d_value_date',
	        'name'=>'d_value_date',    // This is how it works for me.
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
<?php echo $form->textFieldRow($model,'v_value_char',array('class'=>'span5','maxlength'=>4000)); ?>
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
