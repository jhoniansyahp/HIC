<div class="form">
	
	<p class="note">
	<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php
	$this->widget('ext.xupload.XUploadWidget', array(
	                    'url' => Yii::app()->createUrl("polis/masterpolis/upload"),
	                    'model' => $model,
	                    'attribute' => 'file',
	));
	?>	
	
</div>