<!-- ========= EDIT STAFF DATA =========== -->
<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_save']))
	{
	    $txt_id = $_POST['hidden_id'];
		$edit_fn = $_POST['edit_fn'];
		$edit_mn = $_POST['edit_mn'];
		$edit_ln = $_POST['edit_ln'];
		$edit_address = $_POST['edit_address'];
		$edit_cp_no = $_POST['edit_cp_no'];
		$edit_position = $_POST['edit_position'];
		$edit_services = $_POST['edit_services'];
		
		
	    $query = mysqli_query($con,"UPDATE tbluserinfo, tbluservices, tbluposition SET  tbluserinfo.fn = '".$edit_fn."', tbluserinfo.mn = '".$edit_mn."', tbluserinfo.ln = '".$edit_ln."', tbluserinfo.address = '".$edit_address."', tbluserinfo.cp_no = '".$edit_cp_no."', tbluposition.position = '".$edit_position."', tbluservices.services_title = '".$edit_services."' where tbluserinfo.ui_id = '".$txt_id."' and tbluservices.ui_id = '".$txt_id."' and tbluposition.ui_id = '".$txt_id."' ");

		
	    if($query == true){
	       
	        echo "<script>alert('Update Successfully!')</script>";
		    echo "<script>window.location='account.html'</script>";

	    }

		else {
			echo "<script>alert('Update Fail!')</script>";
		    echo "<script>window.location='account.html'</script>";
		}
	}
?>

<!-- ========= EDIT PROFILE DATA =========== -->
<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['edit_profiles']))
	{
	    $txt_id = $_POST['hidden_id'];
		$edit_fn = $_POST['edit_fn'];
		$edit_mn = $_POST['edit_mn'];
		$edit_ln = $_POST['edit_ln'];
		$edit_sn = $_POST['edit_sn'];
		$edit_address = $_POST['edit_address'];
		$edit_cp_no = $_POST['edit_cp_no'];
		$edit_sex = $_POST['edit_sex'];
		$edit_bt = $_POST['edit_bt'];
		$edit_email = $_POST['edit_email'];
		$edit_bdate = $_POST['edit_bdate'];
		$edit_civilstat = $_POST['edit_civilstat'];
		$edit_occupation = $_POST['edit_occupation'];
		$edit_educ_att = $_POST['edit_educ_att'];
		$edit_company = $_POST['edit_company'];
		$edit_datedonated = $_POST['edit_datedonated'];
		$edit_name = $_POST['edit_name'];
		$edit_contactnumber = $_POST['edit_contactnumber'];
		$edit_relationship = $_POST['edit_relationship'];
		$auth_pass= $_POST['auth_pass'];

		$checkpass = mysqli_query($con,"SELECT * from tblaccount where pass = '".$auth_pass."' && ui_id = '".$txt_id."' ");
		$ct = mysqli_num_rows($checkpass);

		if ($ct == 1) {
			echo "<script>alert('Password Correct!')</script>";

			$query = mysqli_query($con,"UPDATE tbluserinfo, tblblooddonation, tblcontactperson SET tbluserinfo.fn = '".$edit_fn."', tbluserinfo.mn = '".$edit_mn."', tbluserinfo.ln = '".$edit_ln."', tbluserinfo.sn = '".$edit_sn."', tbluserinfo.address = '".$edit_address."', tbluserinfo.cp_no = '".$edit_cp_no."', tbluserinfo.sex = '".$edit_sex."', tbluserinfo.bloodtype = '".$edit_bt."', tbluserinfo.civilstat = '".$edit_civilstat."', tbluserinfo.email = '".$edit_email."', tbluserinfo.bdate = '".$edit_bdate."', tbluserinfo.company = '".$edit_company."', tbluserinfo.occupation = '".$edit_occupation."', tbluserinfo.educ_att = '".$edit_educ_att."', tblblooddonation.date_donated = '".$edit_datedonated."', tblcontactperson.name = '".$edit_name."' , tblcontactperson.contactnumber = '".$edit_contactnumber."', tblcontactperson.relationship = '".$edit_relationship."'  where tbluserinfo.ui_id = '".$txt_id."' and tblblooddonation.ui_id = '".$txt_id."' and tblcontactperson.ui_id = '".$txt_id."'");
			if($query == true){
			    
			        echo "<script>alert('Update Successfully!')</script>";
		            echo "<script>window.location='profile.html'</script>";
	        }
	        else {

				echo "<script>alert('Update Failed!')</script>";
		        echo "<script>window.location='profile.html'</script>";
			}
	    }

		else {

			echo "<script>alert('Password Incorrect!')</script>";
			echo "<script>window.location='profile.html'</script>";
		}
	}
?>

<!-- ========= EDIT USERNAME / PASSWORD =========== -->
<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['edit_upw']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $edit_user = $_POST['edit_user'];
	    $edit_oldpass= $_POST['edit_oldpass'];
		$edit_newpass= $_POST['edit_newpass'];

		$checkpass = mysqli_query($con,"SELECT * from tblaccount where pass = '".$edit_oldpass."' && ui_id = '".$txt_id."' ");
		$ct = mysqli_num_rows($checkpass);

		if ($ct == 1) {
			# code...
	   		$query = mysqli_query($con,"UPDATE tblaccount SET user = '".$edit_user."', pass = '".$edit_newpass."' where ui_id = '".$txt_id."'");
	        echo "<script>alert('Edited Successfully, your session will restart after you click OK. ')</script>";
	        echo "<script>window.location='logout.html'</script>";
			   
		}
		else{
			echo "<script>alert('Old Password Incorrect!')</script>";
			echo "<script>window.location='profile.html'</script>";
            die ("Old Password Incorrect!" .  mysqli_error($con));
            mysqli_rollback($con);
            
		}
	}
