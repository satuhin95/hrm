
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>
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

         <?php echo form_open('UserController/Store'); ?>
         <div class="card-body">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">
          </div>
          <div class="form-group">
            <label>Role</label>
            <select name="role_id" class="form-control">
              <?php foreach($role as $row){ ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
              <?php } ?>
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