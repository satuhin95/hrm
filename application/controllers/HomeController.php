<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
	}




	public function index()

	{
		
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		if ($this->session->userdata('ses_role')==1) {
			$this->load->view('dashboard/dashboard1_view');
		}elseif($this->session->userdata('ses_role')==2){
			$this->load->view('dashboard/dashboard2_view');
		}
		
		$this->load->view('layout/footer.php');
		
	}
	


}
