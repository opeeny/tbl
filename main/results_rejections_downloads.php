<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>


</head>
<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
<?php

// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
$date=date("d-m-Y");


header("Content-Disposition: attachment; filename=Questioned_Results_Report$date.xls");
 
// Add data table
//include 'view_yap_members_exc.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>


<body>
<div class="table-responsive">
<table  border="1" class="table">
<tr><th>LAB NO</th><th>ENTRANT</th><th>REVIEWER</th><th>TEST</th><th>REASON</th></tr>
<?php
include("../includes/dbconfig.php");
 if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 

} ?>
<?php 
include("../includes/dbconfig.php");
if($fromdate!=''){
$sql="SELECT * FROM results_rejections where rejected_date between '".$fromdate."' and '".$todate."' ORDER BY id DESC LIMIT 1000";	
}else
{
	$sql="SELECT * FROM results_rejections ORDER BY id DESC LIMIT 1000";
}
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countrejected=mysqli_num_rows($samples);



while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$entrant= $sample['entrant'];
$rejreason= $sample['rejreason'];
$reviewer = $sample['reviewer'];


$test=$sample['test'];
	
echo "<tr title='$labno'>
<td>$labno</td>
<td>$entrant</td>
<td>$reviewer</td>
<td>$test</td>
<td>$rejreason</td>
</tr>";
}
echo "</table>";					
?>

</div>

 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>


<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</body>
</html>