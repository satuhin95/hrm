
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-8">
          <span class="text-center"><h1>Manage Application</h1></span>
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Application</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
   <div class="row">
   <div class="col-sm-2"></div>
     <div class="col-sm-8">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
         <?php echo validation_errors(); ?>
         <?php echo form_open("LeaveController/AcceptApplication/{$apply['id']}"); ?>
         <div class="card-body">
           <div class="form-group">
            <label>Category </label>
           <input type="text"  class="form-control" name="cat_id" value="<?php echo $apply['cname'] ?>">
          </div>
          <div class="form-group">
            <label>Employee </label>
            <input type="text" class="form-control" name="emp_id" value="<?php echo $apply['name'] ?>">
          </div>
          <div class="form-group">
            <label>Start Date</label>
            <input type="date" class="form-control" name="start_date"value="<?php echo $apply['start_date'] ?>" >
          </div>
          <div class="form-group">
            <label>End Date</label>
            <input type="date" class="form-control" name="end_date" value="<?php echo $apply['end_date'] ?>">
          </div>
             <div class="form-group">
            <label>Reason </label>
               <input type="text" class="form-control" name="reason_id" value="<?php echo $apply['rname'] ?>">
          </div>
          <div class="form-group">
            <label>Employee Remark</label>
            <textarea class="form-control" name="emp_remark"><?php echo $apply['emp_remark'] ?></textarea>
          </div>
          <div class="form-group">
            <label>Admin Remark</label>
            <textarea class="form-control" name="admin_remark"> </textarea>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Accept</button>
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