<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>
<?php
$this->breadcrumbs=array(
	Yii::t('app','Uploads')=>array('index'),
	Yii::t('app','View'),
);
/*
$this->menu=array(
	array('label'=>'List Upload','url'=>array('index')),
	array('label'=>'Create Upload','url'=>array('create')),
	array('label'=>'Update Upload','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Upload','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Upload','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->id), array('update','id'=>$model->id));
?>
</div>

<h1><?php echo Yii::t('app','View #{no}',array('{no}'=>'$model->id'); ?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_file',
		'flag_proses',
		'uploaded_by',
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->id),array('update','id'=>$model->id),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('app','&laquo; Back to List'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('app','Update &raquo;',$model->id), array('update','id'=>$model->id));
?>
</div>
</p>
-->