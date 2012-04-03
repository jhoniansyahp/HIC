<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionUpload(){
	
                        
			Yii::import("ext.EAjaxUpload.qqFileUploader");
                        
			$folder= str_replace("\protected","",Yii::app()->basePath).'/uploads/excel/';// folder for uploaded files
                
			$allowedExtensions = array("xlsx","mp4");//array("jpg","jpeg","gif","exe","mov")
			$sizeLimit = 2 * 1024 * 1024;// maximum file size in bytes
			$uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
			$result = $uploader->handleUpload($folder);
			if($result['success']){
				$model = new Upload;
				$model->nama_file = $result['filename'];
				$model->upload_date = date("Y-m-d");
				$model->flag_proses = '0';
				if($model->save()){
					$result=htmlspecialchars(json_encode($result), ENT_NOQUOTES);
					echo $result;// it's array
				} else {
					$resultz = array('error' => 'ga iso add ke db');
					$resultz=htmlspecialchars(json_encode($resultz), ENT_NOQUOTES);
					echo $resultz;// it's array
				}
			}
			
	}

public function actionUploadexcel(){
            $this->layout = "normal";
			$this->render('uploadExcel');
		}	
}