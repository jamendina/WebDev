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
            <h1>Trainings & Events</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Trainings & Events</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#TEList" data-toggle="tab">Trainings/Events</a></li>
                  <li class="nav-item"><a class="nav-link" href="#paxlist" data-toggle="tab">Participants</a></li>
                  <li class="nav-item"><a class="nav-link" href="#AInstructor" data-toggle="tab">Assign Instructor</a></li>
                   <li class="nav-item"><a class="nav-link" href="#TEvaluation" data-toggle="tab">Trainee Evaluation</a></li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content clearfix">
                    <div class="active tab-pane" id="TEList">
                      <!-- Post -->
                     
                      <table id="example1" class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Venue</th>
                            <th>status</th>
                            <th style="width: 10px; position: center;">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Rosediel P. Rivero</td>
                            <td>San Roque, Daraga Albay</td>
                            <td>09123456789</td>
                            <td>Legazpi City Albay</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><a href=""><span class="badge bg-primary"><i class="fas fa-edit"></i></span></a></td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="paxlist">
                     <table id="example3" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Title</th>
                          <th>Venue</th>
                          <th>No. of Participants</th>
                          <th>Available Slot/s</th>
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

                  <div class="tab-pane" id="AInstructor">
                     <table id="example4" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Venue</th>
                          <th style="width: 10px; position: center;">Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John Anthony B. Mendina</td>
                          <td>Legazpi City, Albay</td>
                          <td>09123456789</td>
                          <td><span class="badge bg-danger">Red Cross Youth</span></td>
                           <td><a href=""><span class="badge bg-success"><i class="fas fa-edit"></i> Assign</span></a></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="TEvaluation">
                     <table id="example5" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Duration</th>
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
<!-- ./wrapper -->

</body>
</html>
