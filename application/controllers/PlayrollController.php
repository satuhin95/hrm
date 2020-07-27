<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayrollController extends CI_Controller {

	public function index()

	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		$data=$this->db->query("select id,name,type from payroll_head  ");
		$result=$data->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('playroll/playroll',array('play'=>$result));
		$this->load->view('layout/footer.php');
		
	}
	public function Create(){
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('playroll/create_playroll');
		$this->load->view('layout/footer.php');


	}
	public function Store(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{					

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('playroll/create_playroll');
		$this->load->view('layout/footer.php');
			
		}
		else{
			$name =$this->input->post('name',true);					
			$type =$this->input->post('type');					
			$this->db->query("insert into payroll_head (name,type) values('$name','$type')"); 
			UserActivity(' Position : Insert');
			redirect('PlayrollController');   
		}

	}
	public function Edit($id){
		$data=$this->db->query("select * from payroll_head where id='$id' ");
		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('playroll/edit_playroll',array('play'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Update($id){

		$name =$this->input->post('name',true);					
		$type =$this->input->post('type');					
				
		$this->db->query("update  payroll_head set name='$name' ,type='$type' where id='$id' "); 
		UserActivity(' Position : Update');
		redirect('PlayrollController');    
	}
	public function Delete($id){
		$data=$this->db->query("delete  from payroll_head where id='$id' ");
		UserActivity(' Position : Delete');
		redirect('PlayrollController');     
	}



}
