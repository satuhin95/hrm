
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

         <?php echo form_open_multipart("EmployeeController/Update/{$emp['id']}"); ?>
         <div class="card-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $emp['name']; ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $emp['email']; ?>">
          </div>
           <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="contact" value="<?php echo $emp['contact']; ?>">
          </div>
          <div class="form-group">
            <label>Position</label>
            <input type="text" class="form-control" name="position" value="<?php echo $emp['position']; ?>">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" >
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
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