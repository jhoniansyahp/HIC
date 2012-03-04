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
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>
/*
$this->menu=array(
	array('label'=>'List <?php echo $this->modelClass; ?>','url'=>array('index')),
	array('label'=>'Create <?php echo $this->modelClass; ?>','url'=>array('create')),
	array('label'=>'Update <?php echo $this->modelClass; ?>','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Delete <?php echo $this->modelClass; ?>','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage <?php echo $this->modelClass; ?>','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php echo "<?php\n";?>
echo CHtml::Link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Ubah Data {n} &raquo;',$model-><?php echo $this->tableSchema->primaryKey; ?>), array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>));
?>
</div>

<h1>View <?php echo $this->modelClass." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>


<?php echo "<?php"; ?> $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column){

	if((stripos(strtolower($column->name),'created_') !== FALSE) OR
	   (stripos(strtolower($column->name),'updated_') !== FALSE) OR
	   (stripos(strtolower($column->name),'verifikasi_') !== FALSE) OR
	   (stripos(strtolower($column->name),'upload_') !== FALSE)
	  ){
		continue;
	  }

	echo "\t\t'".$column->name."',\n";
}
	
?>
	),
)); ?>
<?php echo "<?php\n"; ?>
echo CHtml::Link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Ubah Data {n} &raquo;',$model-><?php echo $this->tableSchema->primaryKey; ?>),array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php echo "<?php\n";?>
echo CHtml::Link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Ubah Data {n} &raquo;',$model-><?php echo $this->tableSchema->primaryKey; ?>), array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>));
?>
</div>
</p>
-->