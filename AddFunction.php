<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_staff'])){

		
		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$pos_title = $_POST['pos_title'];
		$services_title = $_POST['services_title'];
		$bloodtype = $_POST['bloodtype'];
		$maabtype_id = $_POST['maabtype_id'];
		$name = $_POST['name'];
		$contactnumber = $_POST['contactnumber'];
		$relationship = $_POST['relationship'];
		$u_class = "Staff";
		$status = "Active";
		$stat_id = '1';
		$remarks = "Unpaid";
		$img_path = "uploads/pic.png";



					$insertacct = "INSERT INTO tbluserinfo (fn, ln, u_class,  bloodtype, img_path, stat_id) values 
						('" . $fn . "','" . $ln . "','" . $u_class . "','" . $bloodtype . "','" . $img_path . "','" . $stat_id . "')";

							mysqli_autocommit($con,TRUE);
							if(!mysqli_query($con, $insertacct)){
								die ("unable to add record " .  mysqli_error($con));
								mysqli_rollback($con);
								
							}else{
								
								$last_id = mysqli_insert_id($con);
								
									$insert = "INSERT INTO tblaccount (user, pass, status, a_type, date, ui_id) values 
						('" . $user . "', '" . $pass . "', '" . $status . "','" . $u_class . "', CURRENT_TIMESTAMP,'" . $last_id . "'); INSERT INTO tblmaab (maabtype_id, remarks, ui_id) values 
						( '" . $maabtype_id . "','" . $remarks . "','" . $last_id . "'); 
						INSERT INTO tblblooddonation (ui_id) values 
						('" . $last_id . "'); 
						INSERT INTO tbluposition (position, ui_id) values 
						('" . $pos_title . "','" . $last_id . "'); 
						INSERT INTO tbluservices (services_title, ui_id) values 
						('" . $services_title . "','" . $last_id . "'); 
						INSERT INTO tblcontactperson (name, contactnumber, relationship, ui_id) values 
						('" . $name . "','" . $contactnumber . "','" . $relationship . "','" . $last_id . "')";

							
								if(!mysqli_multi_query($con, $insert)){
									die ("unable to add record " .  mysqli_error($con));
									mysqli_rollback($con);
									}

								else{
										mysqli_commit($con);
									echo "<script>alert('Successfully Added New Account!')</script>";
									}
						
						mysqli_autocommit($con,FALSE);
						}
	}
?>
<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_pos'])){
		$position = $_POST['position'];


		$chk = mysqli_query($con,"SELECT * from tblposition where position = '".$position."'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$insertpos = mysqli_query($con,"INSERT INTO tblposition (position) values 
						('" . $position . "')");
						
						if($insertpos == true){
							$_SESSION['added'] = 1;
			}
		}
		else{ 

			
			 $_SESSION['duplicate'] = 1;
		}

	}
?>
<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_spec'])){
		$specialization = $_POST['specialization'];


		$chk = mysqli_query($con,"SELECT * from tblspecialization where specialization = '".$specialization."'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$insertpos = mysqli_query($con,"INSERT INTO tblspecialization (specialization) values 
						('" . $specialization . "')");
						
						if($insertpos == true){
							$_SESSION['added'] = 1;
						
							
			}
		}
		else{ 

			$_SESSION['duplicate'] = 1;
		}

	}
?>
<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_ser'])){
		$services_title = $_POST['services_title'];


		$chk = mysqli_query($con,"SELECT * from tblservices where services_title = '".$services_title."'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$insertpos = mysqli_query($con,"INSERT INTO tblservices (services_title) values 
						('" . $services_title . "')");
						
						if($insertpos == true){
							$_SESSION['added'] = 1;
			}
		}
		else{ 

			
			$_SESSION['duplicate'] = 1;
		}

	}
?>
<!--<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_sch'])){
		$school_name = $_POST['school_name'];


		$chk = mysqli_query($con,"SELECT * from tblschool where school_name = '".$school_name."'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$insertpos = mysqli_query($con,"INSERT INTO tblschool (school_name) values 
						('" . $school_name . "')");
						
			if($insertpos == true){
						 $_SESSION['added'] = 1;
			}
		}
		else{ 

			
			 $_SESSION['duplicate'] = 1;
		}

	}
