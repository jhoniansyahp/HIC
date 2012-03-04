<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php \n";?>
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<?php echo "<?php \$form=\$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement) continue;

	$relation = $this->findRelation($this->modelClass,$column);

	if((stripos($column->dbType,'date') !== FALSE) OR 
	   (stripos($column->dbType,'timestamp') !== FALSE)
	  ){
		echo "<?php ".$this->generateDatePicker($this->modelClass,$column)."; ?>\n";
	  }else if(!empty($relation)){
		echo "<?php ".$this->generateAutoComplete($this->modelClass,$column).";?>\n";
	  }else{
		echo "<?php echo ".$this->generateActiveRow($this->modelClass,$column)."; ?>\n"; 
	  }

	
		
}
?>
	<div class="actions">
		<?php echo "<?php\n"; ?>
		echo CHtml::submitButton($model->isNewRecord ? Yii::t('<?php echo $this->getModule()->name;?>Module.main','Buat') : Yii::t('<?php echo $this->getModule()->name;?>Module.main','Simpan'),array('class'=>'btn primary')); 
		?>
		&nbsp;
		
		<?php echo "<?php\n";?>
		echo CHtml::resetButton(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Batal'),array('class'=>'btn primary')); ?>&nbsp;|
		
		<?php echo "<?php\n";?>
		echo CHtml::link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Kembali Ke List'),array('index'), array('class'=>'btn')); ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>