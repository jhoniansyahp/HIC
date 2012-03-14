<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Manage'),
);
?>
<h1><?php echo UserModule::t("Manage Users"); ?></h1>

<?php 
// echo $this->renderPartial('_menu', array(
		// 'list'=> array(
			// CHtml::link(UserModule::t('Create User'),array('create')),
		// ),
	// ));
$this->menu=array(
	array('label'=>UserModule::t('Manage User'),'url'=>array('/user/admin'), 'visible'=>UserModule::isAdmin()),
	array('label'=>UserModule::t('Create User'),'url'=>array('create')),
	array('label'=>UserModule::t('Profile'),'url'=>array('/user/profile')),
	array('label'=>UserModule::t('Edit'),'url'=>array('edit')),
	array('label'=>UserModule::t('Change password'),'url'=>array('changepassword')),
);
?>

<?php $this->widget('ext.bootstrap.widgets.BootGridView', array(
	'dataProvider'=>$dataProvider,
	'template'=>'{pager}{items}{pager}',
	'columns'=>array(
		array(
			'name' => 'id',
			'type'=>'raw',
			'value' => 'CHtml::link(CHtml::encode($data->id),array("admin/update","id"=>$data->id))',
		),
		array(
			'name' => 'username',
			'type'=>'raw',
			'value' => 'CHtml::link(CHtml::encode($data->username),array("admin/view","id"=>$data->id))',
		),
		array(
			'name'=>'email',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->email), "mailto:".$data->email)',
		),
		array(
			'name' => 'createtime',
			'value' => 'date("d.m.Y H:i:s",$data->createtime)',
		),
		array(
			'name' => 'lastvisit',
			'value' => '(($data->lastvisit)?date("d.m.Y H:i:s",$data->lastvisit):UserModule::t("Not visited"))',
		),
		array(
			'name'=>'status',
			'value'=>'User::itemAlias("UserStatus",$data->status)',
		),
		array(
			'name'=>'superuser',
			'value'=>'User::itemAlias("AdminStatus",$data->superuser)',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
