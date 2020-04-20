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
            <h1>Trainings & Events</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Evaluation</li>
            </ol>
          </div>
        </div>
      </div><?php 
                                    if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Instructor")) {}
                                       else {
                                              header ('Location: 404.php');
                                              # code...
                                            }   
 ?><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
       <?php
     $id = $_GET['id'];
     $squery = mysqli_query($con, "SELECT * from tblevents where te_id = '".$id."'");
    $row = mysqli_fetch_array($squery);
echo'
      <div id="#blank'.$row['te_id'].'" class="container-fluid">
        <div class="row">
          
         <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                   <li class="nav-item"><a class="nav-link active" href="#TEvaluation" data-toggle="tab">Training Title: '.$row['title'].'</a></li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content clearfix">

                  <div class="active tab-pane" id="TEvaluation">
                  <form method="post">
                     <table id="example5" class="table table-bordered">
                       <thead>
                          <tr>
                              
                              <th>Full Name</th>
                              <th>Written Exam Grade</th>
                              <th>Practical Exam Grade</th>
                              <th>Average</th>
                              <th>Remarks</th>
                              
                          </tr>
                       </thead>
                      <tbody>';?> 
                                            <?php
                                             $squery = mysqli_query($con, "SELECT te.title, ter.remarks, ter.practical, ter.written, ter.average,  tu.ln, tu.mn, tu.fn, ter.ter_id as ter_id from tbleventres ter
                                              left join tbluserinfo tu on ter.ui_id = tu.ui_id
                                              left join tblevents te on ter.te_id = te.te_id
                                              left join tblassignment tta on te.te_id = tta.te_id
                                              where te.te_id = '$id' and te.stat_id = '1'
                                               order by te.title asc");
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                                echo '
                                 <tr> 
                                                    
                                                    <td>'.$row['ln'].', '.$row['fn'].' '.$row['mn'].'</td>

                                                    <td hidden><input type="number" name="ter_id[]" value="'.$row['ter_id'].'"></td>
                                                    <td><input type="number" min ="65" max="95" name="written[]" value="'.$row['written'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"></td>
                                                    <td><input type="number" min ="65" max="95" name ="practical[]" value="'.$row['practical'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"></td>
                                                    <td><input type="number" name="average[]" value="'.$row['average'].'"  disabled></td>
                                                    <td>'.($row['remarks'] == "Passed" ? "<label style='color:green'>".$row['remarks']."</label>" : (($row['remarks'] == "Failed") ? "<label style='color:red'>".$row['remarks']."</label>" : "<label style='color:black'>No Final Remarks</label>")) .'</td>';
                                                    } 
                                                     echo'
                                                    
                                                </tr>
                                                ';
                                                 
                                                
                                            
                                            ?>
                      </tbody>
                    </table>
                     <button class="btn btn-primary btn btn" name="btn_save">Submit</button>
                    </form>
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
   <!-- ========= EDIT EVALUATION GRADE =========== -->
<?php
if(isset($_POST['btn_save']))
{
$count = 0;
foreach ($_POST['ter_id'] as $ter_id) 
{
$ter_id = $_POST['ter_id'][$count];
$written = $_POST['written'][$count];
$practical = $_POST['practical'][$count];
$ave = $written + $practical;
$average = round($ave / 2);

if($practical <=0) {

  $remarks = "No Final Remarks";
}
else if($average<=74)
{
$remarks = "Failed";
}

else if($average>=75)
{
$remarks = "Passed";
}
 $squery = "SELECT *, ter.ter_id as ter_id from tbleventres ter inner join tbluserinfo tu on ter.ui_id = tu.ui_id
left join tblevents te on ter.te_id = te.te_id";

       $result = mysqli_query($con, $squery);
            if (mysqli_num_rows($result)>$count){   
                $update ="UPDATE tbleventres SET written= '".$written."', practical ='".$practical."', average ='".$average."', remarks= '".$remarks."' WHERE ter_id =".$ter_id;
                mysqli_query($con, $update);

             }else{
                $insert="INSERT INTO tbleventres (written, practical, average, remarks) VALUES ('".$written."','".$practical."', '".$average."','".$remarks."')";
                mysqli_query($con, $insert);
             }
 ?>

          ?>
<script>
    alert("Successfully Added!");
    window.location="TraineeEvaluation.html?id= '".$id."'"; 
</script>
<?php
$count++;
}

}
?>
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->

</body>
</html>
