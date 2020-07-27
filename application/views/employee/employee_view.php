<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
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
                <h3 class="card-title">Employee List</h3>

                <div class="card-tools">
                  <button class="btn btn-success text-lignt"><a href="EmployeeController/Create">Add User</a></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Position</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($emp as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['contact']?></td>
                      <td><?php echo $row['position']?></td>
                      <td>
                        <?php echo anchor("EmployeeController/ViewEmp/{$row['id']}","View",array('class'=>'btn btn-primary')); ?>
                        <?php echo anchor("EmployeeController/EditEmp/{$row['id']}","Edit",array('class'=>'btn btn-success')); ?>
                        <?php echo anchor("EmployeeController/DeleteEmp/{$row['id']}","Delete",array('class'=>'btn btn-danger')); ?>
                      </td>
           
                    <?php }?>
                     
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>