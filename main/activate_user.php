<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php

$user_id=$_SESSION['id'];
$role=$_SESSION['role'];
$password=$_SESSION['password'];

$newpassword=$_POST['newpassword'];
 
include("../includes/dbconfig.php");
 
$sql="UPDATE users SET password=PASSWORD('$newpassword'),status='Active' WHERE id='$user_id' AND password='$password' AND role='$role'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

echo "<script>
alert('Login Again');
location.href='logout.php';
</script> ";
?>