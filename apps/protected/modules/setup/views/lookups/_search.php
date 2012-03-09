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
<?php echo $form->textFieldRow($model,'v_lookup_code',array('class'=>'span5','maxlength'=>60)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_desc',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_flag',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
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
