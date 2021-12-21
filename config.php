<?php
$con = new mysqli('localhost', 'root', '', 'sms');

if ($con == FALSE) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
    // die(mysqli_error($con));
}
