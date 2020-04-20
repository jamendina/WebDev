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
            <h1>Trainings and Events</h1>
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
          <?php 
                                    if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "System Administrator")) {}
                                       else {
                                              header ('Location: 404.php');
                                              # code...
                                            }   
 ?>


<?php 
  if(($_SESSION['role'] == "System Administrator")||($_SESSION['role'] == "Safety Services")){
    $id = $_POST['hidden_id'];
     $squery = mysqli_query($con, "SELECT * from tblevents where te_id = '".$id."'");
    $row = mysqli_fetch_array($squery);
echo'
          <div class="col-md-12">
           <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">Training/Event Info</li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                <form method="post"  id="formcont">
                   <input type="hidden" value="'.$row['te_id'].'" name="hidden_id" id="hidden_id"/>
                  <div class="tab-content clearfix">
                  
                                    
                <div class="active tab-pane" id="Binfo">
                      <!-- Post -->
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                       <label>Event Title :</label>
                        <input required name="edit_title" id="edit_title" class="form-control input-sm" type="text" placeholder="Event Title" value="'.$row['title'].'" />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Event Venue :</label>
                         <input required name="edit_venue" id="edit_venue" class="form-control input-sm" type="text" placeholder="Event Venue" value="'.$row['venue'].'" />
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                       <label>Event Description:</label>
                       <textarea name="edit_description" id="edit_description" class="form-control" type="text" placeholder="please input description">'.$row['description'].' </textarea>
                      </div>
                    </div>
                    
                  </div>
                  

                  <div class="row">
                      <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>Minimum Pax :</label>
                           <input required name="edit_min" id="edit_min" class="form-control input-sm" type="text" placeholder="Min. no Pax" value="'.$row['e_min'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"/>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                         <label>Maximum Pax :</label>
                                <input required name="edit_max" id="edit_max" class="form-control input-sm" type="text" placeholder="Max. no. Pax" value="'.$row['e_max'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"/>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>Start Date: (24 hours time format)</label>
                                         <input required name="edit_start" id="edit_start" class="form-control input-sm" type="datetime" value="'.$row['start'].'" min=';?>"<?php echo date('Y-m-d');?>"<?php echo'/>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                        <div class="col-xs-6">
                                          <label>End Date: (24 hours time format)</label>
                                         <input required name="edit_end" id="edit_end" class="form-control input-sm" type="datetime" value="'.$row['end'].'" min=';?>"<?php echo date('Y-m-d');?>"<?php echo'/>
                                        </div>';
                                        $date1 = strtotime($row['start']);
                                        $date2 = strtotime($row['end']);

                                        $diff = ceil(abs($date1 - $date2)/86400);
                                        echo '
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                           <label>Event Duration (Days):</label>
                                         <input required name="edit_day" id="edit_day" min="1" class="form-control input-sm" type="text"  placeholder="Day(s)" value="'.$diff.'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$" readonly/>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                        <div class="col-xs-6">
                                         <label>Event Fee :</label>
                                         <input name="edit_fee" id="edit_fee" class="form-control input-sm" type="text"  placeholder="Training Cost" value="'.$row['e_fee'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"/>
                          </div>
                        </div> 
                      </div>
               
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                       <label>Category :</label>

                                            <select name="edit_color" id="edit_color"  class="form-control input-sm" required="true" autocomplete="off">
                                    <option value="" disabled>Select Category</option>
                                       ';
                                         
                        
                                          $stat = mysqli_query($con, "SELECT * from tblcategory order by cat_name asc");
                                            while($row_stat = mysqli_fetch_array($stat))
                                            {
                                                 if($row['color'] == $row_stat['color'])
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['color'].'" style="'.$row_stat['color'].'" selected="selected">&#9724; '.$row_stat['cat_name'].'</option>
                                                    ';
                                                 }
                                                 else
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['color'].'" style="color:'.$row_stat['color'].';">&#9724; '.$row_stat['cat_name'].'</option>
                                                    ';
                                                 }
                                            }
                      
                        echo '</select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>Event Status:</label>
                                  <select name="edit_stat_id" id="edit_stat_id"  class="form-control input-sm" required="true" autocomplete="off">
                                    <option value="" disabled>Select Status</option>
                                       ';
                                          $stat = mysqli_query($con, "SELECT * from tblstat where status != 'Inactive' and status != 'Disapproved'");
                                            while($row_stat = mysqli_fetch_array($stat))
                                            {
                                                 if($row['stat_id'] == $row_stat['stat_id'])
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['stat_id'].'" selected="selected">'.$row_stat['status'].'</option>
                                                    ';
                                                 }
                                                 else
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['stat_id'].'">'.$row_stat['status'].'</option>
                                                    ';
                                                 }
                                            }
                        echo '
                                      
                                  </select>
                      </div>
                    </div>
                    
                  </div>
                    <hr/>
                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-sm" id="btn_edit_event" name="btn_edit_event"><i class="fa fa-check"></i> Save Changes</button>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                </form>
                </div>
                </div><!-- /.card-body -->
               
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        ';
        }?>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->
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
</body>
</html>
