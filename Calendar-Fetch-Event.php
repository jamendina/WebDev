<?php
    include "pages/connection.php";

    $json = array();
    $sqlQuery = "SELECT * FROM tblevents /*WHERE status = 'Active'*/ ORDER BY te_id";

    $result = mysqli_query($con, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($con);
    echo json_encode($eventArray);
?>