
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Performance</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Performance</li>
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
         <?php echo form_open("PerformanceController/Update/{$parformance['id']}"); ?>
         <div class="card-body">
          <div class="form-group">
            <label>Factor ID</label>
           <select name="factor_id" class="form-control">
             <?php foreach ($fact as  $row) { ?>
             <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
           <?php }?>
           </select>
          </div>
          <div class="form-group">
            <label>Rateing</label>
           <select name="rateing" class="form-control">
             <option value="1">Good</option>
             <option value="2">Better</option>
             <option value="3">Best</option>
             <option value="4">Excellence </option>
           </select>
          </div>
          <div class="form-group">
            <label>Remark</label>
            <input type="text" name="remark" value="<?php echo $parformance['remark'] ?>" class="form-control">
          </div>
        </div>
        <!-- /.card-body -->
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