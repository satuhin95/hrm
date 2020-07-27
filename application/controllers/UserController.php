<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function index()

	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		$users = $this->db->query('select u.id,u.username,u.email,r.name from users u ,  role r where u.role_id=r.id');
	

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('system/signup_view.php',array('users'=>$users->result_array()));
		$this->load->view('layout/footer.php');
	}
	public function DeleteUser($id){
		$this->db->query("delete from users where id='$id'");
		UserActivity(' User : Delete');
		redirect('UserController');
	}

	public function EditUserView($id){
		$users = $this->db->query("select * from users  where id='$id'");
		$role = $this->db->query("select * from  role  ");
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');

		$this->load->view('system/edit_user',array('users'=>$users->row_array(),'role'=>$role->result_array()));
		$this->load->view('layout/footer.php');

	}
	public function UpdateUser($id){

		$username=$this->input->post('username',true);					
		$role_id=$this->input->post('role_id');											
		$email=$this->input->post('email');


		$this->db->query("update users  set username='$username',email='$email',role_id='$role_id' where id='$id'");
		UserActivity(' User : Update');			 
		redirect("UserController");			 


	}

	public function Create(){
		$role = $this->db->query("select * from  role ");
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('system/create_user.php',array('role'=>$role->result_array()));
		$this->load->view('layout/footer.php');
	}
	public function Store(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{					
			$role = $this->db->query("select * from  role  ");
			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');					
			$this->load->view('layout/main_sidebar.php');					 
			$this->load->view('system/create_user.php',array('role'=>$role->result_array()));
			$this->load->view('layout/footer.php');
			
			
		}
		else{
			$username=$this->input->post('username',true);					
			$role_id=$this->input->post('role_id');						
			$password=$this->input->post('password');										
			$email=$this->input->post('email');

			$errors=array();

			if(!preg_match("/^[a-zA-Z0-9]{2,}$/",$username)){ 
				array_push($errors,"Invalid username"); 					
			}
			if(!preg_match("/^[a-zA-Z]+[a-zA-Z0-9]+[@][a-zA-Z]{2,}[.][a-z]{2,3}$/",$email)){ 
				array_push($errors,"Invalid username"); 					
			}

					// if($password!=$passwordf){
					// 	array_push($errors,"Password did not match");
					// }

			if(count($errors)==0){


				$this->db->query("insert into users(username,email,password,role_id)values('$username','$email','$password','$role_id')"); 
				$code=md5($this->db->insert_id);

				 $domain=base_url();				 
				 
				 sendEmail("$email","Verify Email","To active your account click the following link:<br> 

				 <a href='$domain/LoginController/VerifyUser/$code'>Active Account</a>","big_fun.jpg");

				 UserActivity('Create User');

				redirect('UserController');   




			}else{

				echo $errors;

			}

			
		}

	}

	public function dashboard(){
		$this->load->view('dashboard/dashboard_view');
	}



		function VerifyEmail($user_id){

			$result=$this->db->query("select id,email,username from users where id='$user_id'");
            $user=$result->row_array();

			$code=md5($user_id);
			
			$html="Dear ".$user["username"].",<br><br>";
			$html.="To active your account click the following link<br>";
			$html.="<a href='".base_url()."index.php/LoginController/ActiveAccount/$code'>Active Account</a>";           
			sendEmail($user["email"],"Verify your account",$html,'');

		}



	public function Activity(){

		$data = $this->db->query("select u.username,al.id,al.ip,date(al.activity_datetime) Date,time(al.activity_datetime) Time,al.activity FROM activity_log  al, users u where u.id=al.user_id ");

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('system/activity_log.php',array('activity'=>$data->result_array()));
		$this->load->view('layout/footer.php');
	}

	public function DeleteActivity($id){
		$data=$this->db->query("delete  from activity_log where id='$id' ");
		redirect('UserController/Activity');  
	}

}
