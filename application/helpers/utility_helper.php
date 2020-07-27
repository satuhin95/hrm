<?php

function UserActivity($activity){

    $CI=& get_instance();

    $user_id= $CI->session->userdata('ses_id');

    
    $session_id=session_id();
    $browser=$CI->input->user_agent();
    $ip=$_SERVER['REMOTE_ADDR'];

    date_default_timezone_set("Asia/Dhaka");

    $CI->db->query("insert into activity_log(user_id,activity,session_id,activity_datetime,ip,browser)values('$user_id','$activity','$session_id',now(),'$ip','$browser')");


}
//SELECT u.username,al.ip,date(al.activity_datetime) Date,time(al.activity_datetime),al.activity FROM `activity_log` al, users u where u.id=al.user_id and date(activity_datetime)='2020-07-08'
;

//SELECT u.username,al.ip,DATE_FORMAT(al.activity_datetime,'%d-%m-%Y') Date,time(al.activity_datetime) Time,al.activity FROM `activity_log` al, users u where u.id=al.user_id and date(activity_datetime)='2020-07-08'