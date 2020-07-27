<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LeaveController extends CI_Controller {

	public function Category()

	{
		if (empty($this->session->userdata('ses_id')))
		{
			redirect('LoginController');
		}
		$data=$this->db->query("select * from leave_category");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/leave_category',array('cat'=>$result));
		$this->load->view('layout/footer.php');
		
	}
	public function CategoryCreate(){
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/create_category');
		$this->load->view('layout/footer.php');
	}

	public function CategoryStore(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{					
			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('leave/create_category');
			$this->load->view('layout/footer.php');
			
		}
		else{
			$name =$this->input->post('name',true);					

			$this->db->query("insert into leave_category(name)values('$name')"); 
			UserActivity('Leave Category : Create');
			redirect('LeaveController/Category');   
			
		}
	}
	public function EditCat($id){
		$data=$this->db->query("select * from leave_category where id='$id' ");
		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/edit_category',array('cat'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function UpdateCategory($id){
		$name =$this->input->post('name',true);					

		$this->db->query("update  leave_category set name='$name' where id='$id' "); 
		UserActivity('Leave Category : Update');
		redirect('LeaveController/Category'); 
	}
	public function DeleteCat($id){
		$data=$this->db->query("delete  from leave_category where id='$id' ");
		UserActivity('Leave Category : Delete');

		redirect('LeaveController/Category'); 
	}



	// reason 
	public function ReasonCreate(){
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/create_reason');
		$this->load->view('layout/footer.php');
	}
	public function Reason(){
		$data=$this->db->query("select * from leave_reason");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/leave_reason',array('reason'=>$result));
		$this->load->view('layout/footer.php');
	}

	public function ReasonStore(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{					
			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('leave/create_reason');
			$this->load->view('layout/footer.php');
			
		}
		else{
			$name =$this->input->post('name',true);					

			$this->db->query("insert into leave_reason(name)values('$name')"); 
			UserActivity('Leave Reason : Create');

			redirect('LeaveController/Reason');   
			
		}
	}

	public function EditReason($id){
		$data=$this->db->query("select id,name from leave_reason where id='$id' ");
		$result=$data->row_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/edit_reason',array('reason'=>$result));
		$this->load->view('layout/footer.php');
	}


	public function UpdateReason($id){ 

		$name =$this->input->post('name',true);					
		$this->db->query("update  leave_reason set name='$name' where id='$id' ");
		UserActivity('Leave Reason : Update'); 
		redirect('LeaveController/Reason'); 
	}
	public function DeleteReason($id){
		$data=$this->db->query("delete  from leave_reason where id='$id' ");
		UserActivity('Leave Reason : Delete');
		redirect('LeaveController/Reason'); 
	}

// Config
	public function Config()

	{

		$data= $this->db->query('select id,name from employees');
		$result=$data->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/leave_config',array('emp'=>$result));
		$this->load->view('layout/footer.php');
		
	}

	public function ViewConfig($id){
		$data1= $this->db->query("select id,name from employees where  id='$id' ");
		$result1 = $data1->row_array();
		$data = $this->db->query("select l.id,l.emp_id, l.cat_id,l.days ,c.name catname from leave_config l ,leave_category c where l.emp_id='$id' and l.cat_id=c.id");
		$result=$data->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/view_config',array('emp'=>$result1,'config'=>$result));
		$this->load->view('layout/footer.php');

		
	}
	public function ConfigCreate(){
		$data=$this->db->query("select id,name from leave_category");
		$data1=$this->db->query("select id,name from employees");

		$result=$data->result_array();
		$result1=$data1->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/create_config',array('cat'=>$result,'emp'=>$result1));
		$this->load->view('layout/footer.php');
	}

	public function ConfigStore(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cat_id', 'Category Id', 'required');
		$this->form_validation->set_rules('emp_id', 'Employee Id', 'required');
		$this->form_validation->set_rules('days', 'Days', 'required');

		if ($this->form_validation->run() == FALSE)
		{					
			$data=$this->db->query("select id,name from leave_category");
			$data1=$this->db->query("select id,name from employees");

			$result=$data->result_array();
			$result1=$data1->result_array();

			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('leave/create_config',array('cat'=>$result,'emp'=>$result1));
			$this->load->view('layout/footer.php');
			
		}
		else{
			$cat_id =$this->input->post('cat_id',true);					
			$emp_id =$this->input->post('emp_id');					
			$days =$this->input->post('days');					

			$this->db->query("insert into leave_config(cat_id,emp_id,days)values('$cat_id','$emp_id','$days')"); 
			UserActivity('Leave Config : Create');
			redirect('LeaveController/Config');   
			
		}
	}

	public function DeleteConfig($id){
		$data=$this->db->query("delete  from leave_config where id='$id' ");
		UserActivity('Leave Config : Delete');
		redirect('LeaveController/Config'); 
	}

	public function Application(){
		$data=$this->db->query("select l.id,l.leave_cat_id ,l.emp_id ,l.start_date ,l.end_date ,l.reason_id ,l.emp_remark ,l.leave_status_id ,r.name rname,e.name , c.name cname from leave_application l,leave_reason r,leave_category c ,employees e where l.leave_cat_id=c.id and l.emp_id=e.id and l.reason_id = r.id and  	leave_status_id =0");
		$result=$data->result_array();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/leave_application',array('apply'=>$result));
		$this->load->view('layout/footer.php');
	}
	public function ApplicationApply(){
		$data=$this->db->query("select id,name from leave_category");
		$data1=$this->db->query("select id,name from employees");
		$data2=$this->db->query("select id,name from leave_reason");

		$result=$data->result_array();
		$result1=$data1->result_array();
		$result2=$data2->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/apply_leave_application',array('cat'=>$result,'emp'=>$result1,'reason'=>$result2));
		$this->load->view('layout/footer.php');
	}

	public function ApplicationStore(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cat_id', 'Category Id', 'required');
		$this->form_validation->set_rules('emp_id', 'Employee Id', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');
		$this->form_validation->set_rules('reason_id', 'Reason', 'required');
		$this->form_validation->set_rules('emp_remark', 'Remark', 'required');

		if ($this->form_validation->run() == FALSE)
		{					
			$data=$this->db->query("select id,name from leave_category");
			$data1=$this->db->query("select id,name from employees");
			$data2=$this->db->query("select id,name from leave_reason");

			$result=$data->result_array();
			$result1=$data1->result_array();
			$result2=$data2->result_array();

			$this->load->view('layout/header.php');
			$this->load->view('layout/navbar.php');
			$this->load->view('layout/main_sidebar.php');
			$this->load->view('leave/apply_leave_application',array('cat'=>$result,'emp'=>$result1,'reason'=>$result2));
			$this->load->view('layout/footer.php');
			
		}
		else{
			$cat_id =$this->input->post('cat_id',true);					
			$emp_id =$this->input->post('emp_id');					
			$start_date =$this->input->post('start_date');					
			$end_date =$this->input->post('end_date');					
			$reason_id =$this->input->post('reason_id');					
			$emp_remark =$this->input->post('emp_remark');		



			$this->db->query("insert into leave_application (leave_cat_id,emp_id, start_date, end_date,reason_id,emp_remark) values('$cat_id','$emp_id','$start_date','$end_date','$reason_id','$emp_remark')"); 
			UserActivity('Leave  : Apply');
			redirect('LeaveController/Application');   
			
		}
	}
	public function DeleteApplication($id){
		$data=$this->db->query("delete  from leave_application where id='$id' ");
		UserActivity('Leave  Apply: Delete');
		redirect('LeaveController/Application'); 
	}

	public function EditApplication($id){
		$data=$this->db->query("select id,name from leave_category");
		$data1=$this->db->query("select id,name from employees");
		$data2=$this->db->query("select id,name from leave_reason");
		$data3=$this->db->query("select l.id,l.leave_cat_id ,l.emp_id,l.start_date,l.end_date,l.reason_id, 	emp_remark  from leave_application l");

		$result=$data->result_array();
		$result1=$data1->result_array();
		$result2=$data2->result_array();
		$result3=$data3->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/edit_leave_application',array('cat'=>$result,'emp'=>$result1,'reason'=>$result2,'app'=>$result3));
		$this->load->view('layout/footer.php');
	}

	public function ApplicationUpdate($id){
		$cat_id =$this->input->post('cat_id',true);					
		$emp_id =$this->input->post('emp_id');					
		$start_date =$this->input->post('start_date');					
		$end_date =$this->input->post('end_date');					
		$reason_id =$this->input->post('reason_id');					
		$emp_remark =$this->input->post('emp_remark');		



		$this->db->query("update  leave_application set leave_cat_id='$cat_id',emp_id='$emp_id', start_date='$start_date', end_date='$end_date',reason_id='$reason_id',emp_remark='$emp_remark' where id='$id'"); 
		UserActivity('Leave  Apply: Edit');
		redirect('LeaveController/Application');  
	}

	public function ManageApplication($id){
	$leave=	$this->db->query("select l.id,l.emp_id from leave_application l where id='$id' ");

		$data=$this->db->query("select l.id,l.leave_cat_id ,l.emp_id,l.start_date,l.end_date,l.reason_id ,l.emp_remark,e.name ,r.name rname,c.name cname from leave_application l,leave_category c,employees e,leave_reason r where l.id='$id' and l.emp_id=e.id and l.reason_id=r.id and l.leave_cat_id=c.id");

		$result=$data->row_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/manage_application',array('apply'=>$result));
		$this->load->view('layout/footer.php');
	}

	public function AcceptApplication($id){
		$data=$this->db->query("select id,leave_cat_id,emp_id,reason_id  from leave_application  where id='$id' ");
		$result=$data->row_array();


		$cat=$result['leave_cat_id'];
		$emp=$result['emp_id'];
		$reason=$result['reason_id'];



		$admin_id = $this->session->userdata('ses_id');;

		$cat_id =$cat;				
		$emp_id =$emp;					
		$start_date =$this->input->post('start_date');					
		$end_date =$this->input->post('end_date');					
		$reason_id =$reason;				
		$emp_remark =$this->input->post('emp_remark');	
		$admin_remark =$this->input->post('admin_remark');
		$this->db->query("insert into emp_leave_trans (leave_cat_id,emp_id, from_date , to_date,reason_id,emp_remark,admin_remark,admin_id) values('$cat_id','$emp_id','$start_date','$end_date','$reason_id','$emp_remark','$admin_remark','$admin_id')"); 

		$this->db->query("update leave_application set leave_status_id=1 where id='$id' ");
		UserActivity('Leave  Apply: Accept');
		redirect('LeaveController/Application'); 	
	}

	public function ViewLeave(){

		$data=$this->db->query("select l.id,l.leave_cat_id ,l.emp_id,l.from_date,l.to_date,l.reason_id ,l.emp_remark,l.admin_remark, u.username, e.name ,r.name rname,c.name cname from emp_leave_trans l,leave_category c,employees e,leave_reason r,users u where  l.emp_id=e.id and l.reason_id=r.id and l.leave_cat_id=c.id and l.admin_id=u.id");
		$result=$data->result_array();

		
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/view_leave',array('leave'=>$result));
		$this->load->view('layout/footer.php');

   }
   public function ApplyForLeave(){
      $data=$this->db->query("select id,name from leave_category");
		$data2=$this->db->query("select id,name from leave_reason");

		$result=$data->result_array();
		$result2=$data2->result_array();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/main_sidebar.php');
		$this->load->view('leave/apply_for_leave',array('cat'=>$result,'reason'=>$result2));
		$this->load->view('layout/footer.php');
   }
   public function ApplyStore(){
      $this->load->library('form_validation');

		$this->form_validation->set_rules('cat_id', 'Category Id', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');
		$this->form_validation->set_rules('reason_id', 'Reason', 'required');
		$this->form_validation->set_rules('emp_remark', 'Remark', 'required');

		if ($this->form_validation->run() == FALSE)
		{					
         $data=$this->db->query("select id,name from leave_category");
         $data2=$this->db->query("select id,name from leave_reason");
   
         $result=$data->result_array();
         $result2=$data2->result_array();
   
         $this->load->view('layout/header.php');
         $this->load->view('layout/navbar.php');
         $this->load->view('layout/main_sidebar.php');
         $this->load->view('leave/apply_for_leave',array('cat'=>$result,'reason'=>$result2));
         $this->load->view('layout/footer.php');
			
		}
		else{
			$cat_id =$this->input->post('cat_id',true);					
			$emp_id =	$this->session->userdata('ses_id');			
			$start_date =$this->input->post('start_date');					
			$end_date =$this->input->post('end_date');					
			$reason_id =$this->input->post('reason_id');					
			$emp_remark =$this->input->post('emp_remark');		



			$this->db->query("insert into leave_application (leave_cat_id,emp_id, start_date, end_date,reason_id,emp_remark) values('$cat_id','$emp_id','$start_date','$end_date','$reason_id','$emp_remark')"); 
			UserActivity('Leave  : Apply');
			 
			
		}
   }



}
