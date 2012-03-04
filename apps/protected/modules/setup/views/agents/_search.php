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
<?php echo $form->textFieldRow($model,'v_agent_code',array('class'=>'span5','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_agent_name',array('class'=>'span5','maxlength'=>150)); ?>
<?php echo $form->dropDownListRow($model, 'v_agent_type', array(""=>Yii::t("setupModule.main","Tidak Ada"),'I'=>Yii::t('setupModule.main','Individu'),'C' => Yii::t('setupModule.main','Perusahaan/Bisnis'))); ?>
<?php echo $form->dropDownListRow($model, 'v_status_agent', array(""=>Yii::t("setupModule.main","Tidak Ada"),'A'=>Yii::t('setupModule.main','Aktif'),'I' => Yii::t('setupModule.main','Non Aktif'))); ?>
<?php echo $form->textFieldRow($model,'v_channel_no',array('class'=>'span5','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_jabatan',array('class'=>'span5','maxlength'=>30)); ?>
<?php 
		
			echo '<div class="control-group">';
			echo $form->labelEx($model, 'v_reporting_to');
			 echo '<div class="controls">';
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'v_reporting_to', //the FK field (from CJuiInputWidget)
			  'sourceUrl'=>array('combo_setup-mst-agents'),
			  'showFKField'=>false,
			  'FKFieldSize'=>15,
			  'relName'=>'vReportingTo', // the relation name defined above
			  'displayAttr'=>'v_reporting_to',  // attribute or pseudo-attribute to display
			  'options'=>array(
				  'minLength'=>2,
			  ),
			  'htmlOptions' => array(
					'class' => 'span5',
			  ),
		 ));
		 echo $form->error($model, 'v_reporting_to');
		 echo "</div>
</div>";?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo ""; ?>
<?php echo $form->textFieldRow($model,'n_coy_id',array('class'=>'span5')); ?>
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
