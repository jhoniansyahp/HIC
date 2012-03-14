<?php
$this->breadcrumbs=array(
	(UserModule::t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(UserModule::t('Update')),
);
?>

<h1><?php echo  UserModule::t('Update User')." ".$model->id; ?></h1>

<?php 
// echo $this->renderPartial('_menu', array(
		// 'list'=> array(
			// CHtml::link(UserModule::t('Create User'),array('create')),
			// CHtml::link(UserModule::t('View User'),array('view','id'=>$model->id)),
		// ),
	// ));
$this->menu=array(
	array('label'=>UserModule::t('Manage User'),'url'=>array('/user/admin'), 'visible'=>UserModule::isAdmin()),
	array('label'=>UserModule::t('Create User'),'url'=>array('create')),
	array('label'=>UserModule::t('View User'),'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>UserModule::t('Profile'),'url'=>array('/user/profile')),
	//array('label'=>UserModule::t('Edit'),'url'=>array('edit')),
	//array('label'=>UserModule::t('Change password'),'url'=>array('changepassword')),
);	

	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile)); ?>