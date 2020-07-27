  <?php 
      $role= $this->session->userdata('ses_role');
      $id= $this->session->userdata('ses_id');
     $data= $this->db->query("SELECT * FROM `employees` WHERE `user_id`='$id'");
      $result=$data->row_array();
  ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
      <span class="brand-text font-weight-light">HRM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>image/employee/<?php echo $result['image'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ucwords($this->session->userdata('ses_username')); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <?php echo anchor("HomeController",'<i class="nav-icon fas fa-tachometer-alt"></i> <p>Dashboard</p>',array('class'=>'nav-link active')) ?>
          </li>
       <?php  
            if($role==1){ ?>
            <?php  include ('system_sidebar.php');?>
            <?php  include ('employee.php');?>
            <?php  include ('department.php');?>
            <?php  include ('position.php');?>
            <?php  include ('performance.php');?>
            <?php  include ('playroll.php');?>
            <?php  include ('attendance.php');?>
            <?php  include ('leave.php');?>
            <?php  include ('salary.php');?>
       
     <?php } ?>

        <li class="nav-item has-treeview">
         <?php echo anchor("LoginController/Logout"," Logout",array('class' => 'nav-link fas fa-sign-out-alt')); ?>
       </li>
     </ul>
   </nav>
   <!-- /.sidebar-menu -->
 </div>
 <!-- /.sidebar -->
</aside>