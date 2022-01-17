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


header("Content-Disposition: attachment; filename=FreezerStorage$date.xls");
 
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

<?php
include("../includes/dbconfig.php");
	if(isset($_GET['labno']) or isset($_GET['freezer']) or isset($_GET['study'])){
	//$findlabno = mysqli_real_escape_string($dbconnection,$_GET['findlabno']);
	if(isset($_POST['findpatient'])){
	$findpatient = mysqli_real_escape_string($dbconnection,$_GET['findpatient']);
	}
	if(isset($_GET['labno'])){
	$labno=$_GET['labno'];
	$searchs=mysqli_query($dbconnection,"SELECT s.*,c.* FROM samples s,storage_records c 
	WHERE s.labno='$labno' and c.labno='$labno'") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	if(isset($_GET['freezer'])){
	$freezer=$_GET['freezer'];
	$searchs=mysqli_query($dbconnection,"SELECT s.*,c.* FROM samples s,storage_records c 
	WHERE s.labno= c.labno and c.freezer='$freezer' ") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	if(isset($_GET['findpatient'])){
	$patients=$_GET['findpatient'];
	$patients=mysqli_query($dbconnection,"SELECT * from patients where pid='$patient' ") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	if(isset($_GET['study'])){
	$study=$_GET['study'];
	$searchs=mysqli_query($dbconnection,"SELECT s.*,c.* FROM samples s,storage_records c 
	WHERE s.labno=c.labno and s.studycode='$study'") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	$search_count=mysqli_num_rows($searchs);
	
	if($search_count>0){
		

?>
<br>

<table class=" table" border="1">
<tr><th>#LABNO</th>
<th>#PID</th><th>Storage Date</th>
<th>Aliquot Type</th><th>Aliquot ID</th><th>Compartment</th>
<th>Rack</th><th> Row</th> <th>Box Label </th><th>Position</th>
<th>Volume</th>

</tr>

<?php
while ($search = mysqli_fetch_array($searchs)) {
$labno = $search['labno'];
		
		$id = $search['id'];
		$freezer_no = $search['freezer'];
		$compt = $search['chest'];
		$patient = $search['patient'];
		$study = $search['studycode'];
		$rack = $search['rack'];
		$boxposition = $search['boxposition'];
		$boxlabel = $search['boxlabel'];
		$freezerposition = $search['freezerposition'];
		$status = $search['status'];
		$labno = $search['labno'];
		$type = $search['type'];
		$volume = $search['volume'];
		$media = $search['media'];
		$drawer = $search['drawer'];
		$alquoteid= $search['storagesection'];
		$storagedate = date('d-M-y',strtotime($search['storagedate']));
		$storagetech = $search['storagetech'];
		$entryby = $search['entryby'];
		$entrytime = $search['entrytime'];
?>

<tr class='accessionrow' align='left'>
<td><?php echo $labno ?></td>
<td><?php echo $patient ?></td>
<td><?php echo $storagedate ?></td>
<td><?php echo $type ?></td>
<td><?php echo $alquoteid ?></td>
<td><?php echo $compt  ?></td>
<td><?php echo $rack ?></td>
<td><?php echo $drawer ?></td>
<td><?php echo $boxlabel ?></td>
<td><?php echo $boxposition ?></td>
<td><?php echo $volume ?></td>
</tr>
<?php 		
}

echo "</table>";					
 ?>


<?php 
}
	}

?></div>
</div>
</div>
<?php


 // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>


<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</div>
</body>
</html>