<?php

/**
 * This is the model base class for the table "pol_mst_polis".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PolMstPolis".
 *
 * Columns in table "pol_mst_polis" available as properties of the model,
 * followed by relations of table "pol_mst_polis" available as properties of the model.
 *
 * @property string $v_policy_no
 * @property string $d_start
 * @property string $v_plan_code
 * @property string $v_currency
 * @property string $v_company_code
 * @property integer $n_agent_no
 * @property string $v_contact_person
 * @property string $v_contact_telp
 * @property string $v_address
 * @property string $v_city
 * @property string $v_policy_status
 * @property integer $n_member
 * @property string $v_premi_freq
 * @property string $n_premi_budget
 * @property string $v_add_info_penanggung
 * @property string $n_add_info_premi
 * @property string $v_upload_by
 * @property string $d_upload_date
 * @property string $v_verifikasi_by
 * @property string $d_verifikasi_date
 * @property string $v_created_by
 * @property string $d_created_date
 * @property string $v_updated_by
 * @property string $d_updated_date
 *
 * @property ClmMstClaims[] $clmMstClaims
 * @property PolDtlPolis[] $polDtlPolises
 * @property SetupMstAgents $nAgentNo
 * @property SetupMstCoys $vCompanyCode
 * @property SetupMstPlans $vPlanCode
 */
abstract class BasePolMstPolis extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'pol_mst_polis';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PolMstPolis|PolMstPolises', $n);
	}

	public static function representingColumn() {
		return 'd_start';
	}

	public function rules() {
		return array(
			array('v_policy_no, d_start, v_plan_code, n_agent_no, v_policy_status, v_premi_freq, d_created_date', 'required'),
			array('n_agent_no, n_member', 'numerical', 'integerOnly'=>true),
			array('v_policy_no, v_contact_telp', 'length', 'max'=>50),
			array('v_plan_code, v_company_code, n_premi_budget, n_add_info_premi, v_created_by, v_updated_by', 'length', 'max'=>30),
			array('v_currency', 'length', 'max'=>10),
			array('v_contact_person, v_city, v_add_info_penanggung', 'length', 'max'=>150),
			array('v_address, v_upload_by, v_verifikasi_by', 'length', 'max'=>250),
			array('v_policy_status', 'length', 'max'=>20),
			array('v_premi_freq', 'length', 'max'=>4),
			array('d_upload_date, d_verifikasi_date, d_updated_date', 'safe'),
			array('v_currency, v_company_code, v_contact_person, v_contact_telp, v_address, v_city, n_member, n_premi_budget, v_add_info_penanggung, n_add_info_premi, v_upload_by, d_upload_date, v_verifikasi_by, d_verifikasi_date, v_created_by, v_updated_by, d_updated_date', 'default', 'setOnEmpty' => true, 'value' => null),
			array('v_policy_no, d_start, v_plan_code, v_currency, v_company_code, n_agent_no, v_contact_person, v_contact_telp, v_address, v_city, v_policy_status, n_member, v_premi_freq, n_premi_budget, v_add_info_penanggung, n_add_info_premi, v_upload_by, d_upload_date, v_verifikasi_by, d_verifikasi_date, v_created_by, d_created_date, v_updated_by, d_updated_date', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'clmMstClaims' => array(self::HAS_MANY, 'ClmMstClaims', 'v_policy_no'),
			'polDtlPolises' => array(self::HAS_MANY, 'PolDtlPolis', 'v_policy_no'),
			'nAgentNo' => array(self::BELONGS_TO, 'SetupMstAgents', 'n_agent_no'),
			'vCompanyCode' => array(self::BELONGS_TO, 'SetupMstCoys', 'v_company_code'),
			'vPlanCode' => array(self::BELONGS_TO, 'SetupMstPlans', 'v_plan_code'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'v_policy_no' => Yii::t('app', 'Policy No'),
			'd_start' => Yii::t('app', 'Start'),
			'v_plan_code' => Yii::t('app','Plan Code'),
			'v_currency' => Yii::t('app', 'Currency'),
			'v_company_code' => Yii::t('app','Company Code'),
			'n_agent_no' => Yii::t('app','Agent No'),
			'v_contact_person' => Yii::t('app', 'Contact Person'),
			'v_contact_telp' => Yii::t('app', 'Contact Telp'),
			'v_address' => Yii::t('app', 'Address'),
			'v_city' => Yii::t('app', 'City'),
			'v_policy_status' => Yii::t('app', 'Policy Status'),
			'n_member' => Yii::t('app', 'Member'),
			'v_premi_freq' => Yii::t('app', 'Premi Freq'),
			'n_premi_budget' => Yii::t('app', 'Premi Budget'),
			'v_add_info_penanggung' => Yii::t('app', 'Add Info Penanggung'),
			'n_add_info_premi' => Yii::t('app', 'Add Info Premi'),
			'v_upload_by' => Yii::t('app', 'Upload By'),
			'd_upload_date' => Yii::t('app', 'Upload Date'),
			'v_verifikasi_by' => Yii::t('app', 'Verifikasi By'),
			'd_verifikasi_date' => Yii::t('app', 'Verifikasi Date'),
			'v_created_by' => Yii::t('app', 'Created By'),
			'd_created_date' => Yii::t('app', 'Created Date'),
			'v_updated_by' => Yii::t('app', 'Updated By'),
			'd_updated_date' => Yii::t('app', 'Updated Date'),
			'clmMstClaims' => Yii::t('app','ClmMstClaims'),
			'polDtlPolises' => Yii::t('app','PolDtlPolises'),
			'nAgentNo' => Yii::t('app','NAgentNo'),
			'vCompanyCode' => Yii::t('app','VCompanyCode'),
			'vPlanCode' => Yii::t('app','VPlanCode'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('v_policy_no', $this->v_policy_no, true);
		$criteria->compare('d_start', $this->d_start, true);
		$criteria->compare('v_plan_code', $this->v_plan_code);
		$criteria->compare('v_currency', $this->v_currency, true);
		$criteria->compare('v_company_code', $this->v_company_code);
		$criteria->compare('n_agent_no', $this->n_agent_no);
		$criteria->compare('v_contact_person', $this->v_contact_person, true);
		$criteria->compare('v_contact_telp', $this->v_contact_telp, true);
		$criteria->compare('v_address', $this->v_address, true);
		$criteria->compare('v_city', $this->v_city, true);
		$criteria->compare('v_policy_status', $this->v_policy_status, true);
		$criteria->compare('n_member', $this->n_member);
		$criteria->compare('v_premi_freq', $this->v_premi_freq, true);
		$criteria->compare('n_premi_budget', $this->n_premi_budget, true);
		$criteria->compare('v_add_info_penanggung', $this->v_add_info_penanggung, true);
		$criteria->compare('n_add_info_premi', $this->n_add_info_premi, true);
		$criteria->compare('v_upload_by', $this->v_upload_by, true);
		$criteria->compare('d_upload_date', $this->d_upload_date, true);
		$criteria->compare('v_verifikasi_by', $this->v_verifikasi_by, true);
		$criteria->compare('d_verifikasi_date', $this->d_verifikasi_date, true);
		$criteria->compare('v_created_by', $this->v_created_by, true);
		$criteria->compare('d_created_date', $this->d_created_date, true);
		$criteria->compare('v_updated_by', $this->v_updated_by, true);
		$criteria->compare('d_updated_date', $this->d_updated_date, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}