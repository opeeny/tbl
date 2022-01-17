<?php include("includes/compatibility.php"); ?>
<?php
include("../includes/dbconfig.php");

//get parameter from URL
$labno=$_GET["labno"];
$reporttype=$_GET["reporttype"];
$printuser=$_GET["printuser"];

$sql="INSERT INTO log_printed_reports(labno,type,printedby) VALUES($labno,'$reporttype','$printuser')";

$result = mysqli_query($dbconnection, $sql) or die("ERROR : " . mysqli_error($dbconnection));

if($reporttype=='FINAL'){
$today=date('Y-m-d');
mysqli_query($dbconnection, "UPDATE samples SET finalrpt_printdate='$today' WHERE labno='$labno'") or die("ERROR : " . mysqli_error($dbconnection));	
	
	
}

?>