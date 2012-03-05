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

	<div class="actions">
		<?php
		 echo CHtml::submitButton(Yii::t('claimModule.main','Cari'),array('class'=>'btn primary'));
		  echo '&nbsp;';
		 echo CHtml::submitButton(Yii::t('claimModule.main','Batal'), array('class'=>'btn','onclick'=>'this.form.reset()'));
		 echo '&nbsp;';
 
		 echo CHtml::link(Yii::t('claimModule.main','Pencarian Mutakhir'),'#',array('class'=>'search-advanced-button btn')); 
		?>
	</div>
</div>
<?php $this->endWidget(); ?>
