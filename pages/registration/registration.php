<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Philippine Red Cross</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
   <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="shortcut icon" type="text/css" href="../login/logo.png">

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
<body class="hold-transition skin-blue layout-top-nav" style="background-image:url('a.jpg'); ">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
    <div class="col-sm-8 col-sm-offset-2">
        <label></label>
            <img src="../../logo.png" width="65px" align="left"><center><p style="color:black; font-weight:bold; font-size:30px;">PHILIPPINE RED CROSS REGISTRATION FORM</p></center>
    </div>
     
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
    

      <!-- Main content --><br><br>

      <section class="content">
      <div class="row">
      <div class="col-sm-10 col-sm-offset-1 form-box">
               <div class="box box-danger">
            <div class="box-header with-border" style="background-color: #dc4735; color:white;">
              <h3 class="box-title">Setup your account: (fields with * are required)</h3>
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form role="form"  action="" method="post" id="formcont">
             
        <div class="box-body">
          <div class="col-xs-12">
            <div>
              <h4 class="box-title" style="text-align:center">Basic Information</h4>
            </div>  
        </div>
           <div class="col-xs-6">
                      <label>Account Type <b style="color: red;">*</b></label>
                      <div class="input-group">
                      <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                            </div>
                      <select class="form-control" id="a_type" name="a_type" required>
                        <option disabled selected>Type of Account</option>
                        <option value="Volunteer">Volunteer</option>
                        <option value="Non-Volunteer">Non-Volunteer</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-xs-12">

                      
                    </div>
        <div class="col-xs-6">
          
          <label>First Name: <b style="color: red;">*</b></label>
          <div class="input-group">
                      <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                            </div>
            <input type="text" class="form-control" name="fn" id="fn" placeholder="First Name" onKeyPress="return ValidateAlpha(event);" required>
                </div>
                 </div>
        <div class="col-xs-6">
          
          <label>Last Name: <b style="color: red;">*</b></label>
          <div class="input-group">
                      <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                            </div>
            <input type="text" class="form-control" name="ln" id="ln" placeholder="Last Name" onKeyPress="return ValidateAlpha(event);" required>

                </div></div>

                     <div class="col-xs-6">
                        <label>Blood Type: <b style="color: red;">*</b></label>
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-tint"></i>
                            </div>
                        <select class="form-control" id="bloodtype" name="bloodtype" autocomplete="off" >
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
                  <div class="col-xs-6">
                        <label>Are you a blood donor: <b style="color: red;">*</b> </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-user"></i>
    
                            </div>
                            <select class="form-control" id="donor" name="donor" required autocomplete="off" onchange="showDiv(this)">
                        <option  value="" disabled selected>Yes/No</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>

                      </select>
                        
                        </div>
                 </div> 

                <div class="col-xs-6" id="hidden_div" style="display:none;">
                     
                                  <label>Date Last Donated: <b style="color: red;">*</b> </label>
                                  <div class="input-group">
                                      <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                      </div>
                                   <input type="date" name="date_donated" id="date_donated"  class="form-control form-control-line">
                                  </div>
                         
                  </div>

                 <div class="col-xs-12">

                      <hr></hr>
                    </div>

        <div class="col-xs-12">
            <div>
              <h4 class="box-title" style="text-align:center">Membership Information</h4>
            </div>  
        </div>
                 <div class="col-xs-6">
                     <label>Type of Membership: <b style="color: red;">*</b></label>

                        <div class="input-group">
                        <div class="input-group-addon">
                         <i class="fa fa-bookmark"></i>
                        </div>
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
                    <div class="col-xs-6">
                     <label>Membership ID Effectivity: <b style="color: red;">*</b></label>

                        <input type="date" class="form-control" name="effectivity" id="effectivity" required>
                     
                    </div>
        <div class="col-xs-12">

                      <hr></hr>
                    </div>

        <div class="col-xs-12">
            <div>
              <h4 class="box-title" style="text-align:center">Contact Information</h4>
            </div>  
        </div>
         <div class="col-xs-6">
            <label>Email: <b style="color: red;">*</b></label>
                         <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-envelope"></i>
        
                            </div>
                         <input type="email"  id="email" placeholder="example@email.com" class="form-control form-control-line" name="email" required />
                         </div><div id="emailstat"></div>
                 </div>


               <div class="col-xs-6">
                <label>Phone Number: <b style="color: red;">*</b></label><br>
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-mobile-phone"></i>
                            </div>
                        <input type="text" placeholder="Phone Number" class="form-control" name="cp_no" id="cp_no" onkeypress="javascript:return isNumber(event)" pattern="^[0-9]{10,12}$"  maxlength="11" required>
                        </div><div id="cpstat"></div>
                 </div>
               <div class="col-xs-6">
                <label>Address: <b style="color: red;">*</b></label><br>
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-home"></i>
    
                            </div>
                        <input type="text" name="address" placeholder="Address" id="address" class="form-control form-control-line" required>
                        </div>
                 </div>
                 
                    <div class="col-xs-12">

                      <hr><h4 style="text-align:center">Account Security Information</h4></hr>
                    </div>         

        <div class="col-xs-6"><label>Username: <b style="color: red;">*</b></label><br>
             <div class="input-group">

                                                <div class="input-group-addon">
                                                  <i class="fa fa-user-secret"></i>
                            
                                                </div>
            <input type="text" class="form-control" id="user" name="user" placeholder="Username" pattern="^.*(?=.{8,})(?=.*[a-zA-Z])(?!.*\s).*$" required title="8 characters up, should contain letters, and no blank spaces">
            </div><div id="status"></div>

                </div>
         <div class="col-xs-6"><label>Password: <b style="color: red;">*</b></label><br>
             <div class="input-group">
                                                <div class="input-group-addon">
                                                  <i class="fa fa-lock"></i>
                            
                                                </div>
            
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password"  pattern="^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?!.*\s)(?=.*[A-Z]).*$" required title="8 characters up, should contain letters, capital letters, digits and no blank spaces" required onkeyup='check()'></div>

                </div>

         <div class="col-xs-6"><label>Confirm Password: <b style="color: red;">*</b></label><br>
             <div class="input-group">
                                                <div class="input-group-addon">
                                                  <i class="glyphicon glyphicon-log-in"></i>
                            
                                                </div>
            <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password"  required onkeyup='check()'></div><span id="message"></span>

                </div>
          
            
                    
                    
                    <div class="col-xs-12">
                      <hr><h5> <input type="checkbox" name="confirm" autocomplete="off" required> I hereby affirm that all the above information is complete and accurate. I know that any false or misleading information given by me can make me ineligible for admission or subject to dismissal. I also hereby provide my personal data only for the use of Philippine Red Cross for the belief of not divulging any information without my consent under R.A 10173 or the Data Privacy Act of 2012.</h5></hr>

            <h5>Please click submit, if you have completely filled out the application form and validated all information.</h5>
                    </div>
        <div class="col-sm-8 col-sm-offset-2">
        <label></label>
            <button type="submit" name="submit" class="btn btn-danger btn-block " style="height:50px;">Register</button>
        </div>
              </div>
        <div class="col-sm-8 col-sm-offset-5">
        <label></label><br>
                              <strong><a href="../login/login" class="mt-5 mb-3">Go back to Login Page</a></strong><br/>
                              <strong><a href="../indox/landing-page" class="mt-5 mb-3">Go back to Homepage</a></strong>
                            </div>
              <!-- /.box-body -->
        
            </form>
    <?php           

        if(isset($_POST['submit'])){
          $fn = $_POST['fn'];
          $ln = $_POST['ln'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $cpass = $_POST['cpass'];
          $date_donated = $_POST['date_donated'];
          $a_type = $_POST['a_type'];
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
                              echo "<script>window.location='../login/login'</script";
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
  
          </div>
      </div>
      </div>

      </section>
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

<!-- jQuery 3 -->
<script src="../../plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/moment/min/moment.min.js"></script>
<script src="../../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
$(document).ready(function() {

    $("#formcont").validate({
        rules: {
            name: {
                required: true
            },
            edit_min: {
          required: function(element) {
            return $('[name="edit_max"]').is(':filled');
        },
                digits: true,
                min: 1
            },
            edit_max: {
          required: function(element) {
            return $('[name="edit_min"]').is(':filled');
        },
                digits: true,
                min: function(element) {
            return parseInt($('[name="edit_min"]').val());
        }
            },
            duration: {
                digits: true,
                min: 1
            },
            price_per_person: {
                digits: true,
                min: 1
            }
        }
    });

});


</script>
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
