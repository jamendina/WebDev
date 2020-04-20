<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="text/css" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Philippine Red Cross - Albay-legazpi City Chapter</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="shortcut icon" type="text/css" href="../login/logo.png">
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-danger fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <!--<div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>-->
            <div class="navbar-translate">
                <a class="navbar-brand"  rel="tooltip"   data-placement="bottom" target="">
                    <b>Philippine Red Cross</b>
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="landing-page.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login-page.php"><b>Login</b></a>
                    </li>
                    
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/bg1.jpg)"></div>
        <div class="container">
            <div class="col-md-10 content-center">
                <div class="card card-login card-plain">
                    <form  class="login-form" role="form" method="post">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="assets/img/logo.png" alt="">
                            </div>
							<div>
									<h5>Online Event and Registration Management System</h5>
								</div>
                        </div>
						
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" name="user" id="user" placeholder="Username...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="Password..." name="pass" id="pass" class="form-control" />

                            </div>
                            <button type="button" id="eye" class="btn btn-primary btn-block btn-flat" style="align:right;"></button> Show Password
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn_login">Sign In</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="../registration/register.php" class="text-center">Register a new membership</a>

                            </h6>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        <?php
        include ('../connection.php');


        if(isset($_POST['btn_login']))
        { 
      
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $_SESSION['username'] = $user;

      
            $admin = mysqli_query($con, "SELECT *, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and position = 'System Administrator'");
            $numrow = mysqli_num_rows($admin);

            $volunteer_info = mysqli_query($con, "SELECT * from tblaccount where user = '$user' and pass = '$pass' and a_type = 'Volunteer' and status = 'Active' ");
            $numrow1 = mysqli_num_rows($volunteer_info);

            $non_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and a_type = 'Non-Volunteer' ");
                $numrow2 = mysqli_num_rows($non_info);

            $safetyservices_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and position = 'Safety Services' ");
                $numrow3 = mysqli_num_rows($safetyservices_info);

            $chapter_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and position = 'Chapter Administrator' ");
                $numrow4 = mysqli_num_rows($chapter_info); 

            $bloodservice_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and position = 'Blood Services' ");
                $numrow5 = mysqli_num_rows($bloodservice_info);

            $dms_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and position = 'Disaster Management Services' ");
                $numrow6 = mysqli_num_rows($dms_info);

            $ws_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and position = 'Welfare Services' ");
                $numrow7 = mysqli_num_rows($ws_info);   

            $ins_info = mysqli_query($con, "SELECT*, ta.a_id as a_id from tblaccount ta left join tbluserinfo ui on ta.ui_id = ui.ui_id where user = '$user' and pass = '$pass' and a_type = 'Instructor' ");
                $numrow8 = mysqli_num_rows($ins_info);
                

            if($numrow > 0)
            {
                $_SESSION['username'] = $user;
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "System Administrator";
                  $_SESSION['userid'] = $row['a_id'];
                  $_SESSION['uiid'] = $row['ui_id'];
                }    
                header ('location: ../../dashboard.php');
            }
            elseif($numrow1 > 0)
              {
               $_SESSION['username'] = $user;
                while($row = mysqli_fetch_array($volunteer_info)){
                  $_SESSION['role'] = "Volunteer";
                  $_SESSION['userid'] = $row['a_id'];
                  $_SESSION['uiid'] = $row['ui_id'];
                } 

                header ('location: ../../dashboard.php');
              }
            elseif($numrow2 > 0)
                {
                  $_SESSION['user'] = $user;
                  while($row = mysqli_fetch_array($non_info)){
                    $_SESSION['role'] = "Non-Volunteer";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.php');
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
                  header ('location: ../../dashboard.php');
                }
           elseif($numrow4 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($chapter_info)){
                    $_SESSION['role'] = "Chapter Administrator";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.php');
                }
           elseif($numrow5 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($bloodservice_info)){
                    $_SESSION['role'] = "Blood Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.php');
                }
           elseif($numrow6 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($dms_info)){
                    $_SESSION['role'] = "Disaster Management Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.php');
                }
           elseif($numrow7 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($ws_info)){
                    $_SESSION['role'] = "Welfare Services";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.php');
                }
           elseif($numrow8 > 0)
                {
                  $_SESSION['username'] = $user;
                  while($row = mysqli_fetch_array($ins_info)){
                    $_SESSION['role'] = "Instructor";
                    $_SESSION['userid'] = $row['a_id'];
                    $_SESSION['uiid'] = $row['ui_id'];
                  } 
                  header ('location: ../../dashboard.php');
                }     
               
             else
                {
                  echo "<script>alert('Invalid Account/Your Account is still Pending for Approval')</script>";
                  
                }
             
        }
        
      ?>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                       
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script><!--, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.-->
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
 <script>
      
      function show() 
      {
        var p = document.getElementById('paa');
        p.setAttribute('type','text');
      }
      function hide()
      {
        var p = document.getElementById('pass');
        p.setAttribute('type','password');
      }
      var pwShown = 0;
      document.getElementById("eye").addEventListener("click",function(){
        if (pwShown == 0){
          pwShown = 1;
          show();
        } else {
          pwShown = 0;
          hide();
        }
      }, false);
    </script>

</html>