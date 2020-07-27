<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Salary </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Salary </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Salary </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                       <th>Employee </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($emp as  $row) { ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td>
                        <?php echo anchor("SalaryController/ViewConfig/{$row['id']}","View",array('class'=>'btn btn-success')) ?>
                        <?php echo anchor("SalaryController/Pay/{$row['id']}","Pay",array('class'=>'btn btn-primary')) ?>
                      </td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>