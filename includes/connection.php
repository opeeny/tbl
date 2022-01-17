<?php 
    $con = mysqli_connect("localhost", "root", "", "tbl") or die("Error ".mysqli_error($con));
    if($con) {
        //echo "connection ok";
    }else{
        echo "connection failed";
    }
?>