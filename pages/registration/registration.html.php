<?php
session_start();
  include("../connection.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Philippine Red Cross</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <link rel="shortcut icon" type="text/css" href="../../dist/img/prc-logo.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Uni tabi jam -->
   <script type="text/javascript">

function getAge(){
    var Birthdate = document.getElementById('date').value;
    Birthdate= new Date(Birthdate);
    var today = new Date();
    var Age = Math.floor((today-Birthdate) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('Age').value=Age;
}
     function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
 function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    

  
</script>
<script>
      function showDiv(select){
        if(select.value=='yes'){
          document.getElementById('hidden_div').style.display= "block";
        } else {
          document.getElementById('hidden_div').style.display= "none";
        }
      }
      
    </script>
    <script>
      function show1(){
        document.getElementById('div1').style.display ='block';
      }
      function show2(){
        document.getElementById('div1').style.display ='none';
      }
    </script>




</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
          <a href="#" class="navbar-brand">
            <div class="col-md-6">
              <img src="../../dist/img/prc-logo.png" alt="Philippine Red Cross Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8">
              <span class="brand-text font-weight-bold">Philippine Red Cross | Registration Page</span>
            </div>
          </a>
        </div>
      </nav>
      <!-- /.navbar -->
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper"><br/>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1">
              </div>
              <div class="col-md-10">
                <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title"><b>User Information (fields with <b style="color: red;">*</b> are required)</b></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <h5> <center>Basic Information</center></h5>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>First Name:<b style="color: red;">*</b></label>
                        <input  type="text" class="form-control" name="fn" id="fn" placeholder="First Name" onKeyPress="return ValidateAlpha(event);" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name:</label>
                        <input type="text" name="mn" id="mn"  class="form-control" placeholder="Middle Name" onKeyPress="return ValidateAlpha(event);" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Last Name:<b style="color: red;">*</b></label>
                        <input type="text" name="ln" id="ln" class="form-control" placeholder="Last Name" onKeyPress="return ValidateAlpha(event);" required>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Suffix Name:</label>
                        <input type="text" name="sn" id="sn" class="form-control" placeholder="Suffix Name" onKeyPress="return ValidateAlpha(event);" required>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Birthdate:<b style="color: red;">*</b></label>
                        <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Enter ..." required="">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sex:<b style="color: red;">*</b></label>
                        <select class="form-control" id="sex" name="sex" autocomplete="off" required>
                                  <option disabled selected>Select Sex</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Civil Status:<b style="color: red;">*</b></label>
                        <select class="form-control" id="civilstat" name="civilstat" autocomplete="off" required>
                                  <option disabled selected>Select Status</option>
                                  <option value="Male">Single</option>
                                  <option value="Female">Married</option>
                                  <option value="Female">Divorced</option>
                                  <option value="Female">Separated</option>
                                  <option value="Female">Widowed</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Educational Attainment/Course<b style="color: red;">*</b></label>
                        <input type="text" class="form-control" name="educ_att" id="educ_att" placeholder="Enter ..." required="">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Occupation/Year Level<b style="color: red;">*</b></label>
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter ..." required="">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name of Company/School and Address<b style="color: red;">*</b></label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Enter ..." required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Blood Type:<b style="color: red;">*</b></label>
                        <select class="form-control" id="bloodtype" name="bloodtype" autocomplete="off" required="">
                          <option disabled selected>Your Blood Type</option>
                          <option value="Unidentified">Unidentified</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Blood Donor:<b style="color: red;">*</b></label>
                        <select class="form-control" id="donor" name="donor" required autocomplete="off" onchange="showDiv(this)">
                          <option  value="" disabled selected>Yes/No</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group" id="hidden_div" style="display:none;">
                          <label for="inputExperience">Date Last Donated <b style="color: red;">*</b></label>
                          <div class="col-sm-8">
                            <input type="date" name="date_donated" id="date_donated"  class="form-control" required="">
                          </div>
                      </div>
                    </div>
                  </div>

                  <!--end line for basic information-->
                  <hr/>
                  <h5><center>Membership Information</center></h5>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">MAAB Type <b style="color: red;">*</b></label>
                              <select class="form-control" name="maabtype_id" id="maabtype_id" autocomplete="off" >
                                 <?php
                                 echo' <option disabled selected>Select MAAB Type</option>';
                                                    $maab = mysqli_query($con, "SELECT * from tblmaabtype ");
                                                      while($row = mysqli_fetch_array($maab))
                                   {
                                                          echo '
                                                              
                                                              <option value="'.$row['maabtype_id'].'"> '.$row['type'].'</option>';
                                                              
                                                                  echo'
                                                              
                                                          

                                                          ';
                                                      }
                                  ?>
                                
                              </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="inputName">Membership Effectivity <b style="color: red;">*</b></label>
                              <input type="date" class="form-control" name="effectivity" id="effectivity" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="inputName">Membership ID Number <b style="color: red;">*</b></label>
                          <input type="text" class="form-control" name="maab_id" id="maab_id" required>
                      </div>
                    </div>
                  </div>
                  <!-- end line for membership information-->
                  <hr/>
                  <h5><center>Contact Information</center></h5>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Email<b style="color: red;">*</b></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Phone Number<b style="color: red;">*</b> </label>
                              <input type="text" class="form-control" name="cp_no" id="cp_no" onkeypress="javascript:return isNumber(event)" pattern="^[0-9]{10,12}$"  maxlength="11" placeholder="09123456789" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Address<b style="color: red;">*</b></label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Barangay San Juanico City Philippines" required>
                      </div>
                    </div>
                  </div>
                  <!-- end line for Contact information-->

                  <hr/>
                  <h5><center>Contact Person Incase of Emergency</center></h5>
                  <div class="row">
                    <div class="col-sm-5">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Contact Person<b style="color: red;">*</b></label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter...." required>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Contact Number<b style="color: red;">*</b></label>
                              <input type="text" class="form-control" name="contactnumber" id="contactnumber" onkeypress="javascript:return isNumber(event)" pattern="^[0-9]{10,12}$" placeholder="09123456789"  maxlength="11" required>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Relationship to the Person<b style="color: red;">*</b></label>
                          <input type="text" class="form-control" name="relationship" placeholder="Enter...." id="relationship" required>
                      </div>
                    </div>
                  </div>
                  <!-- end line for Contact Person incase of emergency information-->
                 <hr/>
                  <h5><center>Account Security Information</center></h5>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Username<b style="color: red;">*</b></label>
                               <input type="text" class="form-control" id="user" name="user" placeholder="Username" pattern="^.*(?=.{8,})(?=.*[a-zA-Z])(?!.*\s).*$" required title="8 characters up, should contain letters, and no blank spaces">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Password<b style="color: red;">*</b></label>
                              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password"  pattern="^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?!.*\s)(?=.*[A-Z]).*$" required title="8 characters up, should contain letters, capital letters, digits and no blank spaces" required onkeyup='check()'>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                         <label for="inputName">Confirm Password<b style="color: red;">*</b></label>
                      <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password"  required onkeyup='check()'><span id="message"></span>
                      </div>
                    </div>
                  </div>
                  <!-- end line for Account Security Information-->
                  <div class="form-group row">
                      <div class="col-sm-15">
                        <h6> <input type="checkbox" name="confirm" autocomplete="off" required> I hereby affirm that all the above information is complete and accurate. I know that any false or misleading information given by me can make me ineligible for admission or subject to dismissal. I also hereby provide my personal data only for the use of Philippine Red Cross for the belief of not divulging any information without my consent under R.A 10173 or the Data Privacy Act of 2012.</h6>
                        </hr>

                        <h6>Please click submit, if you have completely filled out the application form and validated all information.</h6>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                         <button type="submit" class="btn btn-danger btn-lg">Register</button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
              
            
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
       
      
    <?php           

        if(isset($_POST['submit'])){
          $fn = $_POST['fn'];
          $ln = $_POST['ln'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $cpass = $_POST['cpass'];
          $date_donated = $_POST['date_donated'];
          $a_type = "Trainee";
          $email= $_POST['email'];
          $cp_no = $_POST['cp_no'];
          $address = $_POST['address'];
          $bloodtype = $_POST['bloodtype'];
          $effectivity = $_POST['effectivity'];
          $maab_type = $_POST['maabtype_id'];
          $status = "Pending";
          $remarks = "Unpaid";
          $img_path = "uploads/pic.png";
            
            $chk = mysqli_query($con,"SELECT * from tblaccount where user = '".$user."'");
            $ct = mysqli_num_rows($chk);
            
            if($ct == 0){
            $insertacct = "INSERT INTO tbluserinfo (fn, ln, u_class, email, cp_no, address, bloodtype,img_path) values 
            ('" . $fn . "','" . $ln . "','" . $a_type . "', '" . $email . "', '" . $cp_no . "','" . $address . "','" . $bloodtype . "','" . $img_path . "' )";
             
           if(isset($_POST['pass'])){
                if($pass == $cpass){


                  mysqli_autocommit($con,TRUE);
                  if(!mysqli_query($con, $insertacct)){
                    die ("unable to add record " .  mysqli_error($con));
                    mysqli_rollback($con);
                    }else
                    {
                      $last_id = mysqli_insert_id($con);
                      
                      $insertacct1 = "INSERT INTO tblaccount (user, pass, status,a_type, date, ui_id) values 
                          ('" . $user . "', '" . $pass . "', '" . $status . "','" . $a_type . "', CURRENT_TIMESTAMP,'" . $last_id . "')"; 

                          $insertacct2 = "INSERT INTO tblmaab (maabtype_id, remarks, ui_id) values 
                          ( '" . $maab_type . "','" . $remarks . "','" . $last_id . "')"; 

                          $insertacct3 = "INSERT INTO tblblooddonation (date_donated,ui_id) values 
          
                          ('" . $date_donated . "','" . $last_id . "')";

                          $insertacct4 = "INSERT INTO tblcontactperson ( ui_id) values 
                          ('" . $last_id . "')";

                          if(!mysqli_multi_query($con, $insertacct1)){
                                die ("Unable to Add Info " .  mysqli_error($con));
                                mysqli_rollback($con);
                                }
                          else if(!mysqli_multi_query($con, $insertacct2)){
                            die ("unable to add record " .  mysqli_error($con));
                          mysqli_rollback($con);
                          }
                          else if(!mysqli_multi_query($con, $insertacct3)){
                            die ("unable to add record " .  mysqli_error($con));
                          mysqli_rollback($con);
                          }   
                           else if(!mysqli_multi_query($con, $insertacct4)){
                            die ("unable to add record " .  mysqli_error($con));
                          mysqli_rollback($con);
                          }         
                          else{
                              mysqli_commit($con);

                              echo "<script>alert('successfully registered!')</script>";
                              echo "<script>window.location='../login/login.html'</script";
                      }
                    }
                        mysqli_autocommit($con,FALSE);
                      }
                  }
                        else{
                            echo "Password Doesn't Match";
                            }

                                    
                                    
                            }
            else{ 
                                echo $_SESSION['duplicate'] = 1;
                                      echo "<script>alert('Username Not Available!')</script>";
                }
   }
 

?>
  
          <center><strong><a href="../login/login.html" class="mt-5 mb-3">Go back to Login Page</a></strong></center>
          <center><strong><a href="../indox/landing-page" class="mt-5 mb-3">Go back to Homepage</a></strong></center>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>

  <footer class="main-footer" >
    <div class="container">
   
      <strong>Copyright &copy; 2017 <a href="#">Team United</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<script src="../../plugins/fullcalendar/main.min.js"></script>
<script src="../../plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="../../plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="../../plugins/fullcalendar-interaction/main.min.js"></script>
<script src="../../plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>
                var today = new Date().toISOString().split("T")[0];
                  document.getElementsByName("effectivity")[0].setAttribute("max", today);

                   var today = new Date().toISOString().split("T")[0];
                  document.getElementsByName("bdate")[0].setAttribute("max", today);
                  

                  var today = new Date().toISOString().split("T")[0];
                  document.getElementsByName("date_donated")[0].setAttribute("max", today);
          
          var check = function (){
       if (document.getElementById('pass').value ==
        document.getElementById('cpass').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password Match';
        } else if (document.getElementById('pass').value !=
        document.getElementById('cpass').value){
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password Does Not Match';
        }
} 


$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })


