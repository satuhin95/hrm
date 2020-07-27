<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Activity</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Activity</li>
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
                <h3 class="card-title">Users Activity</h3>

                <div class="card-tools">

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User </th>
                      <th>IP</th>
                      <th>Time</th>
                      <th>Date</th>
                      <th>Activity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($activity as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['username']?></td>
                      <td><?php echo $row['ip']?></td>
                      <td><?php echo $row['Time']?></td>
                      <td><?php echo $row['Date']?></td>
                      <td><?php echo $row['activity']?></td>
                      <td>
                        <?php echo anchor("UserController/DeleteActivity/{$row['id']}","Delete",array('class'=>'btn btn-danger')) ?>
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