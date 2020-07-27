<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttendanceController extends CI_Controller {

	public function index(){
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		
		$data=$this->db->query("select a.id,a.emp_id, a.type ,a.in_time , a.out_time , e.name from attendance_trans a , employees e where a.emp_id=e.id");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/view_attandance',array('attan'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function Create(){
		$data=$this->db->query("select a.id,a.emp_id ,a.in_time , a.out_time , e.name from emp_attendance_config a , employees e where a.emp_id=e.id");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/create_attandance',array('attan'=>$result));
		$this->load->view('layout/footer.php');
	}


// config 
	public function Config()

	{
		$data=$this->db->query("select a.id,a.emp_id, a.has_ot ,a.in_time , a.out_time , a.week_day, e.name from emp_attendance_config a , employees e where a.emp_id=e.id");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/attandance_config',array('config'=>$result));
		$this->load->view('layout/footer.php');
		
	}
	public function ConfigCreate(){
		$data=$this->db->query("select id,name from employees");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/create_attandance_config',array('emp'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function ConfigStore(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emp_id', 'Employee ID', 'required');
		$this->form_validation->set_rules('in_time', 'In Time', 'required');
		$this->form_validation->set_rules('out_time', 'Out Time', 'required');
		$this->form_validation->set_rules('week_day', 'Week Day', 'required');

		if ($this->form_validation->run() == FALSE)
		{					

			$data=$this->db->query("select id,name from employees");
			$result=$data->result_array();

			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('attendance/create_attandance_config',array('emp'=>$result));
			$this->load->view('layout/footer.php');
			
		}
		else{

			$emp_id =$this->input->post('emp_id',true);										
			$in_time =$this->input->post('in_time');					
			$out_time =$this->input->post('out_time');					
			$week_day =$this->input->post('week_day');



			// $start = strtotime($in_time); 

			// $end = strtotime($out_time); 

			// $totaltime = ($end - $start)  ; 

			// $hours = intval($totaltime / 3600);   
			// $seconds_remain = ($totaltime - ($hours * 3600)); 

			// $minutes = intval($seconds_remain / 60);   
			// $seconds = ($seconds_remain - ($minutes * 60)); 

			// echo "$hours:$minutes:$seconds";
			

			


			$has_ot =$this->input->post('has_ot');

			$this->db->query("insert into emp_attendance_config (emp_id, has_ot, in_time, out_time, week_day) values('$emp_id','$has_ot','$in_time','$out_time','$week_day')"); 
			redirect('AttendanceController/Config');   
		}

	}
	public function DeleteConfig($id){
		$data=$this->db->query("delete  from emp_attendance_config where id='$id' ");
		redirect('AttendanceController/Config');      
	}

	public function AttendanceStore(){

		$today = date('Y-m-d');
		$result = $this->db->query("select * from attendance_trans where date='$today'");
		$data = $result->num_rows();
		if ($data) {
			redirect('AttendanceController/Create');
		}
		else{
		$emp_id =$this->input->post('emp_id',true);										
		$in_time =$this->input->post('in_time');					
		$out_time =$this->input->post('out_time');					
		$attr =$this->input->post('attr');


		$date= date('Y-m-d');

			foreach ($attr as $key =>  $value) {
				$emp_id = $key;
				$type = $value;
				
				$this->db->query("insert into attendance_trans (emp_id, in_time, out_time, type,date) values('$emp_id','$in_time','$out_time','$type','$date')"); 
				
			}
			redirect('AttendanceController');
}
	}
	public function Edit($id){
		$data=$this->db->query("select a.id,a.emp_id ,a.in_time , a.out_time , e.name from attendance_trans a , employees e where a.id='$id' and a.emp_id=e.id ");
		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/edit_attandance',array('attan'=>$result));
		$this->load->view('layout/footer.php');
	}

	public function AttendanceUpdate($id){
			$attr =$this->input->post('attr');

			$this->db->query("update attendance_trans set type='$attr' where id='$id'");
			redirect('AttendanceController');
	}

	public function Delete($id){
		$this->db->query("delete from attendance_trans  where id='$id'");
			redirect('AttendanceController');
	}
	public function Today(){
		$day = date('Y-m-d');

		$data=$this->db->query("select a.id,a.emp_id, a.type ,a.in_time , a.out_time , e.name from attendance_trans a , employees e where a.emp_id=e.id and date='$day'");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/today_attandance',array('attan'=>$result));
		$this->load->view('layout/footer.php');
 }
 	public function Month(){
		$month = date('m',strtotime('Y-m-d'));

		$data=$this->db->query("select a.id,a.emp_id, a.type ,a.in_time , a.out_time , e.name from attendance_trans a , employees e where a.emp_id=e.id and date LIKE '%$month%'");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('attendance/today_attandance',array('attan'=>$result));
		$this->load->view('layout/footer.php');
 }
	


}
