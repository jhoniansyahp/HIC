<?php 
/***************************
#	Developed: Abdul Ibad
#	Contact: abdul.ibad@gmail.com
#	Website: http://dulabs.com
#	Date: @ March 2012
***************************/
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_file')); ?>:</b>
	<?php echo CHtml::encode($data->nama_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_date')); ?>:</b>
	<?php echo CHtml::encode($this->getDate()->toReadable($data->upload_date)); ?>a
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_proses')); ?>:</b>
	<?php echo CHtml::encode($data->flag_proses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploaded_by')); ?>:</b>
	<?php echo CHtml::encode($data->uploaded_by); ?>
	<br />


</div>