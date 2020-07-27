<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Salary Config</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Salary Config</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

       <div class="card">
              <div class="card-header">
                <h2 class="card-title">Employee :<?php echo $emp['name']; ?> </h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Head </th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($config as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['headname']?></td>
                      <td><?php echo $row['taka']?></td>
                    <?php }?>
                     
                    </tr>
                  </tbody>
                </table>
               
              </div>
              <div class="row">
              <div class="col-sm-4">
                    </div>
              <div class="col-sm-4">
                 <br>
              <?php echo anchor("SalaryController/Pay/{$row['emp_id']}","Pay",array('class'=>'btn btn-primary btn-block')) ?>
              <br>
              </div>
              </div>
              
              <!-- /.card-body -->
            </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>