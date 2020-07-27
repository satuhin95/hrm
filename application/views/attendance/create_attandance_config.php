
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Config</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Config</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
   <div class="row">
     <div class="col-sm-8">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
         <?php echo validation_errors(); ?>

         <?php echo form_open('AttendanceController/ConfigStore'); ?>
         <div class="card-body">
             <div class="form-group">
            <label>Employee ID</label>
            <select name="emp_id" class="form-control">
              <?php foreach ($emp as $row) { ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php }?>
            </select>
          </div>
           <div class="form-group">
            <label>In Time</label>
            <input type="text" name="in_time" class="form-control">
          </div>
   
           <div class="form-group">
            <label>Out Time</label>
            <input type="text" name="out_time" class="form-control">
          </div>
           <div class="form-group">
            <label>Week Day</label>
            <input type="text" name="week_day" class="form-control">
          </div>
      
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card-footer-->
  </div>
</div>
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>