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
                          <?php $equery = mysqli_query($con, "SELECT start,end,title,venue, description, stat_id, te_id  from tblevents where YEAR(start) >= YEAR(CURRENT_DATE()) and MONTH(start) >= MONTH(CURRENT_DATE()) order by start asc");
                                            
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
                                        
                                        
                                        <td>'.$row['title'].'</td>
                                        <td>'.$word_date2.' - '.$word_date3.'</td>
                                        <td>'.$row['description'].'</td>  
                                        <td>'.$row['venue'].'</td>
                                        <td>'.($row['stat_id'] == "1" ? "<label style='color:green'>Active</label>" : (($row['stat_id'] == "3") ? "<label style='color:gray'>Cancelled</label>" : "<label style='color:black'>Standby</label>")) .'</td>';

                                        if(($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Volunteer Services")){
                                                        echo '
                                        <td>
                                          <form method="POST" action="updateevent">
                                            <input type="hidden" value="'.$row['te_id'].'" name="hidden_id" id="hidden_id"/>
                                            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn" name="btn" ><i class="fa fa-edit"></i></button>
                                          </form>
                                        </td>
                                        
                                        
                                        ';
                                            }  
                                        
                                    
                                    echo '
                                       
                                    </tr>

                                    ';
                                }
                                
                                ?>
                        </tbody>
                      </table>
                      <button type="submit" class="btn waves-effect waves-light btn-secondary btn-sm" id="btn" name="btn" ><i class="fa fa-plus"></i> Add Training</button>
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
                        <?php 
                            $equery = mysqli_query($con, "SELECT tblevents.title, tblevents.stat_id, tblevents.e_max, tblevents.e_min, tblevents.e_hours, tblevents.e_days, tblevents.e_fee, tblevents.description, tblevents.venue, tbleventres.te_id, COUNT(tbleventres.ui_id) AS no, 
                              ((tblevents.e_max) - count(tbleventres.ui_id)) AS remarks from tbleventres 
                              right outer join tblevents on tbleventres.te_id = tblevents.te_id 
                              where YEAR(tblevents.start) >= YEAR(CURRENT_DATE()) and MONTH(tblevents.start) >= MONTH(CURRENT_DATE())
                              group by tblevents.te_id");
                            

                            while($row = mysqli_fetch_array($equery))
                            { 
                                echo '
                                <tr>
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['venue'].'</td>
                                    <td>'.$row['no'].'</td>
                                    <td>'.$row['remarks'].' out of '.$row['e_max'].'</td>';
                                    
                                                    echo '
                                    <td><button class="btn btn-success btn-sm btn" data-target="#viewmodal" data-event-id="'.$row['te_id'].'" data-toggle="modal"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </td>
                                    
                                </tr>
                                ';
                                
                                
                           
                            }

                            ?>
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
                         <?php $equery = mysqli_query($con, "SELECT * from tblevents
                            where  YEAR(start) >= YEAR(CURRENT_DATE()) and MONTH(start) >= MONTH(CURRENT_DATE()) ORDER BY start ASC");
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
                                    
                                    
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$word_date2.' - '.$word_date3.'</td>
                                    <td>'.$row['venue'].'</td>
                                    ';
                                    if(($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Volunteer Services")){
                                                    echo '
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm btn" data-toggle="modal" data-target="#assign'.$row['te_id'].'">Assign</button>
                                    </td>
                                    ';
                                        }  
                                    
                                
                                echo '
                                   
                                </tr>

                                ';
                                /**include "assign-instructorModal.php";**/
                            }
                            
                            ?>
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

</body>
</html>
