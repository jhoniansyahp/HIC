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
<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_plan_name',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'v_plan_desc',array('class'=>'span5','maxlength'=>500)); ?>
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
	        'htmlOptions'=>array('size'=>'10','class'=>'span5 date')
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
	        'htmlOptions'=>array('size'=>'10','class'=>'span5 date')
	   ));
		echo "</div>
</div>"; ?>
<?php echo $form->textFieldRow($model,'v_prod_line',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'v_prod_composition',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'v_indv_or_group',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'v_plan_type',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_curr_code',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_status',array('class'=>'span5','maxlength'=>1)); ?>
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
