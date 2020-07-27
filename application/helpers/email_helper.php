<?php 


function sendEmail($to='',$subject='',$body='',$attachment=''){




	 $CI =& get_instance();        
    //$CI->load->helper('path'); 
    // Configure email library
    $config = array();
    $config['useragent']            = "CodeIgniter";
    //$config['mailpath']           = "\"G:\webserver\sendmail\sendmail.exe\" -t"; // or "/usr/sbin/sendmail"
    $config['protocol']             = "smtp";
    $config['smtp_host']            = "smtp.gmail.com";
 	$config['smtp_port'] 			= 465; 
	$config['smtp_timeout'] 		= 5;
	$config['smtp_user'] 		= 'saifcm26@gmail.com';
	$config['smtp_pass'] 		= 'pkhhpqnvvmzdejmt';

  $config['smtp_from_name'] 		= 'Saif';	
	$config['smtp_crypto']          ="ssl";
	$config['wordwrap']             = TRUE;
	$config['wrapchars']            = 76;	
	$config['mailtype']             = 'html';
	$config['charset']              = 'iso-8859-1';
	$config['validate']             = FALSE;
	$config['priority']             = 3;
	$config['crlf']                 = "\r\n";
	$config['newline']              = "\r\n";
	$config['bcc_batch_mode']       = FALSE;
	$config['bcc_batch_size'] = 200;


$CI->load->library('email');
    $CI->email->initialize($config); 
	
    $CI->email->set_newline("\r\n");
    $CI->email->set_crlf("\r\n");
	
    if($attachment != '')
    {
        $CI->email->attach(base_url()."image/" .$attachment);
    }

    $CI->email->from('saifcm26@gmail.com','Saifuddin');    
    $CI->email->to('<'.$to.'>');    
    $CI->email->subject($subject);
    $CI->email->message($body);    


    if($CI->email->send()){
        //$CI->session->set_flashdata('msg', 'Email sent correctly');
		echo "Mail have been sent successfully";
    }else{
        show_error($CI->email->print_debugger());
        
    }










}