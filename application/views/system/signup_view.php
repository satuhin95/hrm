<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create User</li>
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
                <h3 class="card-title">Users List</h3>

                <div class="card-tools">
                  <button class="btn btn-success text-lignt"><a href="UserController/Create">Add User</a></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($users as $user){ ?>
                    <tr>
                      <td><?php echo $user['id']?></td>
                      <td><?php echo $user['username']?></td>
                      <td><?php echo $user['email']?></td>
                      <td><?php echo $user['name']?></td>
                      <td>
                        <a href="UserController/EditUserView/<?php echo $user['id']?>" class="btn btn-info">Edit</a>
                        <a href="UserController/DeleteUser/<?php echo $user['id']?>" class="btn btn-danger">Delete</a>
                        <a href="UserController/VerifyEmail/<?php echo $user['id']?>" class="btn btn-primary">Verify Email</a>
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