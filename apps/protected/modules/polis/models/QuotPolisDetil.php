<?php

/**
 * This is the model class for table "pol_dtl_quot".
 *
 * The followings are the available columns in table 'pol_dtl_quot':
 * @property string $v_quotation_no
 * @property integer $n_line_no
 * @property string $v_policy_no
 * @property integer $n_line_policy
 * @property string $v_plan_code
 * @property string $v_rek_no
 * @property string $v_status_member
 * @property string $n_premi
 * @property string $v_note
 * @property string $v_main_member
 * @property string $v_nik
 * @property string $v_member_no
 * @property string $v_card_number
 * @property string $v_name
 * @property string $v_kary_family_status
 * @property string $v_sex
 * @property string $v_maried_status
 * @property string $d_dob
 * @property string $v_buss_code
 * @property string $v_buss_name
 * @property string $v_subs_coy_code
 * @property string $v_subs_coy_name
 * @property string $v_class_ip
 * @property string $v_benefit
 * @property string $v_ip_plan
 * @property string $v_op_plan
 * @property string $v_mt_plan
 * @property string $v_dt_plan
 * @property string $v_gl_plan
 * @property string $v_ot_plan
 * @property string $v_ppk_code
 * @property string $v_ppk_name
 * @property string $v_address
 * @property string $d_start
 * @property string $d_end
 * @property string $d_migrate
 * @property string $d_mutasi
 * @property string $v_verifikasi_by
 * @property string $d_verifikasi_date
 * @property string $v_upload_by
 * @property string $d_upload_date
 * @property string $v_created_by
 * @property string $d_created_date
 * @property string $v_updated_by
 * @property string $d_updated_date
 */
