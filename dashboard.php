<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.php');
  }
  include ('pages/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include"head-css.php"; ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('navbar.php'); ?>
    <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php

                   $t = mysqli_query($con,"SELECT *, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui  ON ta.ui_id = ui.ui_id where a_type = 'Staff' and status = 'Active'");
            
                      $num_rowst = mysqli_num_rows($t);
                                            
                      echo $num_rowst;
                  ?>                 
                </h3>

                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php $t = mysqli_query($con,"SELECT *, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui  ON ta.ui_id = ui.ui_id where a_type = 'Instructor' and status = 'Active'");
            
                      $num_rowst = mysqli_num_rows($t);
                                            
                      echo $num_rowst;
                  ?>
                </h3>

                <p>Instructor</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php 
                     $t = mysqli_query($con,"SELECT *, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui  ON ta.ui_id = ui.ui_id where a_type = 'Trainee' and status = 'Active'");

                      $num_rowst = mysqli_num_rows($t);
                                            
                      echo $num_rowst;
                  ?>
                </h3>

                <p>Trainee</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                <?php 
                  $t = mysqli_query($con,"SELECT *, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui  ON ta.ui_id = ui.ui_id where status = 'Pending'");
                    $num_rowst = mysqli_num_rows($t);
                    echo $num_rowst;
                ?></h3>

                <p>Pending Accounts</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          
         <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#TList" data-toggle="tab">List of Trainings</a></li>
                  <li class="nav-item"><a class="nav-link" href="#MTraining" data-toggle="tab">Training for <?php echo date('F');?></a></li>
                  <li class="nav-item"><a class="nav-link" href="#Wtraining" data-toggle="tab">Training this Week</a></li>
                   <li class="nav-item"><a class="nav-link" href="#PTraining" data-toggle="tab">Pending Training</a></li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content clearfix">
                    <div class="active tab-pane" id="TList">
                      <!-- Post -->
                     
                      <table id="example1" class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th>Date of Event</th>
                            <th>Title</th>
                            <th>Venue</th>
                            <th>Event Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $equery = mysqli_query($con, "SELECT * from tblevents where YEAR(start) >= YEAR(CURRENT_DATE()) and MONTH(start) >= MONTH(CURRENT_DATE()) ORDER BY start ASC");
                                            $user = $_SESSION['username'];
                                            while($row = mysqli_fetch_array($equery))
                                            { 
                                              $start = $row['start'];
                                              $old_date_timestamp2 = strtotime($start);
                                              $word_date2 = date('F j, Y', $old_date_timestamp2);

                                              $end = $row['end'];
                                              $old_date_timestamp3 = strtotime($end);
                                              $word_date3 = date('F j, Y', $old_date_timestamp3);
                                                echo '
                                                <tr>
                                                    
                                                    <td>'.$word_date2.' - '.$word_date3.'</td>
                                                    <td>'.$row['title'].'</td>
                                                    <td>'.$row['venue'].'</td>
                                                    <td>'.$row['description'].'</td>';
                                                    if(($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Volunteer Services")){
                                                                    echo '
                                                    
                                                    ';
                                                        }  
                                                    
                                                
                                                echo '
                                                   
                                                </tr>

                                                ';
                                                
                                            }
                                
                                ?>
                        </tbody>
                      </table>
                    </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="MTraining">
                     <table id="example3" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Date of Event</th>
                          <th>Title</th>
                          <th>Venue</th>
                          <th>Event Description</th>
                          <!--<th style="width: 10px; position: center;">Option</th>-->
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            
                                            $equery = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = MONTH(CURRENT_DATE()) and stat_id ='1' and stat_id !='5'   ORDER BY start ASC ");
                                            while($row = mysqli_fetch_array($equery))
                                            {
                                              $start = $row['start'];
                                              $old_date_timestamp = strtotime($start);
                                              $word_date = date('F j, Y', $old_date_timestamp);

                                              $end = $row['end'];
                                              $old_date_timestamp1 = strtotime($end);
                                              $word_date1 = date('F j, Y', $old_date_timestamp1);  
                                                echo '
                                                <tr>
                                                    <td>'.$word_date.' - '.$word_date1.'</td>
                                                    <td>'.$row['title'].'</td>
                                                    <td>'.$row['venue'].'</td>
                                                    <td>'.$row['description'].'</td>
                                                    ';
                                                echo '
                                                   
                                                </tr>

                                                ';
                                            
                                            }

                            ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="Wtraining">
                     <table id="example4" class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>Date of Event</th>
                          <th>Title</th>
                          <th>Venue</th>
                          <th>Event Description</th>
                          <!--<th style="width: 10px; position: center;">Option</th>-->
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                                            
                                            $equery = mysqli_query($con, "SELECT * from tblevents where WEEK(start) = WEEK(CURRENT_DATE()) and stat_id ='1'  ORDER BY start ASC ");
                                            while($row = mysqli_fetch_array($equery))
                                            {
                                              $start = $row['start'];
                                              $old_date_timestamp = strtotime($start);
                                              $word_date = date('F j, Y', $old_date_timestamp);

                                              $end = $row['end'];
                                              $old_date_timestamp1 = strtotime($end);
                                              $word_date1 = date('F j, Y', $old_date_timestamp1);  
                                                echo '
                                                <tr>
                                                    <td>'.$word_date.' - '.$word_date1.'</td>
                                                    <td>'.$row['title'].'</td>
                                                    <td>'.$row['venue'].'</td>
                                                    <td>'.$row['description'].'</td>
                                                    ';
                                                echo '
                                                   
                                                </tr>

                                                ';
                                            
                                            }
                            
                            ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="PTraining">
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
                        <?php 
                            if($_SESSION['role'] == "Instructor"){
                           $iquery = mysqli_query($con, "SELECT *, tt.assignment_id as assignment_id from tblassignment tt 
                                left join tblevents te on tt.te_id = te.te_id
                                
                                where a_id = '".$_SESSION['userid']."' and month(te.start) <= month(current_DATE())");
                            while($row = mysqli_fetch_array($iquery))
                            {
                                echo '
                                <tr>
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'?><?php echo"Start ".$row['start'].' - End '.$row['end'].'</td>
                                    <td>'.$row['e_hours'].' Hour(s) / '.$row['e_days'].' Day(s)</td>
                                    <td>
                                    <a href="traineescore.php?id='.$row['te_id'].'" type="button" target="_blank" class="btn btn-primary btn-sm btn" data-target="#blank'.$row['te_id'].'"><i class="fa fa-eye"></i></a>
                                    </button>
                                    </td>

                                </tr>
                                ';
                                
                            }
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
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
