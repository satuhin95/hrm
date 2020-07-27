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
                <h3 class="card-title">Salary  List</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                       <th>Employee </th>
                      <th>Head </th>
                      <th>Amount</th>
                      <th>Admin</th>
                      <th>Payment Date</th>
                      <th>Billing Date</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($salary as $row){ ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['head_id']?></td>
                      <td><?php echo $row['amount']?></td>
                      <td><?php echo $row['username']?></td>
                      <td><?php echo $row['payment_date']?></td>
                      <td><?php echo $row['bill_date']?></td>
                                
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