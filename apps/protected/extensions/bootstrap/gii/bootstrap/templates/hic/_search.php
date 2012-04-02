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
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
)); ?>\n"; ?>
<div class="alert alert-warning">
<?php foreach($this->tableSchema->columns as $column): ?>
<?php
	$field=$this->generateInputField($this->modelClass,$column);
	if(strpos($field,'password')!==false)
		continue;
		
	if((stripos($column->dbType,'date') !== FALSE) OR 
	   (stripos($column->dbType,'timestamp') !== FALSE)
	  ){
		echo "<?php ".$this->generateDatePicker($this->modelClass,$column)."; ?>\n";
	  }else{
		echo "<?php echo ".$this->generateActiveRow($this->modelClass,$column)."; ?>\n"; 
	  }
endforeach; ?>
	<div class="actions">
		<?php echo "<?php\n";?>
		 echo CHtml::submitButton(Yii::t('app','Search'),array('class'=>'btn primary'));
		 <?php echo " echo '&nbsp;';\n";?>
		 echo CHtml::submitButton(Yii::t('app','Cancel'), array('class'=>'btn','onclick'=>'this.form.reset()'));
		<?php echo " echo '&nbsp;';\n";?> 
		 echo CHtml::link(Yii::t('app','Simple Search'),'#',array('class'=>'search-simple-button btn')); 
		?>
	</div>
</div>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>