<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()

	{
		if (!empty($this->session->userdata('ses_id')))
		{
			redirect('UserController');
		}
		
		$this->load->view('system/login.php');

		
	}
	public function Login(){
		$email = trim($this->input->post('email'));
		$password = $this->input->post('password');

		$user = $this->db->query("select id,username,role_id from users  where email='$email' and password='$password' and inactive=0  ");
		$data =$user->row_array();



		if (is_array($data)) {
			$this->session->set_userdata('ses_id',$data['id']);
			$this->session->set_userdata('ses_username',$data['username']);
         $this->session->set_userdata('ses_role',$data['role_id']);
         

			$this->UserActivity('Log In');

			sendEmail("saifcm26@gmail.com","Login Status","You have successfully logined in","");
			
			redirect('HomeController');
		}
		else{

			$this->load->view('system/login',array('error'=>'Invalid email or password'));
		}

	}
	public function LogOut(){
		$this->UserActivity('Logout');
		$this->session->unset_userdata('ses_id');
		$this->session->unset_userdata('ses_username');
		$this->session->unset_userdata('ses_role');

		
		redirect('LoginController');
	}


	  public function UserActivity($activity){

    $user_id= $this->session->userdata('ses_id');
    $session_id=session_id();
    $browser=$this->input->user_agent();
    $ip=$_SERVER['REMOTE_ADDR'];

    date_default_timezone_set("Asia/Dhaka");
    
    $this->db->query("insert into activity_log(user_id,activity,session_id,activity_datetime,ip,browser)values('$user_id','$activity','$session_id',now(),'$ip','$browser')");


  }

  public function ActiveAccount($code){

      //echo $code;

      $this->db->query("update users set inactive=0 where verify_code='$code'");      

      echo "Your account is active now.  Login <a href='".base_url()."'>Login</a>  ";


  }


















	// public function SendEmail(){


	// 	$config = Array(
	// 		'protocol'  => 'smtp',
	// 		'smtp_host' => 'ssl://smtp.googlemail.com',
	// 		'smtp_port' => '465',
	// 		'smtp_user' => 'intels.co@gmail.com',
	// 		'smtp_pass' => 'Howare43you@1243r43',
	// 		'mailtype'  => 'html',
	// 		'starttls'  => true,
	// 		'newline'   => "\r\n"
	// 	);

	// }

		// $this->load->library('email', $config);

	
  //     $this->email->from('intels.co@gmail.com', 'Mohammad Towhidul Islam');
  //     $this->email->to('isl.towhid1@gmail.com');
  //     $this->email->subject('Test email from CI and Gmail');
  //     $this->email->message('This is a test.');

	
  //     $result = $this->email->send();


}
