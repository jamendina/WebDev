<?php
include "pages/connection.php";

$te_id = $_POST['te_id'];
$venue = $_POST['venue'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sqlUpdate = "UPDATE tblevents SET title='" . $title . "',start='" . $start . "',venue='" . $venue . "',end='" . $end . "' WHERE te_id=" . $te_id;

mysqli_query($con, $sqlUpdate);

mysqli_close($con);

?>