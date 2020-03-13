<!DOCTYPE html>
<html lang="en">
<?php include"head-css.php"; ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('navbar.php'); ?>
    <?php include('sidebar.php'); ?>
  <!-- Main content -->
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
         <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#staff" data-toggle="tab">Staff</a></li>
                  <li class="nav-item"><a class="nav-link" href="#instructor" data-toggle="tab">Instructor</a></li>
                  <li class="nav-item"><a class="nav-link" href="#trainee" data-toggle="tab">Trainee</a></li>
                   <li class="nav-item"><a class="nav-link" href="#pending" data-toggle="tab">Pending Accounts</a></li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content clearfix">
                    <div class="active tab-pane" id="staff">
                      <!-- Post -->
                     
                      <table id="example1" class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact No.</th>
                            <th>Position</th>
                            <th style="width: 10px; position: center;">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Rosediel P. Rivero</td>
                            <td>San Roque, Daraga Albay</td>
                            <td>09123456789</td>
                            <td><span class="badge bg-danger">Chapter Administrator</span></td>
                             <td><a href=""><span class="badge bg-primary"><i class="fas fa-eye"></i></span></a></td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="instructor">
                     <table id="example3" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact No.</th>
                          <th>Services</th>
                          <th style="width: 10px; position: center;">Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John Paul D. Mangampo</td>
                          <td>Legazpi City, Albay</td>
                          <td>09123456789</td>
                          <td><span class="badge bg-danger">Safety Services</span></td>
                           <td><a href=""><span class="badge bg-primary"><i class="fas fa-eye"></i></span></a></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="trainee">
                     <table id="example4" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact No.</th>
                          <th>Services</th>
                          <th style="width: 10px; position: center;">Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John Anthony B. Mendina</td>
                          <td>Legazpi City, Albay</td>
                          <td>09123456789</td>
                          <td><span class="badge bg-danger">Red Cross Youth</span></td>
                           <td><a href=""><span class="badge bg-primary"><i class="fas fa-eye"></i></span></a></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="pending">
                     <table id="example5" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact No.</th>
                          <th>Registration Date</th>
                          <th style="width: 10px; position: center;">Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John Anthony B. Mendina</td>
                          <td>Legazpi City, Albay</td>
                          <td>09123456789</td>
                          <td><span class="badge bg-danger">March 12, 2020</span></td>
                           <td><a href=""><span class="badge bg-primary"><i class="fas fa-eye"></i></span></a></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
</div>
</body>
</html>
