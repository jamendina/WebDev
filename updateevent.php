<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<?php include"head-css.php"; ?>

<body class="hold-transition skin-red fixed sidebar-mini">
<div class="wrapper">
    <?php 
        ob_start();
        include "pages/connection.php";
        ?>
         <?php include('header.php'); ?>
        <?php include('sidebar.php'); ?>
    
    <div class="content-wrapper">
        <section class="content-header">
      <h1>
        Dashboard
        <small>Event/Training</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="eventlist.php">Event/Trainings</a></li>
        <li class="active">Update Event/Trainings</a></li>
      </ol>
    </section>
    <section class="content">
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
  <div class="col-lg-12">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Update Event/Training</h3>
      </div>
      	<div class="box-body table-responsive">
      	  <form class="form-horizontal form" method="post" id="formcont">
      	  	<div class="box-body">
                                
                                    <input type="hidden" value="'.$row['te_id'].'" name="hidden_id" id="hidden_id"/>
                                    <div class="col-xs-6">
					                        <label>Event Title :</label>
					                        <input required name="edit_title" id="edit_title" class="form-control input-sm" type="text" placeholder="Event Title" value="'.$row['title'].'" />
					                    
                                        
                                    </div>
                                    <div class="col-xs-6">
					                        <label>Event Venue :</label>
					                        <input required name="edit_venue" id="edit_venue" class="form-control input-sm" type="text" placeholder="Event Venue" value="'.$row['venue'].'" />
					                    
                                    </div>
                                   
                                    <div class="col-xs-6">
                                            <label>Requesting Party:</label>       
						                     <select class="form-control" id="department" name="department" required autocomplete="off" onchange="showDep(this)">
						                        <option value="" disabled>Select</option>
						                        <option value="school">School</option>
						                        <option value="company">Company</option>
						                        <option value="chapter">Chapter</option>

						                     </select>
                                     </div>
                                     <div class="col-xs-6" id="hidden_chap" style="display:none;">
                                     	    <label>Select Services</label>
                           					 <select class="form-control" id="edited_services_id" name="edited_services_id">
                                        		<option  value="" disabled>Select</option>
                                        ';
                        
                                          $stat = mysqli_query($con, "SELECT * from tblservices");
                                            while($row_stat = mysqli_fetch_array($stat))
                                            {
                                                 if($row['services_id'] == $row_stat['services_id'])
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['services_id'].'" selected="selected">'.$row_stat['services_title'].'</option>
                                                    ';
                                                 }
                                                 else
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['services_id'].'">'.$row_stat['services_title'].'</option>
                                                    ';
                                                 }
                                            }
                       					 echo'
                                      </select>
                                 
                         
                  					</div>
                   					<div class="col-xs-6" id="hidden_dep" style="display:none;">
                     
                                  			<label>Select school</label>
                                       		 <select class="form-control" id="edited_s_id" name="edited_s_id" autocomplete="off" onchange="showSchool(this)">
                                       			<option  value="" disabled selected>Select School</option>
                                        ';
                        
                                          $stat = mysqli_query($con, "SELECT * from tblschool");
                                            while($row_stat = mysqli_fetch_array($stat))
                                            {
                                                 if($row['s_id'] == $row_stat['s_id'])
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['s_id'].'" selected="selected">'.$row_stat['school_name'].'</option>
                                                    ';
                                                 }
                                                 else
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['s_id'].'">'.$row_stat['school_name'].'</option>
                                                    ';
                                                 }
                                            }
                        				echo '
                                         		<option value="others">others</option>
                                      		</select>
                                 
                         
                  					</div>
                   					<div class="col-xs-6" id="hidden_school" style="display:none;">
                     
                                  			<label>Input School Name:</label>
                                  			<input type="text" name="insert_school_name" id="insert_school_name"  class="form-control form-control-line">
                                  
                  					</div>

				                    <div class="col-xs-6" id="hidden_dep2" style="display:none;">
				                     
				                            <label>Select company</label>
				                             <select class="form-control" id="edited_c_id" name="edited_c_id" autocomplete="off" onchange="showCompany(this)">
				                                <option value="" disabled selected>Select Company</option>
				                        '; 
				                        
				                                          $stat = mysqli_query($con, "SELECT * from tblcompany");
				                                            while($row_stat = mysqli_fetch_array($stat))
				                                            {
				                                                 if($row['c_id'] == $row_stat['c_id'])
				                                                 {
				                                                    echo '
				                                                    <option value="'.$row_stat['c_id'].'" selected="selected">'.$row_stat['company_name'].'</option>
				                                                    ';
				                                                 }
				                                                 else
				                                                 {
				                                                    echo '
				                                                    <option value="'.$row_stat['c_id'].'">'.$row_stat['company_name'].'</option>
				                                                    ';
				                                                 }
				                                            }
				                        echo '
				                                <option value="others">others</option>
				                            </select>
				                                
				                         
				                  	</div>
				                   	<div class="col-xs-6" id="hidden_company" style="display:none;">
				                     
				                            <label>Input Company Name:</label>
				                                <input type="text" name="insert_company_name" id="insert_company_name"  class="form-control form-control-line">
				                    </div>
                                     
                                     <div class="col-xs-6">
                                            <label>Event Description:</label>
                      							<textarea name="edit_description" id="edit_description" class="form-control" type="text" placeholder="please input description">'.$row['description'].' </textarea>
                                     </div>
                                      <div class="col-xs-6">
                                            <label>Minimum Pax :</label>
                        						<input required name="edit_min" id="edit_min" class="form-control input-sm" type="text" placeholder="Min. no Pax" value="'.$row['e_min'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"/>
                                     </div>
                                   
                                    <div class="col-xs-6">
                                            <label>Maximum Pax :</label>
                       							 <input required name="edit_max" id="edit_max" class="form-control input-sm" type="text" placeholder="Max. no. Pax" value="'.$row['e_max'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"/>
                                     </div>
                                   
                                     
                                    <div class="col-xs-6">
                                      <label>Start Date: (24 hours time format)</label>
                                     <input required name="edit_start" id="edit_start" class="form-control input-sm" type="datetime" value="'.$row['start'].'" min=';?>"<?php echo date('Y-m-d');?>"<?php echo'/>
                                    </div>
                                    <div class="col-xs-6">
                                      <label>End Date: (24 hours time format)</label>
                                     <input required name="edit_end" id="edit_end" class="form-control input-sm" type="datetime" value="'.$row['end'].'" min=';?>"<?php echo date('Y-m-d');?>"<?php echo'/>
                                    </div>';
                                    $date1 = strtotime($row['start']);
                                    $date2 = strtotime($row['end']);

                                    $diff = ceil(abs($date1 - $date2)/86400);
                                    echo '
                                   <div class="col-xs-6">
                                            <label>Event Duration (Days):</label>
                                     <input required name="edit_day" id="edit_day" min="1" class="form-control input-sm" type="text"  placeholder="Day(s)" value="'.$diff.'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$" readonly/>
                                     </div>
                                    <div class="col-xs-6">
                                            <label>Event Fee :</label>
                        						 <input name="edit_fee" id="edit_fee" class="form-control input-sm" type="text"  placeholder="Training Cost" value="'.$row['e_fee'].'" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$"/>
                                     </div>
                                     <div class="col-xs-6">
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
                                     <div class="col-xs-6">
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
                                     <div class="">
                                        <div class="box-footer">
                                            <button  type="submit" class="btn btn-primary btn" id="btn_edit_event" name="btn_edit_event"> Save</button>
                                        </div>
                                    </div>
                                    </div>
      	  </form>
      	</div>

 	   
  </div>           
