<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'v_policy_no'); ?>
		<?php echo $form->dropDownList($model, 'v_policy_no', GxHtml::listDataEx(PolMstPolis::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_line_no'); ?>
		<?php echo $form->textField($model, 'n_line_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_plan_code'); ?>
		<?php echo $form->textField($model, 'v_plan_code', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_rek_no'); ?>
		<?php echo $form->textField($model, 'v_rek_no', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_status_member'); ?>
		<?php echo $form->textField($model, 'v_status_member', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'n_premi'); ?>
		<?php echo $form->textField($model, 'n_premi', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_note'); ?>
		<?php echo $form->textField($model, 'v_note', array('maxlength' => 300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_main_member'); ?>
		<?php echo $form->textField($model, 'v_main_member', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_nik'); ?>
		<?php echo $form->textField($model, 'v_nik', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_member_no'); ?>
		<?php echo $form->textField($model, 'v_member_no', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_card_number'); ?>
		<?php echo $form->textField($model, 'v_card_number', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_name'); ?>
		<?php echo $form->textField($model, 'v_name', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_kary_family_status'); ?>
		<?php echo $form->textField($model, 'v_kary_family_status', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_sex'); ?>
		<?php echo $form->textField($model, 'v_sex', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_maried_status'); ?>
		<?php echo $form->textField($model, 'v_maried_status', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_dob'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_dob',
			'value' => $model->d_dob,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_buss_code'); ?>
		<?php echo $form->textField($model, 'v_buss_code', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_buss_name'); ?>
		<?php echo $form->textField($model, 'v_buss_name', array('maxlength' => 300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_subs_coy_code'); ?>
		<?php echo $form->textField($model, 'v_subs_coy_code', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_subs_coy_name'); ?>
		<?php echo $form->textField($model, 'v_subs_coy_name', array('maxlength' => 300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_class_ip'); ?>
		<?php echo $form->textField($model, 'v_class_ip', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_benefit'); ?>
		<?php echo $form->textField($model, 'v_benefit', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_ip_plan'); ?>
		<?php echo $form->textField($model, 'v_ip_plan', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_op_plan'); ?>
		<?php echo $form->textField($model, 'v_op_plan', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_mt_plan'); ?>
		<?php echo $form->textField($model, 'v_mt_plan', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_dt_plan'); ?>
		<?php echo $form->textField($model, 'v_dt_plan', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_gl_plan'); ?>
		<?php echo $form->textField($model, 'v_gl_plan', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_ot_plan'); ?>
		<?php echo $form->textField($model, 'v_ot_plan', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_ppk_code'); ?>
		<?php echo $form->textField($model, 'v_ppk_code', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_ppk_name'); ?>
		<?php echo $form->textField($model, 'v_ppk_name', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_address'); ?>
		<?php echo $form->textField($model, 'v_address', array('maxlength' => 300)); ?>
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
		<?php echo $form->label($model, 'd_end'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_end',
			'value' => $model->d_end,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_migrate'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_migrate',
			'value' => $model->d_migrate,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_mutasi'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'd_mutasi',
			'value' => $model->d_mutasi,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_upload_date'); ?>
		<?php echo $form->textField($model, 'd_upload_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_created_by'); ?>
		<?php echo $form->textField($model, 'v_created_by', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_created_date'); ?>
		<?php echo $form->textField($model, 'd_created_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'v_updated_by'); ?>
		<?php echo $form->textField($model, 'v_updated_by', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'd_updated_date'); ?>
		<?php echo $form->textField($model, 'd_updated_date', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
