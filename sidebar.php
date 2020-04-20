<?php
  include ('pages/connection.php');
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.html');
  }
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.html" class="brand-link">
      <img src="dist/img/prc-logo.png" alt="Philippine Red Cross Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Philippine Red Cross</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php  $user = mysqli_query($con,"SELECT tu.position, ui.img_path, CONCAT(ln, ', ', fn,'') as sname from tblaccount ta 
                                      inner join tbluserinfo ui ON ta.ui_id = ui.ui_id 
                                      left join tbluposition tu on ta.ui_id = tu.ui_id where ta.ui_id =  '".$_SESSION['uiid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                                echo ' '.$row['img_path'].' '; }?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
            <?php
                                             $user = mysqli_query($con,"SELECT tu.position, ui.img_path, CONCAT(ln, ', ', fn,'') as sname from tblaccount ta 
                                      inner join tbluserinfo ui ON ta.ui_id = ui.ui_id 
                                      left join tbluposition tu on ta.ui_id = tu.ui_id where ta.ui_id =  '".$_SESSION['uiid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                                echo ' 
                                                    
                                                    <a href="profile.html" class="d-block"> '.$row['sname'].'</a>';
                                                    
                                                   
                                                
                                            }?>
                                        
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <!--<span class="badge badge-info right">2</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="account.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Account Management
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="trainings.html" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Events/Trainings
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="extra.html" class="nav-link">
              <i class="nav-icon far fa-plus-square alt"></i>
              <p>
                Extra
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.html" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>