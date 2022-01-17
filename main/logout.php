<?php include("../includes/session_start.php"); ?>
<?php
include("../includes/connection.php");
$username=$_SESSION['username'];
$name=$_SESSION['name'];
 $sql = "INSERT into userlogs (username,name,action)  values('$username','$name','Successfully Logged out')";

$query = mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));
if($query){
	session_destroy();
	header("location:../index.php");
}
?>