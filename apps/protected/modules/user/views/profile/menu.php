<?php 
$this->menu=array(
	array('label'=>UserModule::t('Manage User'),'url'=>array('/user/admin'), 'visible'=>UserModule::isAdmin()),
	array('label'=>UserModule::t('Profile'),'url'=>array('/user/profile')),
	array('label'=>UserModule::t('Edit'),'url'=>array('edit')),
	array('label'=>UserModule::t('Change password'),'url'=>array('changepassword')),
);
?>