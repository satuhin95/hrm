<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PositionController extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		
		
		$data=$this->db->query("select p.id,p.position_name,d.title  from position p ,department d where p.dept_id=d.id ");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('position/position',array('position'=>$result));
		$this->load->view('layout/footer.php');

		
	}
	public function Create(){
		$data=$this->db->query("select * from department");

		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('position/create_position',array('dept'=>$result));
		$this->load->view('layout/footer.php');

	}
	public function Store(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('position_name', 'Position Name', 'trim|required');
		$this->form_validation->set_rules('dept_id', 'Department Name', 'required');

		if ($this->form_validation->run() == FALSE)
		{					
			$data=$this->db->query("select * from department");

			$result=$data->result_array();

			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('position/create_position',array('dept'=>$result));
			$this->load->view('layout/footer.php');
			
		}
		else{
			$position_name =$this->input->post('position_name',true);					
			$dept_id=$this->input->post('dept_id');						


			$this->db->query("insert into position (position_name,dept_id) values('$position_name','$dept_id')"); 
			UserActivity(' Position : Create');
			redirect('PositionController');   
			
		}

	}
	public function Edit($id){
		$data1=$this->db->query("select * from department  ");
		$data=$this->db->query("select * from position where id='$id' ");
		$result=$data->row_array();
		$result1=$data1->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('position/edit_position',array('dept'=>$result1,'position'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Update($id){

		$position_name =$this->input->post('position_name',true);					
		$dept_id=$this->input->post('dept_id');						


		$this->db->query("update  position set position_name='$position_name',dept_id='$dept_id' where id='$id' "); 
		UserActivity(' Position : Update');
		redirect('PositionController');    
	}
	public function Delete($id){
		$data=$this->db->query("delete  from position where id='$id' ");
		UserActivity(' Position : Delete');
		redirect('PositionController');  
	}



}
