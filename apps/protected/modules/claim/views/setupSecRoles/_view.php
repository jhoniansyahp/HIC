<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_role_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_role_code),array('view','id'=>$data->v_role_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_coy_id')); ?>:</b>
	<?php echo CHtml::encode($data->n_coy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_org_id')); ?>:</b>
	<?php echo CHtml::encode($data->n_org_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_role_name')); ?>:</b>
	<?php echo CHtml::encode($data->v_role_name); ?>
	<br />


</div>