<?php

Yii::import('application.modules.claim.models._base.BaseClmMstClaims');

class ClmMstClaims extends BaseClmMstClaims
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	public function attributeLabels() {
		return array(
			'v_claim_no' => Yii::t('app', 'No Klaim'),
			'v_policy_no' => Yii::t('app', 'No Polis'),			
			'd_claim' => Yii::t('app', 'Tgl Proses'),
			'd_submitted' => Yii::t('app', 'Tgl Pengajuan'),
			'v_claim_intim' => Yii::t('app', 'nama pengaju klaim'),
			'v_address' => Yii::t('app', 'Alamat Lengkap'),
			'v_city' => Yii::t('app', 'kota'),
			'v_province' => Yii::t('app', 'provinsi'),
			'v_claim_status_note' => Yii::t('app', 'ket status klaim'),
			'v_claim_status' => Yii::t('app', 'status klaim'),
			'v_diagnosa_note' => Yii::t('app', 'catatan diagnosa'),
			'v_doc_scan' => Yii::t('app', 'File Scan Dokumen Klaim'),
			'v_sent_by' => Yii::t('app', 'Pengiriman Melalui'),
			'v_sent_to' => Yii::t('app', 'Tujuan Pengiriman '),
			'd_sent_doc' => Yii::t('app', 'Tanggal Dikirim'),
			'v_intim_email' => Yii::t('app', 'alamat email pengaju klaim'),
			'v_intim_telp' => Yii::t('app', 'telp pengaju klaim'),
			'v_bank_code' => Yii::t('app', 'Bank'),
			'v_bank_cabang' => Yii::t('app', 'cabang bank'),
			'v_rekening_no' => Yii::t('app', 'no rekening'),
			'v_rekening_nama' => Yii::t('app', 'atas nama rekening'),
			'v_cabang_layanan' => Yii::t('app', 'cabang layanan'),
			'd_incident_date' => Yii::t('app', 'tgl kejadian'),
			'v_claim_doc' => Yii::t('app', 'Dokumen Klaim'),
			'v_member_no' => Yii::t('app', 'No Peserta'),
		);
	}
}