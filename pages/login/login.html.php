<?php
  session_start();
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Philippine Red Cross | Login</title>
  <link rel="shortcut icon" type="text/css" href="../../dist/img/prc-logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="../../dist/img/prc-logo.png" width="70px" align="center"><br>
    <h2><b>Philippine Red Cross </b></h2><h4>Albay-Legazpi City Chapter</h4>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form role="form" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password" id="pwd" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span toggle="#pwd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="btn_login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     
      <p class="mb-0">
        <a href="../registration/registration.html" class="text-center">Register a new membership</a>
      </p>
      <p class="mb-1">
        <a href="#">Go Back to Home Page</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<?php
        include ('../connection.php');


        if(isset($_POST['btn_login']))
        { 
      
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $_SESSION['username'] = $user;

      
            $admin = mysqli_query($con, "SELECT *, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
               left join tbluposition tu on ta.ui_id = tu.ui_id
              where user = '$user' and pass = '$pass' and tu.position = 'System Administrator'");
            $numrow = mysqli_num_rows($admin);



            $volunteer_info = mysqli_query($con, "SELECT * from tblaccount where user = '$user' and pass = '$pass' and a_type = 'Volunteer' and status = 'Active' ");
            $numrow1 = mysqli_num_rows($volunteer_info);



            $non_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              where user = '$user' and pass = '$pass' and a_type = 'Non-Volunteer' and status = 'Active' ");
                $numrow2 = mysqli_num_rows($non_info);



            $safetyservices_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              left join tbluposition tu on ta.ui_id = tu.ui_id 
              left join tbluservices tus on ta.ui_id = tus.ui_id
              where user = '$user' and pass = '$pass' and tu.position ='Chapter Service Representative' and tus.services_title = 'Safety Services' ");
                $numrow3 = mysqli_num_rows($safetyservices_info);



            $chapter_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id
              left join tbluposition tu on ta.ui_id = tu.ui_id
              where user = '$user' and pass = '$pass' and tu.position = 'Chapter Administrator' ");
                $numrow4 = mysqli_num_rows($chapter_info); 



            $bloodservice_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              left join tbluposition tu on ta.ui_id = tu.ui_id 
              left join tbluservices tus on ta.ui_id = tus.ui_id
              where user = '$user' and pass = '$pass' and tu.position ='Chapter Service Representative' and tus.services_title = 'Blood Services' ");
                $numrow5 = mysqli_num_rows($bloodservice_info);



            $dms_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              left join tbluposition tu on ta.ui_id = tu.ui_id
              left join tbluservices tus on ta.ui_id = tus.ui_id
              where user = '$user' and pass = '$pass' and tu.position ='Chapter Service Representative' and tus.services_title = 'Disaster Management Services' ");
                $numrow6 = mysqli_num_rows($dms_info);



            $ws_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              left join tbluposition tu on ta.ui_id = tu.ui_id
              left join tbluservices tus on ta.ui_id = tus.ui_id
              where user = '$user' and pass = '$pass' and tu.position ='Chapter Service Representative' and tus.services_title = 'Welfare Services' ");
                $numrow7 = mysqli_num_rows($ws_info);   



            $ins_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              where user = '$user' and pass = '$pass' and a_type = 'Instructor' ");
                $numrow8 = mysqli_num_rows($ins_info);

            $ihl_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta 
              left join tbluserinfo ui on ta.ui_id = ui.ui_id 
              left join tbluposition tu on ta.ui_id = tu.ui_id
              left join tbluservices tus on ta.ui_id = tus.ui_id
              where user = '$user' and pass = '$pass' and tu.position ='Focal Person' and tus.services_title = 'International Humanitarian Law' ");
                $numrow9 = mysqli_num_rows($ihl_info);

                

            if($numrow > 0)
            {
                  $_SESSION['username'] = $user;
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "System Administrator";
                  $_SESSION['userid'] = $row['a_id'];
                  $_SESSION['uiid'] = $row['ui_id'];
                }

                 header ('location: ../../dashboard.html');
               
            }
            elseif($numrow1 > 0)
              {
               $_SESSION['username'] = $user;
                while($row = mysqli_fetch_array($volunteer_info)){
                  $_SESSION['role'] = "Volunteer";
                  $_SESSION['userid'] = $row['a_id'];
                  $_SESSION['uiid'] = $row['ui_id'];

                } 
                header ('location: ../../dashboard.html');
              }
            elseif($numrow2 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($non_info)){
                    $_SESSION['role'] = "Non-Volunteer";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.html');
                }
                //
           elseif($numrow3 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($safetyservices_info)){
                    $_SESSION['role'] = "Safety Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.html');
                }
           elseif($numrow4 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($chapter_info)){
                    $_SESSION['role'] = "Chapter Administrator";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.html');
                }
           elseif($numrow5 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($bloodservice_info)){
                    $_SESSION['role'] = "Blood Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.html');
                }
           elseif($numrow6 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($dms_info)){
                    $_SESSION['role'] = "Disaster Management Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.html');
                }
           elseif($numrow7 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($ws_info)){
                    $_SESSION['role'] = "Welfare Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.html');
                }
           elseif($numrow8 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($ins_info)){
                    $_SESSION['role'] = "Instructor";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                    $_SESSION['specialization'] = $row['specialization'];
                  } 
                  header ('location: ../../dashboard.html');
                }
            elseif($numrow9 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($ihl_info)){
                    $_SESSION['role'] = "International Humanitarian Law";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  }

                  header ('location: ../../dashboard.html');
                }
               
             else
                {
                  echo "<script>alert('Invalid Account/Your Account is still Pending for Approval')</script>";
                  
                }
             
        }
        
      ?>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>
  $(".toggle-password").click(function(){
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
      if (input.attr("type")== "password"){
        input.attr("type","text");
      } 

      else {
      input.attr("type", "password");
    }
  });      
</script>
</body>
</html>
