<?php $id= $users['id']?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
           	<?php echo form_open("UserController/UpdateUser/$id"); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $users['username']?>" >
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $users['email']?>" >
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                    	<?php foreach($role as $row){ ?>   
                    		<option value="<?php echo $row['id'] ?>" <?php if ($users['role_id']==$row['id']) { echo "selected"; }?>><?php echo $row['name'] ?></option>
                    	<?php }?>
                    </select>
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