class QuotPolisDetil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return QuotPolisDetil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pol_dtl_quot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('v_quotation_no, n_line_no, v_policy_no, n_line_policy, v_plan_code, v_main_member, v_sex', 'required'),
			array('n_line_no, n_line_policy', 'numerical', 'integerOnly'=>true),
			array('v_quotation_no, v_policy_no, v_main_member, v_nik, v_member_no, v_card_number', 'length', 'max'=>50),
			array('v_plan_code, v_status_member, n_premi, v_buss_code, v_subs_coy_code, v_class_ip, v_benefit, v_ip_plan, v_op_plan, v_mt_plan, v_dt_plan, v_gl_plan, v_ot_plan, v_ppk_code, v_created_by, v_updated_by', 'length', 'max'=>30),
			array('v_rek_no', 'length', 'max'=>100),
			array('v_note, v_buss_name, v_subs_coy_name, v_address', 'length', 'max'=>300),
			array('v_name, v_ppk_name', 'length', 'max'=>150),
			array('v_kary_family_status, v_sex', 'length', 'max'=>10),
			array('v_maried_status', 'length', 'max'=>20),
			array('v_verifikasi_by, v_upload_by', 'length', 'max'=>250),
			array('d_verifikasi_date, d_upload_date, d_created_date, d_updated_date', 'length', 'max'=>6),
			array('d_dob, d_start, d_end, d_migrate, d_mutasi', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('v_quotation_no, n_line_no, v_policy_no, n_line_policy, v_plan_code, v_rek_no, v_status_member, n_premi, v_note, v_main_member, v_nik, v_member_no, v_card_number, v_name, v_kary_family_status, v_sex, v_maried_status, d_dob, v_buss_code, v_buss_name, v_subs_coy_code, v_subs_coy_name, v_class_ip, v_benefit, v_ip_plan, v_op_plan, v_mt_plan, v_dt_plan, v_gl_plan, v_ot_plan, v_ppk_code, v_ppk_name, v_address, d_start, d_end, d_migrate, d_mutasi, v_verifikasi_by, d_verifikasi_date, v_upload_by, d_upload_date, v_created_by, d_created_date, v_updated_by, d_updated_date', 'safe', 'on'=>'search'),
		);
	}

	public function primaryKey()
	{
	    return 'v_quotation_no';
	    // For composite primary key, return an array like the following
	    // return array('pk1', 'pk2');
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'v_quotation_no' => 'V Quotation No',
			'n_line_no' => 'N Line No',
			'v_policy_no' => 'V Policy No',
			'n_line_policy' => 'N Line Policy',
			'v_plan_code' => 'V Plan Code',
			'v_rek_no' => 'V Rek No',
			'v_status_member' => 'V Status Member',
			'n_premi' => 'N Premi',
			'v_note' => 'V Note',
			'v_main_member' => 'V Main Member',
			'v_nik' => 'V Nik',
			'v_member_no' => 'V Member No',
			'v_card_number' => 'V Card Number',
			'v_name' => 'V Name',
			'v_kary_family_status' => 'V Kary Family Status',
			'v_sex' => 'V Sex',
			'v_maried_status' => 'V Maried Status',
			'd_dob' => 'D Dob',
			'v_buss_code' => 'V Buss Code',
			'v_buss_name' => 'V Buss Name',
			'v_subs_coy_code' => 'V Subs Coy Code',
			'v_subs_coy_name' => 'V Subs Coy Name',
			'v_class_ip' => 'V Class Ip',
			'v_benefit' => 'V Benefit',
			'v_ip_plan' => 'V Ip Plan',
			'v_op_plan' => 'V Op Plan',
			'v_mt_plan' => 'V Mt Plan',
			'v_dt_plan' => 'V Dt Plan',
			'v_gl_plan' => 'V Gl Plan',
			'v_ot_plan' => 'V Ot Plan',
			'v_ppk_code' => 'V Ppk Code',
			'v_ppk_name' => 'V Ppk Name',
			'v_address' => 'V Address',
			'd_start' => 'D Start',
			'd_end' => 'D End',
			'd_migrate' => 'D Migrate',
			'd_mutasi' => 'D Mutasi',
			'v_verifikasi_by' => 'V Verifikasi By',
			'd_verifikasi_date' => 'D Verifikasi Date',
			'v_upload_by' => 'V Upload By',
			'd_upload_date' => 'D Upload Date',
			'v_created_by' => 'V Created By',
			'd_created_date' => 'D Created Date',
			'v_updated_by' => 'V Updated By',
			'd_updated_date' => 'D Updated Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('v_quotation_no',$this->v_quotation_no,true);
		$criteria->compare('n_line_no',$this->n_line_no);
		$criteria->compare('v_policy_no',$this->v_policy_no,true);
		$criteria->compare('n_line_policy',$this->n_line_policy);
		$criteria->compare('v_plan_code',$this->v_plan_code,true);
		$criteria->compare('v_rek_no',$this->v_rek_no,true);
		$criteria->compare('v_status_member',$this->v_status_member,true);
		$criteria->compare('n_premi',$this->n_premi,true);
		$criteria->compare('v_note',$this->v_note,true);
		$criteria->compare('v_main_member',$this->v_main_member,true);
		$criteria->compare('v_nik',$this->v_nik,true);
		$criteria->compare('v_member_no',$this->v_member_no,true);
		$criteria->compare('v_card_number',$this->v_card_number,true);
		$criteria->compare('v_name',$this->v_name,true);
		$criteria->compare('v_kary_family_status',$this->v_kary_family_status,true);
		$criteria->compare('v_sex',$this->v_sex,true);
		$criteria->compare('v_maried_status',$this->v_maried_status,true);
		$criteria->compare('d_dob',$this->d_dob,true);
		$criteria->compare('v_buss_code',$this->v_buss_code,true);
		$criteria->compare('v_buss_name',$this->v_buss_name,true);
		$criteria->compare('v_subs_coy_code',$this->v_subs_coy_code,true);
		$criteria->compare('v_subs_coy_name',$this->v_subs_coy_name,true);
		$criteria->compare('v_class_ip',$this->v_class_ip,true);
		$criteria->compare('v_benefit',$this->v_benefit,true);
		$criteria->compare('v_ip_plan',$this->v_ip_plan,true);
		$criteria->compare('v_op_plan',$this->v_op_plan,true);
		$criteria->compare('v_mt_plan',$this->v_mt_plan,true);
		$criteria->compare('v_dt_plan',$this->v_dt_plan,true);
		$criteria->compare('v_gl_plan',$this->v_gl_plan,true);
		$criteria->compare('v_ot_plan',$this->v_ot_plan,true);
		$criteria->compare('v_ppk_code',$this->v_ppk_code,true);
		$criteria->compare('v_ppk_name',$this->v_ppk_name,true);
		$criteria->compare('v_address',$this->v_address,true);
		$criteria->compare('d_start',$this->d_start,true);
		$criteria->compare('d_end',$this->d_end,true);
		$criteria->compare('d_migrate',$this->d_migrate,true);
		$criteria->compare('d_mutasi',$this->d_mutasi,true);
		$criteria->compare('v_verifikasi_by',$this->v_verifikasi_by,true);
		$criteria->compare('d_verifikasi_date',$this->d_verifikasi_date,true);
		$criteria->compare('v_upload_by',$this->v_upload_by,true);
		$criteria->compare('d_upload_date',$this->d_upload_date,true);
		$criteria->compare('v_created_by',$this->v_created_by,true);
		$criteria->compare('d_created_date',$this->d_created_date,true);
		$criteria->compare('v_updated_by',$this->v_updated_by,true);
		$criteria->compare('d_updated_date',$this->d_updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}