<?php
  session_start();
  include ('pages/connection.php');
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.html');
  }
?>
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
            <h1>Extra</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Extra</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-plus"></i></span>

              <div class="info-box-content">
                <a href="" style="text-decoration: none; color: black;" data-target="#addStaff" data-toggle="modal"><span class="info-box-text">Add Staff</span>
                <span class="info-box-number">1,410</span></a>
                <?php include "AddStaffModal.php"; ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-plus"></i></span>

              <div class="info-box-content">
                <a href="" style="text-decoration: none; color: black;" data-target="#addInstructor" data-toggle="modal"><span class="info-box-text">Add Instructor</span>
                <span class="info-box-number">1,410</span></a>
                <?php include "AddInstructorModal.php"; ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
           <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-plus"></i></span>

              <div class="info-box-content">
                <a href="" style="text-decoration: none; color: black;" data-target="#addTrainee" data-toggle="modal"><span class="info-box-text">Add Trainee</span>
                <span class="info-box-number">1,410</span></a>
                <?php include "AddTraineeModal.php"; ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
           <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-plus"></i></span>

              <div class="info-box-content">
                <a href="" style="text-decoration: none; color: black;" data-target="#addPosition" data-toggle="modal"><span class="info-box-text">Add Position</span>
                <span class="info-box-number">1,410</span></a>
                <?php include "AddPositionModal.php"; ?>
              </div>
              <!-- /.info-box-content -->
            </div>

            <!-- /.info-box -->
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-plus"></i></span>

              <div class="info-box-content">
                <a href="" style="text-decoration: none; color: black;" data-target="#addSpecialization" data-toggle="modal"><span class="info-box-text">Add Specialization</span>
                <span class="info-box-number">1,410</span></a>
                <?php include "AddSpecializationModal.php"; ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            
            <!-- /.info-box -->
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-plus"></i></span>

              <div class="info-box-content">
                <a href="" style="text-decoration: none; color: black;" data-target="#addServices" data-toggle="modal"><span class="info-box-text">Add Services</span>
                <span class="info-box-number">1,410</span></a>
                <?php include "AddServicesModal.php"; ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            
            <!-- /.info-box -->
          </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 <?php include('AddFunction.php'); ?>
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->

</body>
</html>
