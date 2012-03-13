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
<?php echo $form->textFieldRow($model,'v_plan_code',array('class'=>'span3','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_template',array('class'=>'span3','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_kelompok',array('class'=>'span3','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_benefit',array('class'=>'span3','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'v_formula',array('class'=>'span3','maxlength'=>50)); ?>
</div>
<div class="span5">
<?php echo $form->textFieldRow($model,'v_update',array('class'=>'span3','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'n_max_harirawat',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_max_klaim_pmonth',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_max_klaim_pday',array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model,'n_max_visite_pday',array('class'=>'span3')); ?>
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
