<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Leave Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Leave Application</li>
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
                <h3 class="card-title">Leave Application List</h3>

                <div class="card-tools">
                  <?php echo anchor("LeaveController/ApplicationApply",'<p> Add New</p>',array('class'=>'btn btn-success btn-sm')) ?>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category</th>
                      <th>Employee</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Reason</th>
                      <th>Leave status </th>
                      <th>Action</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($apply as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['cname']?></td>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['start_date']?></td>
                      <td><?php echo $row['end_date']?></td>
                      <td><?php echo $row['rname']?></td>
                      <td><?php 
                        if ($row['leave_status_id']==0) {
                          echo "<span class='badge badge-danger bg-warning' >Pending</span>";
                        }elseif ($row['leave_status_id']==1) {
                          echo "<span class='badge badge-danger bg-success' >Accept</span>";
                        }else{
                          echo "<span class='badge badge-danger bg-danger' >Ignor</span>";
                        }


                       ?></td>
                      <td>
                        <?php echo anchor("LeaveController/EditApplication/{$row['id']}","Edit",array('class'=>'btn btn-info')) ?>
                       
                        <?php echo anchor("LeaveController/DeleteApplication/{$row['id']}","Delete",array('class'=>'btn btn-danger')) ?>
                      </td>
                      <td>
                        <?php echo anchor("LeaveController/ManageApplication/{$row['id']}","Manage",array('class'=>'btn btn-primary')) ?>
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