?>-->
<!--<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_com'])){
		$company_name = $_POST['company_name'];


		$chk = mysqli_query($con,"SELECT * from tblcompany where company_name = '".$company_name."'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$insertpos = mysqli_query($con,"INSERT INTO tblcompany (company_name) values 
						('" . $company_name . "')");
						
			if($insertpos == true){
						 $_SESSION['added'] = 1;
			}
		}
		else{ 

			
			 $_SESSION['duplicate'] = 1;
		}

	}
?>-->

<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_instructor'])){

		$fn = $_POST['fn'];
		$mn = $_POST['mn'];
		$ln = $_POST['ln'];
		$fn = $_POST['fn'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$address = $_POST['address'];
		$cp_no = $_POST['cp_no'];
		$specialization = $_POST['specialization'];
		$bloodtype = $_POST['bloodtype'];
		$maab_id = $_POST['maab_id'];
		$maabtype_id = $_POST['maabtype_id'];
		$effectivity	 = $_POST['effectivity'];
		$u_class = "Instructor";
		$date_donated = $_POST['date_donated'];
		$name = $_POST['name'];
		$relationship = $_POST['relationship'];
		$contactnumber = $_POST['contactnumber'];
		$status = "Active";
		$stat_id = '1';
		$remarks = "Unpaid";
		$img_path = "uploads/pic.png";
		
		
		

			

				$insertacct = "INSERT INTO tbluserinfo (fn, mn, ln, u_class, cp_no, address, bloodtype, img_path, stat_id) values 
						('" . $fn . "', '" . $mn . "','" . $ln . "','" . $u_class . "', '" . $cp_no . "','" . $address . "','" . $bloodtype . "','" . $img_path . "','" . $stat_id . "')";
						 
				
							mysqli_autocommit($con,TRUE);
							if(!mysqli_query($con, $insertacct)){
								die ("unable to add record " .  mysqli_error($con));
								mysqli_rollback($con);
								
							}else{
								
								$last_id = mysqli_insert_id($con);
								
									$insert = "INSERT INTO tblaccount (user, pass, status, a_type, date, ui_id) values 
						('" . $user . "', '" . $pass . "', '" . $status . "','" . $u_class . "', CURRENT_TIMESTAMP,'" . $last_id . "'); 
						INSERT INTO tblmaab (maabtype_id, maab_id,  effectivity, remarks, ui_id) values 
						( '" . $maabtype_id . "', '" . $maab_id . "', '" . $effectivity . "','" . $remarks . "','" . $last_id . "'); 
						INSERT INTO tblblooddonation (date_donated,ui_id) values 
						('" . $date_donated . "','" . $last_id . "'); 
						INSERT INTO tbluspecialization (specialization, ui_id) values 
						('" . $specialization . "','" . $last_id . "');
						INSERT INTO tblcontactperson (name, contactnumber, relationship, ui_id) values 
						('" . $name . "', '" . $contactnumber . "', '" . $relationship . "','" . $last_id . "')";

							
								if(!mysqli_multi_query($con, $insert)){
									die ("unable to add record " .  mysqli_error($con));
									mysqli_rollback($con);
									}

								else{
										mysqli_commit($con);
									echo "<script>alert('Successfully Added New Account!')</script>";
									}
						
						mysqli_autocommit($con,FALSE);
						}
	}
