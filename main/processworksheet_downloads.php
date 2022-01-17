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
header("Content-Disposition: attachment; filename=Processing Worksheet$date.xls");
 
// Add data table
//include 'view_yap_members_exc.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>


<body><h2>ACCESSIONED SAMPLES PROCESS WORKSHEET</h2>
<table  border="1" class="table">
<tr align='left'><th>LABNO</th><th>STUDY</th>
<th>COLL TIME</th><th>COLL DATE</th><th>APPEARANCE</th>
<th>VOLUME</th><th>RCT DATE</th><th>INTERVAL</th>
<th>PROCESS DATE</th><th>PROCESS TIME</th><th>PROCESS TECH</th>
</tr>

<?php
$today=date('Y-m-d', time());
include("../includes/dbconfig.php");
if(isset($_GET['labfrom'])){
	$labfrom= $_GET['labfrom'];
  $labto= $_GET['labto'];
if($labto!=''){
$sql="SELECT * FROM samples where (labno between '".$labfrom."' and '".$labto."')";
}else{
$sql="SELECT * FROM samples where (rctdate='$today')";	
}
}
include("../includes/dbconfig.php");


$rejects=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($rejects,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$patient= $sample['patient'];
$study= $sample['studycode'];

$rctdate = date('d-M-y',strtotime($sample['rctdate']));
if($rctdate=='01-Jan-70'){$rctdate='';}
$rcttime = $sample['rcttime'];
$appearance = $sample['appearance'];
$volume=$sample['volume'];
$colldate=$sample['colldate'];
$spectype=$sample['spectype'];
$interval=$sample['visitinterval'];
$colltime=$sample['colltime'];
$examination=$sample['examination'];
$reviewdate=$sample['lastreviewtime'];
if($reviewdate=='0000-00-00 00:00:00'){$reviewdate='';}else{
$reviewdate = date('d-M-y H:i:s',strtotime($reviewdate));}
$editdate=$sample['lastedittime'];
$editdate=$sample['lastedittime'];if($editdate=='0000-00-00 00:00:00'){$editdate='';}
if($editdate!=''){$editdate = date('d-M-y H:i:s',strtotime($editdate));}

//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$labno'>
<td>$labno</td>
<td>$study</td>
<td>$colltime</td>
<td>$colldate</td>
<td>$appearance</td>
<td>$volume</td>
<td>$rctdate</td>
<td>$interval</td>
<td></td>
<td></td>
<td></td>
</tr>";
}
echo "</table>";					
?>
</div>
</div>
</fieldset>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
</div>

</body>
</html>