</script>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>

<script>
  $(document).ready(function(){
  // check change event of the text field 
  $("#user").keyup(function(){
    // get text username text field value 
    var user = $("#user").val();

    // check username name only if length is greater than or equal to 8
    if(user.length >= 8)
    {
      $("#status").html('<img src="loader.gif" /> Checking availability...');
      // check username 
      $.post("username-check.php", {user: user}, function(data, status){
          $("#status").html(data);
      });
    }
    
  });
});
   $(document).ready(function(){
  // check change event of the text field 
  $("#email").keyup(function(){
    // get text username text field value 
    var email = $("#email").val();

    // check username name only if length is greater than or equal to 8
    if(email.length >= 10)
    {
      $("#emailstat").html('<img src="loader.gif" /> Checking availability...');
      // check username 
      $.post("username-check.php", {email: email}, function(data, status){
          $("#emailstat").html(data);
      });
    }
    
  });
});

   $(document).ready(function(){
  // check change event of the text field 
  $("#cp_no").keyup(function(){
    // get text username text field value 
    var cp_no = $("#cp_no").val();

    // check username name only if length is greater than or equal to 8
    if(cp_no.length = 11)
    {
      $("#cpstat").html('<img src="loader.gif" /> Checking availability...');
      // check username 
      $.post("username-check.php", {cp_no: cp_no}, function(data, status){
          $("#cpstat").html(data);
      });
    }
    
  });
});
  $(document).ready(function(){
  // check change event of the text field 
  $("#maab_id").keyup(function(){
    // get text username text field value 
    var maab_id = $("#maab_id").val();

    // check username name only if length is greater than or equal to 8
    if(maab_id.length >= 11)
    {
      $("#maabstatus").html('<img src="loader.gif" /> Checking availability...');
      // check username 
      $.post("username-check.php", {maab_id: maab_id}, function(data, status){
          $("#maabstatus").html(data);
      });
    }
    
  });
});
</script>
<script>
$("formcont").validate({
    rules: {
        bdate: {
            required: true,
            minAge: 13
        }
    },
    messages: {
        bdate: {
            required: "Please enter you date of birth.",
            minAge: "You must be at least 13 years old!"
        } 
    }
});
</script>

</body>
</html>
