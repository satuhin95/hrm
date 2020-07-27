<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Playroll Head</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Playroll Head</li>
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
                <h3 class="card-title">Playroll Head List</h3>

                <div class="card-tools">
                  <button class="btn btn-success text-lignt"><a href="PlayrollController/Create">Add New</a></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($play as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['type']?></td>
                      <td>
                        <a href="PlayrollController/Edit/<?php echo $row['id']?>" class="btn btn-info">Edit</a>
                        <a href="PlayrollController/Delete/<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
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