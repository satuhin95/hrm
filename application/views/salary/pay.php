
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Salary</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Salary</li>
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
         <div class="card-header">
                <h2 class="card-title">Employee :<?php echo $emp['name']; ?> </h2>
                <span class="float-right"><?php echo date('F - Y'); ?></span>
              </div>
        <div class="card-body">
         <?php echo validation_errors(); ?>

         <?php echo form_open('SalaryController/PayStore'); ?>
         <div class="card-body">
           <div class="row">
            <?php foreach ($pay as  $row) { ?>
            <div class="col-sm-6">
               <div class="form-group">
                <label><?php echo $row['headname'] ?> </label>
                <h3><?php echo $row['amount'] ?></h3>
              </div>
            </div>
          <?php }?>
          <div class="col-sm-6">
            <div class="form-group">
              <label> Total amount </label>
                <h3><?php echo $am['total'] - $tax['tax'] ?></h3>
                <input type="hidden" name="amount" value="<?php echo $am['total'] - $tax['tax'] ?>">
                <input type="hidden" name="emp_id" value="<?php echo $am['emp_id'];  ?>">
               
            </div>
          </div>
            <div class="col-sm-12">
            <div class="form-group">
              <label> Remark </label>
                <input type="type" name="remark" class="form-control">
            </div>
          </div>
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