<?php
if(isset($_POST['user']))
{
	// include Database connection file 
	include("../connection.php");

	$user = mysqli_real_escape_string($con, $_POST['user']);

	$query = "SELECT user FROM tblaccount WHERE user = '$user'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		// username is already exist 
		echo '<div style="color: red;"> <b>'.$user.'</b> is already in use! </div>';
	}
	else
	{
		// username is avaialable to use.
		echo '<div style="color: green;"> <b>'.$user.'</b> is avaialable! </div>';
	}
}
?>
<?php
if(isset($_POST['maab_id']))
{
	// include Database connection file 
	include("../connection.php");

	$maab_id = mysqli_real_escape_string($con, $_POST['maab_id']);

	$query = "SELECT maab_id FROM tblmaab WHERE maab_id = '$maab_id'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		// maab_id is already exist 
		echo '<div style="color: red;"> <b>'.$maab_id.'</b> is already in use! </div>';
	}
	else
	{
		// maab_id is avaialable to use.
		echo '<div style="color: green;"> <b>'.$maab_id.'</b> is avaialable! </div>';
	}
}
?>
<?php
if(isset($_POST['email']))
{
	// include Database connection file 
	include("../connection.php");

	$email = mysqli_real_escape_string($con, $_POST['email']);

	$query = "SELECT email FROM tbluserinfo WHERE email = '$email'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		// maab_id is already exist 
		echo '<div style="color: red;"> <b>'.$email.'</b> is already in use! </div>';
	}
	else
	{
		// maab_id is avaialable to use.
		echo '<div style="color: green;"> <b>'.$email.'</b> is avaialable! </div>';
	}
}
?>

<?php
if(isset($_POST['cp_no']))
{
	// include Database connection file 
	include("../connection.php");

	$cp_no = mysqli_real_escape_string($con, $_POST['cp_no']);

	$query = "SELECT cp_no FROM tbluserinfo WHERE cp_no = '$cp_no'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		// maab_id is already exist 
		echo '<div style="color: red;"> <b>'.$cp_no.'</b> is already in use! </div>';
	}
	else
	{
		// maab_id is avaialable to use.
		echo '<div style="color: green;"> <b>'.$cp_no.'</b> is avaialable! </div>';
	}
}
?>