
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Employee</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Employee</li>
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

         <?php echo form_open_multipart('EmployeeController/Store'); ?>
         <div class="card-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
          </div>
           <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="contact" value="<?php echo set_value('contact'); ?>">
          </div>
            <div class="form-group">
            <label>Department</label>
            <select name="dept_id" class="form-control">
              <?php foreach ($dept as $row ) { ?>
                <option><?php echo $row['title'] ?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Position</label>
            <select name="position" class="form-control">
              <?php foreach ($position as $row ) { ?>
                <option value="<?php echo $row['position_name'] ?>"><?php echo $row['position_name'] ?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Joining Date</label>
            <input type="date" class="form-control" name="joining_date" value="<?php echo set_value('joining_date'); ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">
          </div>
          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" value="<?php echo set_value('image'); ?>">
          </div>
        </div>
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