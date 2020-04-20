<?php
	ob_start();
        include "pages/connection.php";
	if(isset($_POST['btn_accept']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $edit_status = $_POST['edit_status'];

		
			
	   $query = mysqli_query($con,"UPDATE tblaccount SET status = '".$edit_status."' where a_id = '".$txt_id."' ");
	    if($query == true){
                    //##########################################################################
                    // ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
                    // Visit www.itexmo.com/developers.php for more info about this API
                    //##########################################################################
                    function itexmo($number,$message,$apicode){
                    $url = 'https://www.itexmo.com/php_api/api.php';
                    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
                    $param = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($itexmo),
                        ),
                    );
                    $context  = stream_context_create($param);
                    return file_get_contents($url, false, $context);
                  }
                    //##########################################################################
                  if ($edit_status == "Active") {
                      # code...
                  
                        $sql = "SELECT tu.cp_no, ta.a_id from tblaccount ta 
                                        left join tbluserinfo tu ON ta.ui_id = tu.ui_id
                                        where ta.a_id = '".$txt_id."'";
                        $result = mysqli_query($con, $sql);
                        $datas = array();
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $datas[] = $row;
                                    //echo $row['num'];
                                    # code...
                                }
                            }

                            foreach($datas as $data){
                                $number = $data['cp_no'];
                                $msg = "Your Account Request is now Approved \nfrom Philippine Red Cross Albay Legazpi City Chapter!";
                                $api = "TR-PRC-A772543_4QD1X";

                                $result = itexmo($number,$msg,$api);
                                      if ($result == ""){
                                    echo "<script>alert('iTexMo: No response from server!!!
                                    Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
                                    Please CONTACT US for help.')</script> ";  
                                    }
                                    else if ($result == 0){
                                        echo "<script>alert('Account Approved!')</script> ";  
                                    }
                                    else if ($result==1) {
                                            echo "<script>alert('Invalid Number.!')</script>";
                                    }
                                    else if ($result==2) {
                                            echo "<script>alert('Number not Supported.!')</script>";
                                    }
                                    else if ($result==3) {
                                            echo "<script>alert('Invalid ApiCode.!')</script>";
                                    }
                                    else if ($result==4) {
                                            echo "<script>alert('Maximum Message per day reached. This will be reset every 12MN.!')</script>";
                                    }
                                    else if ($result==5) {
                                            echo "<script>alert(' Maximum allowed characters for message reached.!')</script>";
                                    }
                                    else if ($result==6) {
                                            echo "<script>alert('System OFFLINE.!')</script>";
                                    }
                                    else if ($result==7) {
                                            echo "<script>alert('Expired ApiCode.!')</script>";
                                    }
                                    else if ($result==8) {
                                            echo "<script>alert('iTexMo Error. Please try again later.!')</script>";
                                    }
                                    else if ($result==9) {
                                            echo "<script>alert('Invalid Function Parameters.!')</script>";
                                    }
                                    else if ($result==10) {
                                            echo "<script>alert('Recipient's number is blocked due to FLOODING, message was ignored.!')</script>";
                                    }
                                    else if ($result==11) {
                                            echo "<script>alert('Recipient's number is blocked temporarily due to HARD sending (after 3 retries of sending and message still failed to send) and the message was ignored. Try again after an hour.!')</script>";
                                    }
                                    else if ($result==12) {
                                            echo "<script>alert('Invalid request. You can't set message priorities on non corporate apicodes.!')</script>";
                                    }      
                                    
                                
                            }
                            }
                            elseif ($edit_status == "Disapproved") {
                      # code...
                  
                        $sql = "SELECT tu.cp_no, ta.a_id from tblaccount ta 
                                        left join tbluserinfo tu ON ta.ui_id = tu.ui_id
                                        where ta.a_id = '".$txt_id."'";
                        $result = mysqli_query($con, $sql);
                        $datas = array();
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $datas[] = $row;
                                    //echo $row['num'];
                                    # code...
                                }
                            }

                            foreach($datas as $data){
                                $number = $data['cp_no'];
                                $msg = "Your Account Request is Disapproved \nfrom Philippine Red Cross Albay Legazpi City Chapter!";
                                $api = "TR-PRC-A772543_4QD1X";

                                $result = itexmo($number,$msg,$api);
                                      if ($result == ""){
                                    echo "<script>alert('iTexMo: No response from server!!!
                                    Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
                                    Please CONTACT US for help.')</script> ";  
                                    }
                                    else if ($result == 0){
                                    $_SESSION['approved'] = 1;
                                     header("location: ".$_SERVER['REQUEST_URI']);
                                    }
                                    else if ($result==1) {
                                            echo "<script>alert('Invalid Number.!')</script>";
                                    }
                                    else if ($result==2) {
                                            echo "<script>alert('Number not Supported.!')</script>";
                                    }
                                    else if ($result==3) {
                                            echo "<script>alert('Invalid ApiCode.!')</script>";
                                    }
                                    else if ($result==4) {
                                            echo "<script>alert('Maximum Message per day reached. This will be reset every 12MN.!')</script>";
                                    }
                                    else if ($result==5) {
                                            echo "<script>alert(' Maximum allowed characters for message reached.!')</script>";
                                    }
                                    else if ($result==6) {
                                            echo "<script>alert('System OFFLINE.!')</script>";
                                    }
                                    else if ($result==7) {
                                            echo "<script>alert('Expired ApiCode.!')</script>";
                                    }
                                    else if ($result==8) {
                                            echo "<script>alert('iTexMo Error. Please try again later.!')</script>";
                                    }
                                    else if ($result==9) {
                                            echo "<script>alert('Invalid Function Parameters.!')</script>";
                                    }
                                    else if ($result==10) {
                                            echo "<script>alert('Recipient's number is blocked due to FLOODING, message was ignored.!')</script>";
                                    }
                                    else if ($result==11) {
                                            echo "<script>alert('Recipient's number is blocked temporarily due to HARD sending (after 3 retries of sending and message still failed to send) and the message was ignored. Try again after an hour.!')</script>";
                                    }
                                    else if ($result==12) {
                                            echo "<script>alert('Invalid request. You can't set message priorities on non corporate apicodes.!')</script>";
                                    }      
                                    
                                
                            }
                            }
                    
	    }

		else {
			echo "<script>alert('Duplicate Entry.!')</script>";
            echo "<script>window.location='account.php'</script>";
		}
	}
?>