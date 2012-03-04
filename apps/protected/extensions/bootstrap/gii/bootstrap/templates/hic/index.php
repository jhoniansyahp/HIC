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
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
);\n";
?>
/*
$this->menu=array(
	array('label'=>'List <?php echo $this->modelClass; ?>','url'=>array('index')),
	array('label'=>'Create <?php echo $this->modelClass; ?>','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-advanced-button').click(function(){
	$('.search-advanced-form').slideDown();
	$('.search-simple-form').slideUp();
	return false;
});

$('.search-simple-button').click(function(){
	$('.search-simple-form').slideDown();
	$('.search-advanced-form').slideUp();
	return false;
});

$('.search-advanced-form form,.search-simple-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#<?php echo $this->class2id($this->modelClass); ?>-master-checkbox').click(function(){
	if($(this).attr('checked') != undefined){
		$('input[name=\"<?php echo $this->class2id($this->modelClass); ?>-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',true));	
		});
	}else{
		$('input[name=\"<?php echo $this->class2id($this->modelClass); ?>-grid_c0[]\"]').each(function(){
			alert($(this).attr('checked',false));	
		});
	}
});

$('.deleteall-button').click(function(){
        
        var atLeastOneIsChecked = $('input[name=\"<?php echo $this->class2id($this->modelClass); ?>-grid_c0[]\"]:checked').length > 0;
		
        if (!atLeastOneIsChecked)
        {
                alert('".Yii::t('<?php echo $this->getModule()->name;?>Module.main','Pilih salah satu row')."');
        }
        else if (window.confirm('".Yii::t('<?php echo $this->getModule()->name;?>Module.main','Apakah anda yakin ingin menghapus data ini?')."'))
        {
                document.getElementById('<?php echo $this->class2id($this->modelClass); ?>-form').action='".Yii::app()->createUrl('/<?php echo $this->getModule()->name;?>/<?php echo $this->class2id($this->modelClass); ?>/deleteall')."';
                document.getElementById('<?php echo $this->class2id($this->modelClass); ?>-form').submit();
				return false;
        }
});

");
?>

<h1><?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

<div class="search-simple-form">
	<?php echo "<?php \$this->renderPartial('_primary_search',array(
		'model'=>\$model,
	)); ?>\n"; ?>
</div>
<div class="search-advanced-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->
<p>
<?php echo "<?php";?>

echo CHtml::link(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Tambah'),array('Create'), array('class'=>'btn btn-primary'));

<?php echo "?>\n&nbsp;\n<?php\n"; ?>

echo CHtml::Button(Yii::t('<?php echo $this->getModule()->name;?>Module.main','Hapus'), array('class'=>'btn btn-primary deleteall-button')); ?>
</p>

<?php 
echo "<?php\n";
?>
$form=$this->beginWidget('CActiveForm', array(
        'id'=>'<?php echo $this->class2id($this->modelClass); ?>-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data')
));
?>

<?php echo "<?php"; ?> $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'template'=>"{pager}\n{items}\n{pager}",
	'pager' => array(
		'pageSize' => '20',
	 ),
	'columns'=>array(

<?php
$count=-1;
foreach($this->tableSchema->columns as $column)
{
	if($count < 0 ){
	?>
	array(
		'header'=>CHtml::checkBox('<?php echo $this->class2id($this->modelClass); ?>-master-checkbox'),
		'value'=>$model-><?php echo $this->tableSchema->primaryKey;?>,
		'class'=>'CCheckBoxColumn',
	),
	<?php	
	}
	if(++$count==7)
	
	echo "\t\t/*\n";
	echo "\t\t";
	if((stripos($column->dbType,'date') !== FALSE) OR 
	   (stripos($column->dbType,'date') !== FALSE)
	  ){
	?>
	array(
		'name' => '<?php echo $column->name;?>',
		'value'=>'date("d M Y",strtotime($data-><?php echo $column->name;?>))',
	)
	<?php
	}else{
		echo "'".$column->name."'";
	} 
	echo ",\n";
}
if($count>=7)
	echo "\t\t*/\n";
?>
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 

$this->endWidget();
?>