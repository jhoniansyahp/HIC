<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'setup-mst-lookups-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
			  'relName'=>'nCoy', // the relation name defined above
			  'displayAttr'=>'n_coy_id',  // attribute or pseudo-attribute to display
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
					'class' => 'span5',
			  ),
		 ));
		 echo $form->error($model, 'n_coy_id');
		 echo "</div>
</div>";?>
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
		echo CHtml::submitButton($model->isNewRecord ? Yii::t('setupModule.main','Buat') : Yii::t('setupModule.main','Simpan'),array('class'=>'btn primary')); 
		?>
		&nbsp;
		
		<?php
		echo CHtml::resetButton(Yii::t('setupModule.main','Batal'),array('class'=>'btn primary')); ?>&nbsp;|
		
		<?php
		echo CHtml::link(Yii::t('setupModule.main','Kembali Ke List'),array('index'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>