?>
<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_trainee'])){

		$fn = $_POST['fn'];
		$mn = $_POST['mn'];
		$ln = $_POST['ln'];
		$fn = $_POST['fn'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$address = $_POST['address'];
		$cp_no = $_POST['cp_no'];
		$bloodtype = $_POST['bloodtype'];
		$maab_id = $_POST['maab_id'];
		$maabtype_id = $_POST['maabtype_id'];
		$effectivity	 = $_POST['effectivity'];
		$a_type = "Trainee";
		$date_donated = $_POST['date_donated'];
		$name = $_POST['name'];
		$relationship = $_POST['relationship'];
		$contactnumber = $_POST['contactnumber'];
		$status = "Active";
		$stat_id = '1';
		$remarks = "Unpaid";
		$img_path = "uploads/pic.png";
		
		

				$insertacct = "INSERT INTO tbluserinfo (fn, mn, ln, u_class, cp_no, address, bloodtype, img_path, stat_id) values 
						('" . $fn . "', '" . $mn . "','" . $ln . "','" . $a_type . "', '" . $cp_no . "','" . $address . "','" . $bloodtype . "','" . $img_path . "','" . $stat_id . "')";
						 
				
							mysqli_autocommit($con,TRUE);
							if(!mysqli_query($con, $insertacct)){
								die ("unable to add record " .  mysqli_error($con));
								mysqli_rollback($con);
								
							}else{
								
								$last_id = mysqli_insert_id($con);
								
									$insert = "INSERT INTO tblaccount (user, pass, status, a_type, date, ui_id) values 
						('" . $user . "', '" . $pass . "', '" . $status . "','" . $a_type . "', CURRENT_TIMESTAMP,'" . $last_id . "'); 
						INSERT INTO tblmaab (maabtype_id, maab_id,  effectivity, remarks, ui_id) values 
						( '" . $maabtype_id . "', '" . $maab_id . "', '" . $effectivity . "','" . $remarks . "','" . $last_id . "'); 
						INSERT INTO tblblooddonation (date_donated,ui_id) values 
						('" . $date_donated . "','" . $last_id . "');
						INSERT INTO tblcontactperson (name, contactnumber, relationship, ui_id) values 
						('" . $name . "', '" . $contactnumber . "', '" . $relationship . "','" . $last_id . "')";

							
								if(!mysqli_multi_query($con, $insert)){
									die ("unable to add record " .  mysqli_error($con));
									mysqli_rollback($con);
									}

								else{
										mysqli_commit($con);
									echo "<script>alert('Successfully Added New Account!')</script>";
									}
						
						mysqli_autocommit($con,FALSE);
						}
	}
?>
<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_addATs'])){
		$txt_id = $_POST['hidden_id'];
		$venue = $_POST['venue'];
		$chapter = $_POST['chapter'];
		$date = $_POST['date'];
		$title = $_POST['title'];

		
			$insertpos = mysqli_query($con,"INSERT INTO tbltrainingattended (ui_id, venue, chapter, date, title) values 
						('" . $txt_id . "','" . $venue . "','" . $chapter . "','" . $date . "','" . $title . "')");
						
			if($insertpos == true){
						 echo "<script>alert('Added Successfully!')</script>";
					}
				
			else{ 
			 echo "<script>alert('Unsuccessfull Add!')</script>";
		}

	}
?>

<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['addEvent'])){
		$title = $_POST['title'];
		$venue = $_POST['venue'];
		$description = $_POST['description'];
		$stat_id  = '5';
		$date_start  = $_POST['date_start'];
		$date_end  = $_POST['date_end'];
		$time_start  = $_POST['time_start'];
		$time_end  = $_POST['time_end'];
		$color = $_POST['color'];


			$insertpos = mysqli_query($con,"INSERT INTO tblevents (title, venue, description, stat_id, start, end, event_start_time, event_end_time, color) values 
						('" . $title . "','" . $venue . "','" . $description . "','" . $stat_id . "','" . $date_start . "','" . $date_end . "','" . $time_start . "','" . $time_end . "','" . $color . "')");
						
		if($insertpos == true){
			$_SESSION['added'] = 1;
			}
		
		else{ 

			
			 echo $_SESSION['error'] = 1;
		}

	}
?>
<?php 
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_add_cat'])){
		$cat_name = $_POST['cat_name'];
		$color = $_POST['color'];

		$chk = mysqli_query($con,"SELECT * from tblcategory where cat_name = '".$cat_name."' || color = '".$color."'");
		$ct = mysqli_num_rows($chk);

	if($ct == 0){
			$insertcategory = mysqli_query($con,"INSERT INTO tblcategory (cat_name, color) values 
						('" . $cat_name . "','" . $color . "')");
						
			if($insertcategory == true){
			echo $_SESSION['added'] = 1;
			}
		}
		else{ 

			
			 echo $_SESSION['duplicate'] = 1;
		}

	}
?>