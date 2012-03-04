<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'n_coy_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'n_org_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_role_code',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'v_role_name',array('class'=>'span5','maxlength'=>30)); ?>

	<div class="actions">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
