<?php 
	class Upload extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function index(){
			$this->load->view('upload_zip');
		}

		public function upload_zip(){
			$this->load->library('upload');
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'zip';
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('file')){
				$error = array('error'=>$this->upload->display_errors());
				$this->load->view('upload_zip',$error);
			}else{
				$data = array('uploaded_data'=>$this->upload->data());
				$zip = new ZipArchive;
				$file = $data['uploaded_data']['full_path'];

				if($zip->open($file)==TRUE){
					$zip->extractTo('./uploads/extracts/');
					$zip->close();
					$success = array('success'=>'Zip file uploaded and extracted!');
					$this->load->view('upload_zip',$success);
				}else{
					$error = array('error'=>'Unable to extract the zip file!');
					$this->load->view('upload_zip',$error);
				}

			}

		}
	}
