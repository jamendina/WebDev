<?php
  session_start();
  include ('pages/connection.php');
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.php');
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
                          <?php
                                             $squery = mysqli_query($con, "SELECT *, ta.a_id as a_id, CONCAT(ln, ', ', fn, ' ',mn) as sname from tblaccount ta 
                                              left join tbluserinfo ui ON ta.ui_id = ui.ui_id 
                                              left join tblmaab ma ON ta.ui_id = ma.ui_id
                                              left join tblblooddonation bd ON ta.ui_id = bd.ui_id
                                              left join tbluposition tu ON ta.ui_id = tu.ui_id
                                              left join tbluservices ts ON ta.ui_id = ts.ui_id
                                              where u_class = 'Staff' and status = 'Active' and ui.ui_id!='".$_SESSION['uiid']."' ");
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                                echo '
                                                <tr> 
                                                    
                                                    <td>'.$row['sname'].'</td>
                                                    <td>'.$row['address'].'</td>
                                                    <td>'.$row['cp_no'].'</td>
                                                    <td>'.$row['position'].'</td>';
                                                    if($_SESSION['role'] == "System Administrator"){
                                                                    echo '
                                                    <td><button class="btn btn-success btn-xs btn" data-target="#editStaff'.$row['ui_id'].'" data-toggle="modal"><i class="fas fa-edit" aria-hidden="true"></i><b> Info</b></button>
                                                    </td>';
                                                    } 
                                                     echo'
                                                    
                                                </tr>
                                                ';
                                                 include "AccountEditModal.php";
                                                
                                            }
                                            ?>
                         
                        </tbody>
                      </table>

                    </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="instructor">
                     <table id="example3" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>MAAB ID</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Services</th>
                          <th>Contact No.</th>
                          <th>Status</th>
                          <th style="width: 10px; position: center;">Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                                            $squery = mysqli_query($con, "SELECT *, ta.a_id as a_id, CONCAT(ln, ', ', fn, ' ',mn) as fname from tblaccount ta 
                                              left join  tbluserinfo ui ON ta.ui_id = ui.ui_id 
                                              left join tblmaab ma ON ta.ui_id = ma.ui_id
                                              left join tblblooddonation bd ON ta.ui_id = bd.ui_id
                                              left join tbluspecialization tu ON ta.ui_id = tu.ui_id
                                              left join tblstat stat ON stat.stat_id = ui.stat_id
                                              where u_class = 'Instructor'");
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                                echo '
                                                <tr>
                                                    <td>'.$row['maab_id'].'</td>
                                                    <td>'.$row['fname'].'</td>
                                                    <td>'.$row['specialization'].'</td>
                                                    <td>'.$row['address'].'</td>
                                                    <td>'.$row['cp_no'].'</td>
                                                    <td>'.($row['status'] == "Active" ? "<label style='color:green'>".$row['status']."</label>" : (($row['status'] == "Inactive") ? "<label style='color:red'>".$row['status']."</label>" : "<label style='color:black'></label>")) .'</td>';
                                                    if(($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "Safety Services")){
                                                                    echo '
                                                    <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ViewInstructor'.$row['a_id'].'"><i class="fa fa-eye" aria-hidden="true"></i> <b>Info</b></button>
                                                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#InstructorStatus'.$row['ui_id'].'"><i class="fa fa-edit" aria-hidden="true"></i> <b>Status</b></button>  
                                                    
                                                    </td>
                                                   ';
                                                        }
                                                        echo'
                                                    
                                                    
                                                </tr>
                                                ';
                                                include "InstructorStatus.php";
                                                include "ViewInstructor.php";
                                                /**include "insstatModal.php";
                                                include "viewaccount.php";**/
                                                
                                                
                                            }
                                            ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="trainee">
                     <table id="example4" class="table table-bordered">
                      <thead>                  
                        <tr>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Contact No.</th>
                            <?php 
                             if($_SESSION['role'] == "Welfare Services"){
                                                echo '
                            <th>MAAB ID</th>
                            <th>MAAB Effectivity</th>
                            ';

                             }
                             else if($_SESSION['role'] == "Blood Services"){
                                                echo '
                            <th>School/Company</th>
                            <th>Blood Type</th>
                            <th>Date Last Donated</th>

                            ';
                             }else if($_SESSION['role'] == "System Administrator"){
                                                echo '
                            <th>School/Company</th>
                            <th>MAAB ID</th>
                            <th>MAAB Effectivity</th>
                            <th>Blood Type</th>                    
                            <th>Option</th>
                            ';

                            } else if($_SESSION['role'] == "Safety Services"){
                                                echo '
                            <th>School/Company</th>                    
                            <th>Option</th>
                            ';

                            }
                            
                            ?>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $squery = mysqli_query($con, "SELECT *, ta.a_id as a_id, CONCAT(ln, ', ', fn, ' ',mn) as fname from tblaccount ta 
                            left join tbluserinfo ui ON ta.ui_id = ui.ui_id 
                            left join tblmaab ma ON ta.ui_id = ma.ui_id
                            left join tblblooddonation bd ON ta.ui_id = bd.ui_id
                            where a_type = 'Volunteer' and status = 'Active' ");
                          while($row = mysqli_fetch_array($squery))
                          {
                            $start = $row['date_donated'];
                            $old_date_timestamp = strtotime($start);
                            $word_date = date('F j, Y', $old_date_timestamp);
                              echo '
                              <tr>
                                  <td>'.$row['fname'].'</td>
                                  <td>'.$row['address'].'</td>
                                  <td>'.$row['cp_no'].'</td>';
                                  if($_SESSION['role'] == "Welfare Services"){echo '
                                  <td>'.$row['maab_id'].'</td>
                                  <td>'.$row['effectivity'].'</td>';

                                  } else if($_SESSION['role'] == "Blood Services"){echo '
                                  <td>'.$row['company'].'</td>
                                  <td>'.$row['bloodtype'].'</td>
                                  <td>'.$word_date.'</td>';

                                  }else if($_SESSION['role'] == "System Administrator"){
                                                  echo '
                                  <td>'.$row['company'].'</td>                
                                  <td>'.$row['maab_id'].'</td>
                                  <td>'.$row['effectivity'].'</td>
                                  <td>'.$row['bloodtype'].'</td>            
                                  <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ViewTrainee'.$row['a_id'].'"><i class="fa fa-eye"></i> <b>Info</b>
                                  </button>
                                  </td>';
                                      } 
                                  else if($_SESSION['role'] == "Safety Services"){
                                                  echo '
                                  <td>'.$row['company'].'</td>
                                  <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ViewTrainee'.$row['a_id'].'"><i class="fa fa-eye"></i></a>
                                  </button>
                                  
                                  </td>';
                                      }
                                      echo'
                                  
                                  
                              </tr>
                              ';
                              include "ViewTrainee.php";
                          }
                          ?>
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
                        <?php
                          $squery = mysqli_query($con, "SELECT *, ta.a_id as a_id, CONCAT(ln, ', ', fn, ' ',mn) as fname from tblaccount ta 
                            left join tbluserinfo ui ON ta.ui_id = ui.ui_id
                            left join tblmaab ma ON ta.ui_id = ma.ui_id

                            left join tblblooddonation bd ON ta.ui_id = bd.ui_id
                            where status = 'Pending' ORDER BY date ASC");
                          while($row = mysqli_fetch_array($squery))
                          {
                              echo '
                              <tr>
                                  
                                  <td>'.$row['fname'].'</td>
                                  <td>'.$row['address'].'</td>
                                  <td>'.$row['cp_no'].'</td>
                                  <td>'.$row['date'].'</td>
                                  <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ViewPending'.$row['a_id'].'"><i class="fa fa-eye"></i> <b>Info</b></button> 
                                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#accept'.$row['a_id'].'"><i class="fa fa-edit"></i> <b>Status</b></button>
                                      
                                  </td>

                              </tr>        
                              ';
                              include "PendingModal.php";
                              include "ViewPending.php";
                          }
                          ?>
                        
                       
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
    <?php include "editfunction.php"; ?>
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
</div>
</body>
</html>
