<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'master-polis-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'v_policy_no'); ?>
		<?php echo $form->textField($model, 'v_policy_no', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_policy_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_start'); ?>
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
		<?php echo $form->error($model,'d_start'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_plan_code'); ?>
		<?php echo $form->dropDownList($model, 'v_plan_code', GxHtml::listDataEx(SetupMstPlans::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'v_plan_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_currency'); ?>
		<?php echo $form->textField($model, 'v_currency', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'v_currency'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_company_code'); ?>
		<?php echo $form->dropDownList($model, 'v_company_code', GxHtml::listDataEx(SetupMstCoys::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'v_company_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_agent_no'); ?>
		<?php echo $form->dropDownList($model, 'n_agent_no', GxHtml::listDataEx(SetupMstAgents::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'n_agent_no'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_contact_person'); ?>
		<?php echo $form->textField($model, 'v_contact_person', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'v_contact_person'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_contact_telp'); ?>
		<?php echo $form->textField($model, 'v_contact_telp', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'v_contact_telp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_address'); ?>
		<?php echo $form->textField($model, 'v_address', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_city'); ?>
		<?php echo $form->textField($model, 'v_city', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'v_city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_policy_status'); ?>
		<?php echo $form->textField($model, 'v_policy_status', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'v_policy_status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_member'); ?>
		<?php echo $form->textField($model, 'n_member'); ?>
		<?php echo $form->error($model,'n_member'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_premi_freq'); ?>
		<?php echo $form->textField($model, 'v_premi_freq', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'v_premi_freq'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_premi_budget'); ?>
		<?php echo $form->textField($model, 'n_premi_budget', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'n_premi_budget'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_add_info_penanggung'); ?>
		<?php echo $form->textField($model, 'v_add_info_penanggung', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'v_add_info_penanggung'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'n_add_info_premi'); ?>
		<?php echo $form->textField($model, 'n_add_info_premi', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'n_add_info_premi'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_upload_by'); ?>
		<?php echo $form->textField($model, 'v_upload_by', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_upload_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_upload_date'); ?>
		<?php echo $form->textField($model, 'd_upload_date'); ?>
		<?php echo $form->error($model,'d_upload_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_verifikasi_by'); ?>
		<?php echo $form->textField($model, 'v_verifikasi_by', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'v_verifikasi_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_verifikasi_date'); ?>
		<?php echo $form->textField($model, 'd_verifikasi_date'); ?>
		<?php echo $form->error($model,'d_verifikasi_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_created_by'); ?>
		<?php echo $form->textField($model, 'v_created_by', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_created_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_created_date'); ?>
		<?php echo $form->textField($model, 'd_created_date'); ?>
		<?php echo $form->error($model,'d_created_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'v_updated_by'); ?>
		<?php echo $form->textField($model, 'v_updated_by', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'v_updated_by'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'d_updated_date'); ?>
		<?php echo $form->textField($model, 'd_updated_date'); ?>
		<?php echo $form->error($model,'d_updated_date'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('polDtlPolises')); ?></label>
		<?php echo $form->checkBoxList($model, 'polDtlPolises', GxHtml::encodeEx(GxHtml::listDataEx(PolDtlPolis::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->