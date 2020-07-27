<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadController extends CI_Controller {


	public function index()

	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		
		$this->load->view('upload');
		
	}
	public function Upload($id=""){
		$image=$_FILES['image']['name'];
		$ext = pathinfo($image, PATHINFO_EXTENSION);
		$basename=basename($image,".".$ext);
		$id=123;
		$new = $basename."_".$id.".".$ext;

		$config['file_name'] = $new;
		$config['upload_path'] = './image';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1000;

		$this->load->library('upload',$config);


		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload', $error);
		}
		else
		{
			$data = array('image' => $this->upload->data());

			$this->load->view('upload');

		}
	

	}
	//  function __construct(){
 // 	parent::__construct();
 // 	$id = $this->session->userdata('id');
 // 	if (!$id) {
 // 		redirect(base_url('admin/login'),'refresh');
 // 	}
 // }

	// public function Logout()
	// {
	// 	$this->session->unset_userdata('id');
	// 	$this->session->unset_userdata('name');
	// 	$this->session->unset_userdata('role');
	// 	redirect(base_url('admin/login'),'refres');

	// }



		



}
