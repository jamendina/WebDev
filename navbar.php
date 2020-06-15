<?php
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.html');
  }
  include ('pages/connection.php');
?>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="">
          <i class="far fa-bell"></i>
           <?php 
                    $present = date('d');
                    $npresent = $present + 3;
                    $presents = $npresent;

                    $upcoming = "SELECT * from tblevents where year(start) BETWEEN day(CURRENT_DATE()) and '".$presents."' and stat_id ='1'";
                    $query1 = mysqli_query($con, $upcoming);
                    $upcomingtotal= mysqli_num_rows($query1);
                    
                    $training = "SELECT * FROM tblevents WHERE day(start) >= day(CURRENT_DATE()) and stat_id ='1' and te_id  NOT IN (SELECT tblevents.te_id from tblevents JOIN tblassignment USING(te_id))";
                    $query2 = mysqli_query($con, $training);
                    $trainingtotal= mysqli_num_rows($query2);

                    $standby = "SELECT * from tblevents where YEAR(start) = YEAR(CURRENT_DATE()) and MONTH(start) = MONTH(CURRENT_DATE()) and stat_id='5'";
                    $query3 = mysqli_query($con, $standby);
                    $standbytotal= mysqli_num_rows($query3);

                    $cancelled = "SELECT * from tblevents where month(start) = month(CURRENT_DATE()) and stat_id ='3'";
                    $query4 = mysqli_query($con, $cancelled);
                    $cancelledtotal= mysqli_num_rows($query4);


                    $total = $upcomingtotal+$trainingtotal+$standbytotal+$cancelledtotal;

                    #non-staff notification
                    
                    $nsupcoming = "SELECT *, ter.ter_id as ter_id from tbleventres ter 
                                                left join tblevents te on ter.te_id = te.te_id where ui_id = '".$_SESSION['uiid']."' and day(start) BETWEEN day(CURRENT_DATE()) and day(CURRENT_DATE())+5 and stat_id ='1' ";
                    $nsquery1 = mysqli_query($con, $nsupcoming);
                    $nsupcomingtotal= mysqli_num_rows($nsquery1);

                    $nstotal = $nsupcomingtotal;

                    $insupcoming = "SELECT *, tt.assignment_id as assignment_id from tblassignment tt 
                                                left join tblevents te on tt.te_id = te.te_id
                                                
                                                where a_id = '".$_SESSION['userid']."' and YEAR(te.start) = YEAR(current_DATE())";
                    $insquery1 = mysqli_query($con, $insupcoming);
                    $insupcomingtotal= mysqli_num_rows($insquery1);

                    $instotal = $insupcomingtotal;

                    ?>
          <span class="badge badge-warning navbar-badge"><?php 
              if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Volunteer Services")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "International Humanitarian Law")){ echo $total;}
              # Non-Staff Notification
              elseif(($_SESSION['role'] == "Volunteer")||($_SESSION['role'] == "Non-Volunteer"))
                { echo $nstotal;}
              
              elseif($_SESSION['role'] == "Instructor")
                { echo $instotal;}

                ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">You have <?php 
              if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Volunteer Services")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "International Humanitarian Law")){ echo $total; echo ' Notifications'; }
              # Non-Staff Notification
              else if(($_SESSION['role'] == "Volunteer")||($_SESSION['role'] == "Non-Volunteer"))
                { echo $nstotal;}

              else if($_SESSION['role'] == "Instructor")
                { echo $instotal;}

              ?> </span>
          <div class="dropdown-divider"></div>
            <?php 
                      if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Volunteer Services")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "International Humanitarian Law")){
                  echo'
          <a href="trainings.html" class="dropdown-item">
          
            <i class="fas fa-envelope mr-2"></i>'; echo $upcomingtotal; echo' Upcoming Training/Event
          </a>';}
           # Non-Staff Notification
                      elseif(($_SESSION['role'] == "Volunteer")||($_SESSION['role'] == "Non-Volunteer")){

                  echo'
          <a href="trainings.html" class="dropdown-item">
          
            <i class="fas fa-envelope mr-2"></i>'; echo $nsupcomingtotal;
                       echo' Upcoming Training/Event this week
          </a>';}
          # Instructor Notification
                      elseif($_SESSION['role'] == "Instructor"){

                  echo'
          <a href="trainings.html" class="dropdown-item">
          
            <i class="fas fa-envelope mr-2"></i>'; echo $insupcomingtotal;
                       echo' Upcoming Training/Event this week
          </a>';}
           ?>
          <div class="dropdown-divider"></div>
           <?php 
                      if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Volunteer Services")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "International Humanitarian Law")){ echo'
          <a href="trainings.html" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>';echo $standbytotal;
            echo ' Training/Event on Standby
          </a>';}?>
          <div class="dropdown-divider"></div>
          <?php 
                      if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Volunteer Services")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "International Humanitarian Law")){ echo'
                  
          <a href="trainings.html" class="dropdown-item">
            <i class="fas fa-file mr-2"></i>'; echo $cancelledtotal;

                       echo ' Cancelled Training/Event
          </a> '; }?>
          <div class="dropdown-divider"></div>
         <?php if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "Disaster Management Services")||($_SESSION['role'] == "Blood Services")||($_SESSION['role'] == "Welfare Services")||($_SESSION['role'] == "Safety Services")||($_SESSION['role'] == "Volunteer Services")||($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "International Humanitarian Law")){ echo'
          <a href="trainings.html" class="dropdown-item">
            <i class="fas fa-file mr-2"></i>';
                      echo $trainingtotal;
                       echo ' Training/Event without Instructor
          </a> '; }?>
         
        </div>
      </li>
      <!-- Sign-out button -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="logout.html">
          <i class="fas fa-sign-out-alt"></i>
          <span class="badge badge-success navbar-badge"></span>
        </a>
       
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->