</div>';

/**include "updatefunction.php";**/
        
          
}
?>              </div>
            </section>
        </div>
  

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?php include "footer.php";  ?>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script>
      

       function showDep(select){
        if(select.value=='school'){
          document.getElementById('hidden_dep').style.display= "block";
          document.getElementById('hidden_dep2').style.display= "none";
          document.getElementById('hidden_company').style.display= "none";
          document.getElementById('hidden_chap').style.display= "none";

        } else if(select.value=='company'){
          document.getElementById('hidden_dep2').style.display= "block";
          document.getElementById('hidden_dep').style.display= "none";
          document.getElementById('hidden_school').style.display= "none";
          document.getElementById('hidden_chap').style.display= "none";

        } else if(select.value=='chapter'){
          document.getElementById('hidden_chap').style.display= "block";
          document.getElementById('hidden_dep2').style.display= "none";
          document.getElementById('hidden_dep').style.display= "none";
          document.getElementById('hidden_school').style.display= "none";
        }
      }
      
      function showSchool(select){
        if(select.value=='others'){
          document.getElementById('hidden_school').style.display= "block";
          document.getElementById('hidden_dep').style.display= "none";
          document.getElementById('hidden_chap').style.display= "none";
        } else {
          document.getElementById('hidden_school').style.display= "none";
        }
      }


      function showCompany(select){
        if(select.value=='others'){
          document.getElementById('hidden_company').style.display= "block";
          document.getElementById('hidden_dep2').style.display= "none";
          document.getElementById('hidden_chap').style.display= "none";
        } else {
          document.getElementById('hidden_company').style.display= "none";

        }
      }
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

