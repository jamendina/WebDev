<?php
  session_start();
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
  <section class="content">
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <?php 
                                
                                    $user = mysqli_query($con,"SELECT tu.fn, tu.mn, tu.ln, tu.sn, tu.occupation, tu.educ_att, tu.ui_id, tup.position, tu.email, tu.bdate, tu.sex, tu.civilstat, tu.cp_no, tu.u_class, tu.address, tm.maabtype_id, tm.maab_id, tm.effectivity, mt.type, bd.date_donated, tu.bloodtype, tu.company, tu.img_name, tu.img_path, tu.img_type, cp.name, cp.contactnumber, cp.relationship, ta.user, ta.pass from tblaccount ta 
                                        left join tbluserinfo tu ON ta.ui_id = tu.ui_id
                                        left join tblmaab tm ON ta.ui_id = tm.ui_id
                                        left join tblmaabtype mt ON mt.maabtype_id = tm.maabtype_id  
                                        LEFT JOIN tblblooddonation bd on ta.ui_id = bd.ui_id
                                        LEFT JOIN tblcontactperson cp on ta.ui_id = cp.ui_id
                                        left join tbluposition tup on ta.ui_id = tup.ui_id
                                        where ta.ui_id =  '".$_SESSION['uiid']."'
                                        ");
                                    while($row = mysqli_fetch_array($user)){
                                      $bdate = $row['bdate'];
                                      $old_date_timestamp = strtotime($bdate);
                                      $word_date = date('F j, Y', $old_date_timestamp);

                                      $date_donated = $row['date_donated'];
                                      $old_date_timestamp1 = strtotime($date_donated);
                                      $word_date_donated = date('F j, Y', $old_date_timestamp1);

                                      $_SESSION['user'] = $row['fn'].' '.$row['ln'].''.$row['mn'].''.$row['sn'].''.$row['occupation'].''.$row['email'].''.$row['bdate'].''.$row['sex'].''.$row['civilstat'].''.$row['cp_no'].''.$row['u_class'].''.$row['educ_att'].''.$row['address'].''.$row['type'].''.$row['maabtype_id'].''.$row['effectivity'].''.$row['maab_id'].''.$row['bloodtype'].''.$row['position'].''.$row['company'].''.$row['img_name'].''.$row['img_path'].''.$row['img_type'].''.$row['date_donated'];
                                        $age = $row['bdate'] - date('d-m-y');
                                        echo'
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="'.$row['img_path'].'"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">'.$row['ln'].', '.$row['fn'].' '.$row['mn'].'</h3>

                <p class="text-muted text-center">'.$row['position'].'</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <form method="post" action="" enctype="multipart/form-data">
                      <input type="file"  name="file_img" id="file_img" required><br>
                      <input type="submit" value="Upload" class="btn btn-success btn-block btn-sm" name="btn_upload"></input>
                    </form>
                  </li>
                  <li class="list-group-item">
                    <center><h6>Edit Account Security</h6></center>
                    <a type="button" class="btn btn-primary btn-block btn-sm" data-target="#editupw'.$row['ui_id'].'" data-toggle="modal">
                      <h6><i class="fa fa-edit"></i> <b>Username/Password</b></h6></a>
                      ';
                       include "editupw.php";
                       echo '

                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
          <div class="col-md-9">
           <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#Binfo" data-toggle="tab">Basic Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#Minfo" data-toggle="tab">Membership Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#Cinfo" data-toggle="tab">Contact Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#Cperson" data-toggle="tab">Contact Person</a></li>
                  <li class="nav-item" style="align:right;"><a class="nav-link" data-target="#editProf'.$row['ui_id'].'" data-toggle="modal" type="button"><i class="fa fa-edit"></i> Edit Data</a></li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                <form method="post">
                  <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                  <div class="tab-content clearfix">
                  
                                    
                    <div class="active tab-pane" id="Binfo">
                      <!-- Post -->
                     
                    <h5> <center>Basic Information</center></h5>
                  <div class="row">
                    <div class="col-sm-3  ">
                      <!-- text input -->
                      <div class="form-group">
                        <label>First Name:</label>
                        <input  type="text" readonly value="'.$row['fn'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name:</label>
                        <input  type="text" readonly value="'.$row['mn'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Last Name:</label>
                        <input  type="text" readonly value="'.$row['ln'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Suffix Name:</label>
                        <input  type="text" readonly value="'.$row['sn'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Birthdate:</label>
                        <input  type="text" readonly value="'.$word_date.'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sex:</label>
                        <input  type="text" readonly value="'.$row['sex'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Civil Status:</label>
                        <input  type="text" readonly value="'.$row['civilstat'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Educational Attainment/Course</label>
                        <input  type="text" readonly value="'.$row['educ_att'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Occupation/Year Level</label>
                         <input  type="text" readonly value="'.$row['occupation'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name of Company/School and Address</label>
                         <input  type="text" readonly value="'.$row['company'].'" class="form-control"/>
                      </div>
                    </div>
                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Blood Type:</label>
                        <input  type="text" readonly value="'.$row['bloodtype'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date Last Donated:</label>
                        <input  type="text" readonly value="'.$word_date_donated.'" class="form-control"/>
                      </div>
                    </div>
                   
                    </div>
                    </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="Minfo">
                     <h5><center>Membership Information</center></h5>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">MAAB Type</label>
                           
                          <input type="text" readonly value="'.$row['type'].'" class="form-control"/>   
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="inputName">Membership Effectivity </label>
                             <input  type="text" readonly value="'.$row['effectivity'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="inputName">Membership ID Number </label>
                          <input  type="text" readonly value="'.$row['maab_id'].'" class="form-control"/>

                      </div>
                    </div>
                  </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="Cinfo">
                     <h5><center>Contact Information</center></h5>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Email</label>
                          <input  type="text" readonly value="'.$row['email'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Phone Number </label>
                              <input  type="text" readonly value="'.$row['cp_no'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Address</label>
                      <input  type="text" readonly value="'.$row['address'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <!-- end line for Contact information-->
                  </div>
                  <div class="tab-pane" id="Cperson">
                    <h5><center>Contact Person Incase of Emergency</center></h5>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Contact Person</label>
                         <input  type="text" readonly value="'.$row['name'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Contact Number</label>
                             <input  type="text" readonly value="'.$row['contactnumber'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Relationship to the Person</label>
                          <input  type="text" readonly value="'.$row['relationship'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <!-- end line for Contact Person incase of emergency information-->

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                </form>
                </div>
                </div><!-- /.card-body -->
                </br>
                ';
                include "editProfModal.php";
                
                }
                 if(isset($_POST['btn_upload']))
                              {
                                  $filetmp = $_FILES["file_img"]["tmp_name"];
                                  $filename = $_FILES["file_img"]["name"];
                                  $filetype = $_FILES["file_img"]["type"];
                                  $filepath = "uploads/".$filename;

                                  move_uploaded_file($filetmp, $filepath);

                                  $sql = mysqli_query($con,"UPDATE tbluserinfo SET img_name = '".$filename."', img_path = '".$filepath."', img_type ='".$filetype."' where ui_id =  '".$_SESSION['uiid']."'  ");
                                  
                                  echo $_SESSION['upload'] = 1;
                                 
                              }
                             
                        

                        ?>
            
            
          </div>
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
