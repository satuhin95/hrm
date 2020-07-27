<?php 
  $CI=& get_instance();
  $user_id=$CI->session->userdata('ses_id');
  $result=$CI->db->query("select id,name,image,position,email,contact from employees where user_id='$user_id'");
  $emp=$result->row_array();


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url()?>image/employee/<?php echo $emp['image'] ?>"
                       alt="<?php echo $emp['name']; ?>">
                </div>

                <h3 class="profile-username text-center"><?php echo $emp['name']; ?></h3>

                <p class="text-muted text-center"><?php echo $emp['position']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email:</b> <a class="float-right"><?php echo $emp['email']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact:</b> <a class="float-right"><?php echo $emp['contact']; ?></a>
                  </li>
      
                </ul>

                <?php echo anchor("EmployeeController/EditEmp/{$emp['id']}","Update Profile",array('class'=>'btn btn-primary btn-block')); ?>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
 
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>