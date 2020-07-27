<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryController extends CI_Controller {

	public function index(){
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
	}

	public function Config()

	{
		
		$data= $this->db->query('select id,name from employees');
		$result=$data->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('salary/salary_config',array('emp'=>$result));
		$this->load->view('layout/footer.php');
		
	}

	public function ViewConfig($id){
		$data1=$this->db->query("select c.id,c.emp_id,c.head_id,c.amount taka ,h.name headname ,h.type,h.id hid from emp_salary_config c ,payroll_head h where  c.emp_id='$id' and c.head_id=h.id   ");
		$result1=$data1->result_array();

		$data= $this->db->query("select id,name from employees where id='$id' ");
		$result=$data->row_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('salary/view_config',array('emp'=>$result,'config'=>$result1));
		$this->load->view('layout/footer.php');
	}
	public function ConfigCreate(){
		$data=$this->db->query("select id,name from payroll_head");
		$data1=$this->db->query("select id,name from employees");

		$result=$data->result_array();
		$result1=$data1->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('salary/create_salary_config',array('head'=>$result,'emp'=>$result1));
		$this->load->view('layout/footer.php');
	}
	public function ConfigStore(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('head_id', 'Head Id', 'required');
		$this->form_validation->set_rules('emp_id', 'Employee Id', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if ($this->form_validation->run() == FALSE)
		{					
			$data=$this->db->query("select id,name from payroll_head");
			$data1=$this->db->query("select id,name from employees");

			$result=$data->result_array();
			$result1=$data1->result_array();

			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('salary/create_salary_config',array('head'=>$result,'emp'=>$result1));
			$this->load->view('layout/footer.php');
			
		}
		else{
			$head_id =$this->input->post('head_id',true);					
			$emp_id =$this->input->post('emp_id');					
			$amount =$this->input->post('amount');					

			$this->db->query("insert into emp_salary_config(head_id,emp_id,amount)values('$head_id','$emp_id','$amount')"); 

			UserActivity(' Selery Config : Insert');
			redirect('SalaryController/Config');   
			
		}
	}
	public function DeleteConfig($id){
		$data=$this->db->query("delete  from emp_salary_config where id='$id' ");
		redirect('SalaryController/Config');  
		UserActivity(' Selery Config : Delete');
	}

	public function Pay($id){
		
		$data = $this->db->query("select id ,name from employees where id='$id'");
		$result=$data->row_array();
		$data1 = $this->db->query("select s.emp_id,s.head_id,s.amount,p.name headname ,p.type from emp_salary_config s ,payroll_head p where s.emp_id='$id' and s.head_id=p.id");
		$am = $this->db->query("select s.emp_id,s.head_id,sum(s.amount) total ,p.type from emp_salary_config s ,payroll_head p where s.emp_id='$id' and s.head_id=p.id and p.type=1");
		$tax = $this->db->query("select s.emp_id,s.head_id,sum(s.amount) tax ,p.type from emp_salary_config s ,payroll_head p where s.emp_id='$id' and s.head_id=p.id and p.type=2");

		$result2=$am->row_array();
		$result3=$tax->row_array();
		$result1=$data1->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('salary/pay',array('emp'=>$result,'pay'=>$result1,'am'=>$result2,'tax'=>$result3));
		$this->load->view('layout/footer.php');

		
	}

	public function PayStore(){

		$emp_id =$this->input->post('emp_id',true);					
		$remark =$this->input->post('remark');					
		$amount =$this->input->post('amount');	
		$admin_id = $this->session->userdata('ses_id');
		$payment_date = date('Y-m-d');
		$bill_date = date('Y-m-d');

		$this->db->query("insert into salary_trans (emp_id,remark,amount,admin_id,payment_date,bill_date) values('$emp_id','$remark','$amount','$admin_id','$payment_date','$bill_date') ");

		UserActivity(' Selery  : Pay');
		redirect('SalaryController/View'); 
	}

	public function SalaryManage($id){

		// $data= $this->db->query("select s.id,s.emp_id,s.head_id, s.amount ,p.name  from emp_salary_config s ,payroll_head p where s.emp_id='$id' and s.head_id=p.id  ");
		$data = $this->db->query("select c.id,c.emp_id,e.name empname from emp_salary_config c, employees e where c.emp_id='$id' and c.emp_id=e.id ");

		$result = $data->result_array();
		echo "<pre>";
		print_r($result);

		// $this->load->view('layout/header.php');
		// $this->load->view('layout/navbar.php');
		// $this->load->view('layout/main_sidebar.php');
		// $this->load->view('salary/manage_salary');
		// $this->load->view('layout/footer.php');
	}























	public function View(){
		$data=$this->db->query("select s.id,s.emp_id,s.amount,s.admin_id,s.head_id,s.payment_date,s.bill_date ,u.username,e.name from salary_trans s ,employees e ,users u where s.emp_id=e.id and s.admin_id=u.id ");

		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('salary/view_salary',array('salary'=>$result));
		$this->load->view('layout/footer.php');
	}
	


}
