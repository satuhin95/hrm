
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Department</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Department</li>
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

         <?php echo form_open('DepartmentController/Store'); ?>
         <div class="card-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo set_value('title'); ?>">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo set_value('description'); ?></textarea>
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