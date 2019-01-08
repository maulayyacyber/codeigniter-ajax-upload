<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function upload()
	{
		$config['upload_path']= realpath("upload/"); 
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("userfile")){
            $data = array('upload_data' => $this->upload->data());
 
         
            $image = $data['upload_data']['file_name'];
            
            echo json_decode($image);
        }
	}

}
