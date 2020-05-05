	<?php
include "pages/connection.php";
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
$title = isset($_POST['title']) ? $_POST['title'] : "";
$venue = isset($_POST['venue']) ? $_POST['venue'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";
$description = isset($_POST['description']) ? $_POST['description'] : "";
$color = $_POST['color'];
$stat_id = '5';

$sqlInsert = "INSERT INTO tblevents (title,venue,start,end,stat_id,color,description) VALUES ('".$title."','".$venue."','".$start."','".$end."','".$stat_id."','".$color."','".$description."')";


$result = mysqli_query($con, $sqlInsert);


			if (! $result) {
			    $result = mysqli_error($con);
			}
}

header('Location: '.$_SERVER['HTTP_REFERER']);
?>