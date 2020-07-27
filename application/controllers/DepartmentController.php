<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartmentController extends CI_Controller {

	public function index()

	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		
		$data=$this->db->query("select * from department");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('department/department',array('dept'=>$result));
		$this->load->view('layout/footer.php');

		
	}
	public function Create(){
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('department/create_department');
		$this->load->view('layout/footer.php');

	}
	public function Store(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{					
			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('department/create_department');
			$this->load->view('layout/footer.php');
			
		}
		else{
			$title =$this->input->post('title',true);					
			$description=$this->input->post('description');						


			$this->db->query("insert into department(title,description)values('$title','$description')"); 
			UserActivity('Department: Insert');
			redirect('DepartmentController');   
			
		}

	}
	public function EditDept($id){
		$data=$this->db->query("select * from department where id='$id' ");
		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('department/edit_department',array('dept'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Update($id){

		$title =$this->input->post('title',true);					
		$description=$this->input->post('description');						


		$this->db->query("update  department set title='$title',description='$description' where id='$id' "); 
		UserActivity('Department: Update');
		redirect('DepartmentController'); 
	}
	public function DeleteDept($id){
		$data=$this->db->query("delete  from department where id='$id' ");
		UserActivity('Department: Delete');
		redirect('DepartmentController'); 
	}



}