?>

<!-- ========= EDIT MAAB =========== -->
<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_maab_edit']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $edit_maab_id = $_POST['edit_maab_id'];
	    $edit_maab_remarks= $_POST['edit_maab_remarks'];	
		$edit_maab_type= $_POST['edit_maab_type'];
		$edit_maab_effectivity= $_POST['edit_maab_effectivity'];

	    $query = mysqli_query($con,"UPDATE tblmaab SET maab_id = '".$edit_maab_id."', maabtype_id = '".$edit_maab_type."', remarks = '".$edit_maab_remarks."', effectivity = '".$edit_maab_effectivity."' where ui_id = '".$txt_id."'");
		
	    if($query == true){
	        echo "<script>alert('Successfully Updated MAAB Details!')</script>";
	    }

		else {
			echo "<script>alert('Unable to Update MAAB Details!')</script>";

		}
	}
?>
<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_save_trainee']))
	{
	    $txt_id = $_POST['hidden_id'];
		$edit_fn = $_POST['edit_fn'];
		$edit_mn = $_POST['edit_mn'];
		$edit_ln = $_POST['edit_ln'];
		$edit_address = $_POST['edit_address'];
		$edit_cp_no = $_POST['edit_cp_no'];
		
		
		
	    $query = mysqli_query($con,"UPDATE tbluserinfo SET  fn = '".$edit_fn."', mn = '".$edit_mn."', ln = '".$edit_ln."', address = '".$edit_address."', cp_no = '".$edit_cp_no."' where ui_id = '".$txt_id."' ");

		
	    if($query == true){
	       $_SESSION['edit'] = 1;
	       header("location: ".$_SERVER['REQUEST_URI']);

	    }

		else {
			$_SESSION['duplicate'] = 1;
			header("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>
<!-- ========= EDIT INSTRUCTOR STATUS =========== -->
<?php
		ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_stat']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $edit_status  = $_POST['edit_status'];

	   $query = mysqli_query($con,"UPDATE tbluserinfo SET stat_id = '".$edit_status."' where ui_id = '".$txt_id."' ");
	    if($query == true){
	        echo "<script>alert('Update Successfully!')</script>";
		    echo "<script>window.location='account.html'</script>";

	    }

		else {
			 echo "<script>alert('Update Failed!')</script>";
		    echo "<script>window.location='account.html'</script>";

		}
	}
?>

<!-- ========= PENDING APPROVAL =========== -->
<?php
		ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_accept']))
	{

	    $txt_id = $_POST['hidden_id'];
	    $edit_status = $_POST['edit_status'];

		
			
	   $query = mysqli_query($con,"UPDATE tblaccount SET status = '".$edit_status."' where a_id = '".$txt_id."' ");
	   
	    if($query == true){
	        echo "<script>alert('Account Successfully Approved!')</script>";
		    echo "<script>window.location='account.html'</script>";

	    }

		else {
			 echo "<script>alert('Account Approval Failed!')</script>";
		    echo "<script>window.location='account.html'</script>";

		}
	}
?>

<!-- ========= ASSIGN INSTRUCTOR =========== -->

<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_assign_ins']))
	{

		$txt_id = $_POST['hidden_id'];
		$instructor  = $_POST['instructor'];

		$chk = mysqli_query($con,"SELECT * from tblassignment where a_id = '".$instructor."' and te_id ='".$txt_id."'");
        $ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query  = mysqli_query($con,"INSERT into tblassignment (te_id, a_id) values 
						('" . $txt_id . "', '" . $instructor . "') ");

			if($query == true){
				 echo "<script>alert('Assigned Successfully!')</script>";
		    	 echo "<script>window.location='trainings.html'</script>";
				
			}
		}
			else{ 
 				 echo "<script>alert('Assigned Failed!')</script>";
		    	 echo "<script>window.location='trainings.html'</script>";
            
			}
		
	}
?>

<!-- ========= UPDATE TRAINING/EVENTS INFO =========== -->

<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_edit_event']))
	{

		$txt_id = $_POST['hidden_id'];
		$edit_title = $_POST['edit_title'];
		$edit_description = $_POST['edit_description'];
		$edit_min  = $_POST['edit_min'];
		$edit_max  = $_POST['edit_max'];
		$edit_hour  = $_POST['edit_hour'];
		$edit_day  = $_POST['edit_day'];
		$edit_fee  = $_POST['edit_fee'];
		$edit_venue  = $_POST['edit_venue'];
		$edit_stat_id  = $_POST['edit_stat_id'];
		$edited_services_id  = $_POST['edited_services_id'];


		
			$query = mysqli_query($con,"UPDATE tblevents SET title = '".$edit_title."', description = '".$edit_description."', e_fee = '".$edit_fee."', e_min = '".$edit_min."', e_max = '".$edit_max."', e_hours = '".$edit_hour."', e_days = '".$edit_day."', stat_id = '".$edit_stat_id."', venue = '".$edit_venue."', services_id = '".$edited_services_id."' where te_id = '".$txt_id."'");
			

			

			if($query == true){
				 echo "<script>alert('Updated Successfully!')</script>";
		    	 echo "<script>window.location='trainings.html'</script>";
				
			}
			else{ 
 				 echo "<script>alert('Update Failed!')</script>";
		    	 echo "<script>window.location='trainings.html'</script>";
            
			}
		
	}
?>








