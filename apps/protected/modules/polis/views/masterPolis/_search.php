<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'v_policy_no'); ?>
		<?php echo $form->textField($model, 'v_policy_no', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_start'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_start',
			'value' => $model->d_start,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_plan_code'); ?>
		<?php echo $form->dropDownList($model, 'v_plan_code', GxHtml::listDataEx(SetupMstPlans::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_currency'); ?>
		<?php echo $form->textField($model, 'v_currency', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_company_code'); ?>
		<?php echo $form->dropDownList($model, 'v_company_code', GxHtml::listDataEx(SetupMstCoys::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_agent_no'); ?>
		<?php echo $form->dropDownList($model, 'n_agent_no', GxHtml::listDataEx(SetupMstAgents::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_contact_person'); ?>
		<?php echo $form->textField($model, 'v_contact_person', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_contact_telp'); ?>
		<?php echo $form->textField($model, 'v_contact_telp', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_address'); ?>
		<?php echo $form->textField($model, 'v_address', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_city'); ?>
		<?php echo $form->textField($model, 'v_city', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_policy_status'); ?>
		<?php echo $form->textField($model, 'v_policy_status', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_member'); ?>
		<?php echo $form->textField($model, 'n_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_premi_freq'); ?>
		<?php echo $form->textField($model, 'v_premi_freq', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_premi_budget'); ?>
		<?php echo $form->textField($model, 'n_premi_budget', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_add_info_penanggung'); ?>
		<?php echo $form->textField($model, 'v_add_info_penanggung', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_add_info_premi'); ?>
		<?php echo $form->textField($model, 'n_add_info_premi', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_upload_date'); ?>
		<?php echo $form->textField($model, 'd_upload_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_created_by'); ?>
		<?php echo $form->textField($model, 'v_created_by', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_created_date'); ?>
		<?php echo $form->textField($model, 'd_created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_updated_by'); ?>
		<?php echo $form->textField($model, 'v_updated_by', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_updated_date'); ?>
		<?php echo $form->textField($model, 'd_updated_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
