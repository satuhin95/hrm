<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Attendance </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Attendance </li>
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
        <h3 class="card-title">Attendance  List</h3>
          <span class="text-center"><h3>Date :<?php echo date('Y-m-d'); ?></h3> </span>
        <div class="card-tools">
         <?php echo anchor("AttendanceController/Create",'<p> Add New</p>',array('class'=>'btn btn-success btn-sm')) ?>
       </div>
     </div>
     <!-- /.card-header -->
     <div class="card-body table-responsive p-0">
      <?php echo validation_errors(); ?>

         <?php echo form_open('AttendanceController/AttendanceStore'); ?>
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>In Time</th>
            <th>Out Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($attan as $row){ ?>
            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['in_time']?>&nbsp;am</td>
              <td><?php echo $row['out_time']?>&nbsp;pm</td>
                  <input type="hidden" name="in_time" value="<?php echo $row['in_time']?>">
                  <input type="hidden" name="out_time" value="<?php echo $row['out_time']?>">
              <td>
                Present&nbsp;<input type="radio" name="attr[<?php echo $row['emp_id']?>]" value="1">&nbsp;Absent&nbsp;
                <input type="radio" name="attr[<?php echo $row['emp_id']?>]" value="2">

              </td>

            <?php }?>

          </tr>
        </tbody>

      </table>
      <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>