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
<?php echo $form->textFieldRow($model,'n_org_id',array('class'=>'span3','maxlength'=>22)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_dtl_code',array('class'=>'span3','maxlength'=>60)); ?>
<?php echo $form->dropDownListRow($model, 'v_flex', array(''=>Yii::t('app','All'),'A'=>Yii::t('app','Active'),'I' => Yii::t('app','Inactive'))); ?>
</div>
<div class="span5">
<?php echo $form->textFieldRow($model,'v_lookup_dtl_name',array('class'=>'span3','maxlength'=>150)); ?>
<?php echo $form->textFieldRow($model,'v_lookup_dtl_desc',array('class'=>'span3','maxlength'=>500)); ?>
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
