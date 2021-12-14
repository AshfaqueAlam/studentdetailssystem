<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM 'studentdetails' WHERE sl_no=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"Deleted successfully";
    }else{
        die(mysqli_error($con));
    }

}
?>