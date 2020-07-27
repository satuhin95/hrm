<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Performance Factor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Performance Factor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Performance Factor</h3>

                <div class="card-tools">
                  <?php echo anchor("PerformanceController/CreateFactor",'<p> Add New</p>',array('class'=>'btn btn-success btn-sm')) ?>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th> Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($fact as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['name']?></td>
                      <td>
                        <?php echo anchor("PerformanceController/FactorEdit/{$row['id']}","Edit",array('class'=>'btn btn-info')) ?>
                       
                        <?php echo anchor("PerformanceController/FactorDelete/{$row['id']}","Delete",array('class'=>'btn btn-danger')) ?>
                      </td>
           
                    <?php }?>
                     
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>