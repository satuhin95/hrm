<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Attendance Config</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Attendance Config</li>
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
        <h3 class="card-title">Attendance Config List</h3>

        <div class="card-tools">
         <?php echo anchor("AttendanceController/ConfigCreate",'<p> Add New</p>',array('class'=>'btn btn-success btn-sm')) ?>
       </div>
     </div>
     <!-- /.card-header -->
     <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Over Time</th>
            <th>In Time</th>
            <th>Out Time</th>
            <th>Week Day</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($config as $row){ ?>


            <?php
            $in=$row['in_time'];
            $out=$row['out_time'];
            $start = strtotime($in); 

            $end = strtotime($out); 

            $totaltime = ($end - $start)  ; 

            $hours = intval($totaltime / 3600);   
            $seconds_remain = ($totaltime - ($hours * 3600)); 

            $minutes = intval($seconds_remain / 60);   
            $seconds = ($seconds_remain - ($minutes * 60)); 

            echo "$hours:$minutes:$seconds"; 
            ?>
            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['has_ot']?></td>
              <td><?php echo $row['in_time']?> am</td>
              <td><?php echo $row['out_time']?> pm</td>
              <td><?php echo $row['week_day']?></td>
              <td>

                <?php echo anchor("AttendanceController/EditConfig/{$row['id']}","Edit",array('class'=>'btn btn-success')) ?>
                <?php echo anchor("AttendanceController/DeleteConfig/{$row['id']}","Delete",array('class'=>'btn btn-danger')) ?>
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