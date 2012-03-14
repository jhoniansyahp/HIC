<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);
?>
<h1><?php echo UserModule::t("Create User"); ?></h1>

<?php 
	// echo $this->renderPartial('_menu',array(
		// 'list'=> array(),
	// ));
	// $this->menu=array(
	// array('label'=>UserModule::t('Manage User'),'url'=>array('/user/admin'), 'visible'=>UserModule::isAdmin()),
	// array('label'=>UserModule::t('Profile'),'url'=>array('/user/profile')),
	// array('label'=>UserModule::t('Edit'),'url'=>array('edit')),
	// array('label'=>UserModule::t('Change password'),'url'=>array('changepassword')),
// );
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>