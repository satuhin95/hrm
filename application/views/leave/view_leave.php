<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Leave </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Leave </li>
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
        <h3 class="card-title">Leave List </h3>

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
              <th>From Date</th>
              <th>To Date</th>
              <th>Days</th>
              <th>Reason</th>
              <th>Admin</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($leave as $row){ ?>
              <?php 
              $st = $row['from_date'];
              $en = $row['to_date'];
              $start = strtotime($st);
              $end = strtotime($en);

              $days_between = ceil(abs($end - $start) / 86400);
              ?>
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['cname']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['from_date']?></td>
                <td><?php echo $row['to_date']?></td>
                <td><?php echo $days_between; ?></td>
                <td><?php echo $row['rname']?></td>
                <td><?php echo $row['username']?></td>

              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>