<?php

/**
 * This is the model class for table "pol_mst_polis".
 *
 * The followings are the available columns in table 'pol_mst_polis':
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
 */
class MasterPolis extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MasterPolis the static model class
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
		return 'pol_mst_polis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('v_policy_no, d_start, v_plan_code, v_currency, v_company_code, n_agent_no, v_policy_status, v_premi_freq, v_created_by, d_created_date', 'required'),
			array('v_policy_no, n_member, v_plan_code', 'required'),
			array('n_agent_no, n_member', 'numerical', 'integerOnly'=>true),
			array('v_policy_no, v_contact_telp', 'length', 'max'=>50),
			array('v_plan_code, v_company_code, n_premi_budget, n_add_info_premi, v_created_by, v_updated_by', 'length', 'max'=>30),
			array('v_currency', 'length', 'max'=>10),
			array('v_contact_person, v_city, v_add_info_penanggung', 'length', 'max'=>150),
			array('v_address, v_upload_by, v_verifikasi_by', 'length', 'max'=>250),
			array('v_policy_status', 'length', 'max'=>20),
			array('v_premi_freq', 'length', 'max'=>4),
			array('d_upload_date, d_verifikasi_date, d_updated_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('v_policy_no, d_start, v_plan_code, v_currency, v_company_code, n_agent_no, v_contact_person, v_contact_telp, v_address, v_city, v_policy_status, n_member, v_premi_freq, n_premi_budget, v_add_info_penanggung, n_add_info_premi, v_upload_by, d_upload_date, v_verifikasi_by, d_verifikasi_date, v_created_by, d_created_date, v_updated_by, d_updated_date', 'safe', 'on'=>'search'),
		);
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
			'v_policy_no' => 'No. Polis',
			'd_start' => 'D Start',
			'v_plan_code' => 'Produk',
			'v_currency' => 'V Currency',
			'v_company_code' => 'V Company Code',
			'n_agent_no' => 'N Agent No',
			'v_contact_person' => 'V Contact Person',
			'v_contact_telp' => 'V Contact Telp',
			'v_address' => 'V Address',
			'v_city' => 'V City',
			'v_policy_status' => 'V Policy Status',
			'n_member' => 'Nama Pemegang Polis',
			'v_premi_freq' => 'V Premi Freq',
			'n_premi_budget' => 'N Premi Budget',
			'v_add_info_penanggung' => 'V Add Info Penanggung',
			'n_add_info_premi' => 'N Add Info Premi',
			'v_upload_by' => 'V Upload By',
			'd_upload_date' => 'D Upload Date',
			'v_verifikasi_by' => 'V Verifikasi By',
			'd_verifikasi_date' => 'D Verifikasi Date',
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

		$criteria->compare('v_policy_no',$this->v_policy_no,true);
		$criteria->compare('d_start',$this->d_start,true);
		$criteria->compare('v_plan_code',$this->v_plan_code,true);
		$criteria->compare('v_currency',$this->v_currency,true);
		$criteria->compare('v_company_code',$this->v_company_code,true);
		$criteria->compare('n_agent_no',$this->n_agent_no);
		$criteria->compare('v_contact_person',$this->v_contact_person,true);
		$criteria->compare('v_contact_telp',$this->v_contact_telp,true);
		$criteria->compare('v_address',$this->v_address,true);
		$criteria->compare('v_city',$this->v_city,true);
		$criteria->compare('v_policy_status',$this->v_policy_status,true);
		$criteria->compare('n_member',$this->n_member);
		$criteria->compare('v_premi_freq',$this->v_premi_freq,true);
		$criteria->compare('n_premi_budget',$this->n_premi_budget,true);
		$criteria->compare('v_add_info_penanggung',$this->v_add_info_penanggung,true);
		$criteria->compare('n_add_info_premi',$this->n_add_info_premi,true);
		$criteria->compare('v_upload_by',$this->v_upload_by,true);
		$criteria->compare('d_upload_date',$this->d_upload_date,true);
		$criteria->compare('v_verifikasi_by',$this->v_verifikasi_by,true);
		$criteria->compare('d_verifikasi_date',$this->d_verifikasi_date,true);
		$criteria->compare('v_created_by',$this->v_created_by,true);
		$criteria->compare('d_created_date',$this->d_created_date,true);
		$criteria->compare('v_updated_by',$this->v_updated_by,true);
		$criteria->compare('d_updated_date',$this->d_updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}