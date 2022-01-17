<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php 
if(isset($_POST['save_freezer'])){
include("../includes/dbconfig.php");	

$number='';
$name=mysqli_real_escape_string($dbconnection,$_POST['name']);
$make=mysqli_real_escape_string($dbconnection,$_POST['make']);
$location=mysqli_real_escape_string($dbconnection,$_POST['location']);

$freezercheck=mysqli_query($dbconnection,"SELECT * FROM storage_freezers
 where name='$name'") or die("ERROR : " . mysqli_error($dbconnection));
	
	$positioncheck_count=mysqli_num_rows($freezercheck);
	if($positioncheck_count==0){
$insert=mysqli_query($dbconnection,"INSERT INTO storage_freezers(number,name,make,location) 
VALUES ('$name','$name','$make','$location')"); 
if ($insert){
}
else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
else{
	echo "<h2>Freezer $name Already Exists</h2>";
}
}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

<body>
<div id="wrapper" class='container'>
<div id="banner" class='row'>
<?php include("../includes/banner.php"); ?>
</div>

<div id="middle" class='row'>
<?php  // start checking for illegal login
if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
 
<div id="welcome">
<?php include("../includes/welcomediv.php"); ?>
</div>

<div id="content">
<div class="col-md-2">
<!-- Side Menu for Admin Account-->
<?php require_once'../includes/storage_options.php'; ?>
 </div>
<div class="col-md-10"> 
<br>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">NEW FREEZER</button><hr>
  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_storage_freezer.php'; ?>
</div>

<b>REGISTERED STORAGE FREEZERS</b><br>

<?php

include("../includes/dbconfig.php");  
$query=mysqli_query($dbconnection,"select * from storage_freezers") or die("ERROR : " . mysqli_error($dbconnection)); 
$num_rows=mysqli_num_rows($query);

if($num_rows>0){?>
<div class="table-responsive">
<table  border="1" class="table">
<tr><th>Freezer #</th><th>name</th><th>Make</th><th>Location</th><th>Status</th><th>Action</th></tr> 

<?php
while ($fields=mysqli_fetch_assoc($query)){	  
$number = $fields['number'];
$name = $fields['name'];
$make = $fields['make'];
$location = $fields['location'];
?>
<tr>
<td><?php echo $fields['number'];?></td>
<td><?php echo $fields['name'];?></td>
<td><?php echo $fields['make'];?></td>
<td><?php echo $fields['location'];?></td>
<td><?php echo $fields['status'];?></td>
<td></td>
</tr>
  
<?php
}//closing the while loop
echo "</table></div>";
}//closing the if statement
else{ 
echo '';
}	   
?>
</div>

</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</div>

</body>
</html>