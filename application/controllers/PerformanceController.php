<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerformanceController extends CI_Controller {

	public function index(){
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		$data=$this->db->query("select p.id,p.emp_id,p.factor_id , p.rateing,p.remark,e.name,f.name factname from performance p ,performance_factor f,employees e where p.emp_id=e.id and p.factor_id=f.id  ");
		$result=$data->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('performance/performance',array('performance'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Create(){
		$data=$this->db->query("select id,name from employees");
		$data1=$this->db->query("select * from performance_factor  ");
		$result=$data->result_array();
		$result1=$data1->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('performance/create_performance',array('fact'=>$result1,'emp'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Store(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emp_id', 'Employee ID', 'required');
		$this->form_validation->set_rules('factor_id', 'Factor Id', 'required');
		$this->form_validation->set_rules('rateing', 'Rateing', 'required');
		$this->form_validation->set_rules('remark', 'Remark', 'required');

		if ($this->form_validation->run() == FALSE)
		{					

			$data=$this->db->query("select id,name from employees");
			$data1=$this->db->query("select * from performance_factor  ");
			$result=$data->result_array();
			$result1=$data1->result_array();
			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('performance/create_performance',array('fact'=>$result1,'emp'=>$result));
			$this->load->view('layout/footer.php');
			
		}
		else{
			$emp_id =$this->input->post('emp_id',true);					
			$factor_id =$this->input->post('factor_id');					
			$rateing =$this->input->post('rateing');					
			$remark =$this->input->post('remark');					
			$this->db->query("insert into performance (emp_id,factor_id,rateing,remark) values('$emp_id','$factor_id','$rateing','$remark')"); 
			UserActivity(' Performance : Create');
			redirect('PerformanceController');   
		}

	}
	public function Delete($id){
		$data=$this->db->query("delete  from performance where id='$id' ");
		UserActivity(' Performance : Delete');
		redirect('PerformanceController');  
	}
	public function Edit($id){
		$data=$this->db->query("select id,emp_id,factor_id,rateing ,remark from performance where id='$id'");

		$data1=$this->db->query("select * from performance_factor  ");
		$result=$data->row_array();

		$result1=$data1->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('performance/edit_performance',array('fact'=>$result1,'parformance'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Update($id){

		$factor_id =$this->input->post('factor_id');					
		$rateing =$this->input->post('rateing');					
		$remark =$this->input->post('remark');					
		$this->db->query("update  performance set factor_id='$factor_id',rateing='$rateing',remark='$remark' where id='$id' "); 
		UserActivity(' Performance : Update');
		redirect('PerformanceController'); 
	}





	public function Factor()

	{
		$data=$this->db->query("select id,name from performance_factor  ");
		$result=$data->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('performance/performance_factor',array('fact'=>$result));
		$this->load->view('layout/footer.php');

		
	}
	public function CreateFactor(){
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('performance/factor_create');
		$this->load->view('layout/footer.php');

	}
	public function FactorStore(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{					

			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('performance/factor_create');
			$this->load->view('layout/footer.php');
			
		}
		else{
			$name =$this->input->post('name',true);					
			$this->db->query("insert into performance_factor (name) values('$name')"); 
			UserActivity(' Performance Factor : Create');
			redirect('PerformanceController/Factor');   
		}

	}
	public function FactorEdit($id){
		$data=$this->db->query("select * from performance_factor where id='$id' ");
		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('performance/factor_edit',array('factor'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function FactorUpdate($id){

		$name =$this->input->post('name',true);					
		
		$this->db->query("update  performance_factor set name='$name' where id='$id' "); 
		UserActivity(' Performance Factor : Update');
		redirect('PerformanceController/Factor');   
	}
	public function FactorDelete($id){
		$data=$this->db->query("delete  from performance_factor where id='$id' ");
		UserActivity(' Performance Factor : Delete');
		redirect('PerformanceController/Factor');  
	}



}
