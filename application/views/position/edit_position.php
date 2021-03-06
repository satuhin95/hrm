
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Position</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Position</li>
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

         <?php echo form_open("PositionController/Update/{$position['id']}"); ?>
         <div class="card-body">
          <div class="form-group">
            <label>Position Name</label>
            <input type="text" class="form-control" name="position_name" value="<?php echo $position['position_name'] ?>">
          </div>
          <div class="form-group">
            <label>Department Name</label>
            <select class="form-control" name="dept_id">
              <?php foreach ($dept as  $row) { ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['title'] ?></option>
              <?php }?>
            </select>
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