
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Apply Application</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Apply Application</li>
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
         <?php echo form_open("LeaveController/ApplicationUpdate/{$app['id']}"); ?>
         <div class="card-body">
           <div class="form-group">
            <label>Category ID</label>
            <select name="cat_id" class="form-control">
              <?php foreach ($cat as $row) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Employee ID</label>
            <select name="emp_id" class="form-control">
              <?php foreach ($emp as $row) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Start Date</label>
            <input type="date" class="form-control" name="start_date" >
          </div>
          <div class="form-group">
            <label>End Date</label>
            <input type="date" class="form-control" name="end_date" >
          </div>
             <div class="form-group">
            <label>Reason ID</label>
            <select name="reason_id" class="form-control">
              <?php foreach ($reason as $row) { ?>

                <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Employee Remark</label>
            <textarea class="form-control" name="emp_remark"><?php echo $app['emp_remark'] ?></textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>
</div>