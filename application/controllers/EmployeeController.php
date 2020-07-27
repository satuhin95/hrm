<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	public function index()

	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		
		$data=$this->db->query("select id,name,email,contact,position from employees");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('employee/employee_view',array('emp'=>$result));
		$this->load->view('layout/footer.php');

		
	}
	public function EditEmp($id){
		$data=$this->db->query("select id,name,email,contact,position,image,joining_date from employees where id='$id'");
		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('employee/edit_employee',array('emp'=>$result));
		$this->load->view('layout/footer.php');

	}

	
	public function DeleteEmp($id){
		$this->db->query("delete from employees where id='$id'");
		UserActivity('Employees: Delete');
		redirect('EmployeeController');
	}
	public function Create(){
		$data = $this->db->query("select * from department ");
		$result=$data->result_array();
		$data1 = $this->db->query("select * from position ");
		$result1=$data1->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('employee/create_employe',array('dept'=>$result,'position'=>$result1));
		$this->load->view('layout/footer.php');
	}
	public function Store(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
		$this->form_validation->set_rules('dept_id', 'Department', 'required');
		$this->form_validation->set_rules('position', 'Position', 'trim|required');
		$this->form_validation->set_rules('joining_date', 'Joining Date', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');	


		if ($this->form_validation->run() == FALSE)
		{					

			$data = $this->db->query("select * from department ");
			$result=$data->result_array();
			$data1 = $this->db->query("select * from position ");
			$result1=$data1->result_array();
			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('employee/create_employe',array('dept'=>$result,'position'=>$result1));
			$this->load->view('layout/footer.php');

		}
		else{
			$image=$_FILES['image']['name'];
			$ext = pathinfo($image, PATHINFO_EXTENSION);
			$basename=basename($image,".".$ext);
			$id=123;
			$new = $basename."_".$id.".".$ext;

			$config['file_name'] = $new;
			$config['upload_path'] = './image/employee';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000;

			$this->load->library('upload',$config);

			if ( $this->upload->do_upload('image')){
				$name=$this->input->post('name',true);					
				$email=$this->input->post('email');						
				$contact=$this->input->post('contact');										
				$dept_id=$this->input->post('dept_id');
				$position=$this->input->post('position');
				$joining_date=$this->input->post('joining_date');
				$password=md5($this->input->post('password'));
				$image=$new;

				$this->db->query("insert into employees(name,email,contact,position,joining_date,password,image,dept_id)values('$name','$email','$contact','$position','$joining_date','$password','$image','$dept_id')"); 
				UserActivity('Employees: Insert');
				redirect('EmployeeController');  
			} 


		}

	}
	public function Update($id){
		$date=$this->db->query("select id,image from employees where id='$id'");
		$emp =$date->row_array();
      $img=$emp['image'];
     


		$image=$_FILES['image']['name'];
		$ext = pathinfo($image, PATHINFO_EXTENSION);
		$basename=basename($image,".".$ext);
		$new = $basename."_".$id.".".$ext;

		$config['file_name'] = $new;
		$config['upload_path'] = './image/employee';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1000;

		$this->load->library('upload',$config);


      $url = base_url()."image/employee/".$img;
    
	         //  unlink($url);
		
          if ( $this->upload->do_upload('image')){
			$name=$this->input->post('name',true);									
			$email=$this->input->post('email');						
			$contact=$this->input->post('contact');										
			$position=$this->input->post('position');
			$joining_date=$this->input->post('joining_date');
			$image=$new;

			$this->db->query("update employees set name='$name', email='$email', contact='$contact',position='$position' ,image='$image' where id='$id' "); 

			UserActivity('Employees: Update');
         redirect('EmployeeController/EditEmp'); 
          }
	
	}

	public function ViewEmp($id){
		$data=$this->db->query("select id,name,email,contact,position,image,joining_date from employees where id='$id'");
		$result=$data->row_array();
		

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('employee/view_employee',array('emp'=>$result));
		$this->load->view('layout/footer.php');
	}
}
