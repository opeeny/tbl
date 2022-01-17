<?php
include("../includes/dbconfig.php");
$id = $_GET['id'];
$delete = mysqli_query($dbconnection,"delete from suppliers where sup_id='$id'");
if($delete){
    header("location:view_suppliers.php");
}else{
    echo "something went wrong".mysqli_error($dbconnection);
}

?>