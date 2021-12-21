<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM studentdetails WHERE sl_no=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Deleted successfully";
        header("location: index.php");
    } else {
        die(mysqli_error($con));
        echo "\nOops! Something went wrong. Please try again later.";
    }
    mysqli_close($con);
}
