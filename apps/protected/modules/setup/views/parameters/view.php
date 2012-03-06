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
	Yii::t('setupModule.main','Setup Parameters')=>array('index'),
	Yii::t('setupModule.main','Lihat'),
);
/*
$this->menu=array(
	array('label'=>'List SetupMstParameters','url'=>array('index')),
	array('label'=>'Create SetupMstParameters','url'=>array('create')),
	array('label'=>'Update SetupMstParameters','url'=>array('update','id'=>$model->v_param_code)),
	array('label'=>'Delete SetupMstParameters','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->v_param_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SetupMstParameters','url'=>array('admin')),
);
*/
?>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_param_code), array('update','id'=>$model->v_param_code));
?>
</div>

<h1><?php echo Yii::t('setupModule.main','Lihat Parameter $v_param_name',array('$v_param_name'=>$model->v_param_name));?></h1>


<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'v_param_code',
		'v_param_name',
		'v_param_desc',
		'v_flag',
		array(
			'name' => 'n_value_number',
			'value' => !empty($model->n_value_number) ? $model->n_value_number : "",
		),
		array(
			'name' => 'd_value_date',
			'value' => !empty($model->d_value_date) ? $this->getDate()->toReadable($model->d_value_date) : "",
		),
		array(
			'name' => 'v_value_char',
			'value' => !empty($model->v_value_char) ? $model->v_value_char : "",
		),
	),
)); ?>
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'),array('class'=>'btn btn-primary'));
echo "\n&nbsp;\n";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_param_code),array('update','id'=>$model->v_param_code),array('class'=>'btn btn-primary'));
?>
<!--<p>
<div class="alert alert-info">
<?php
echo CHtml::Link(Yii::t('setupModule.main','&laquo; Kembali ke list'), array('index'));
echo "&nbsp;-&nbsp;";
echo CHtml::Link(Yii::t('setupModule.main','Ubah Data {n} &raquo;',$model->v_param_code), array('update','id'=>$model->v_param_code));
?>
</div>
</p>
-->