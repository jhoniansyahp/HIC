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
<?php echo $form->textFieldRow($model,'v_agent_code',array('class'=>'span3','maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'v_agent_name',array('class'=>'span3','maxlength'=>150)); ?>
<?php echo $form->dropDownListRow($model, 'v_agent_type', array(""=>Yii::t("app","All"),'I'=>Yii::t('app','Individu'),'C' => Yii::t('app','Company/Business'))); ?>
<?php echo $form->dropDownListRow($model, 'v_status_agent', array(""=>Yii::t("app","All"),'A'=>Yii::t('app','Active'),'I' => Yii::t('app','Inactive'))); ?>
</div>
<div class="span5">
<?php echo $form->textFieldRow($model,'v_channel_no',array('class'=>'span3','maxlength'=>10)); ?>
<?php echo $form->textFieldRow($model,'v_jabatan',array('class'=>'span3','maxlength'=>30)); ?>
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
					'class' => 'span3',
			  ),
		 ));
		 echo $form->error($model, 'v_reporting_to');
		 echo "</div>
</div>";?>
<?php 
			echo '<div class="control-group">';
			echo $form->labelEx($model, 'n_coy_id');
			 echo '<div class="controls">';
		 $this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>$model,
			  'attribute'=>'n_coy_id', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>array('combo_setup-mst-organizations'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'nCoyId', // the relation name defined above
			  'displayAttr'=>'v_org_name',  // attribute or pseudo-attribute to display
			  // length of the AutoComplete/display field, defaults to 50
			  //'autoCompleteLength'=>15,
			  // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may
			  // also be defined.  read the code and docs for all options
			  'options'=>array(
				  // number of characters that must be typed before
				  // autoCompleter returns a value, defaults to 2
				  'minLength'=>2,
			  ),
			  'htmlOptions' => array(
					'class' => 'span3',
			  ),
		 ));
		 echo $form->error($model, 'n_coy_id');
		 echo "</div>
</div>";?>
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
