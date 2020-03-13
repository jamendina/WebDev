<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header("location: ../system/indox/landing-page");
?>