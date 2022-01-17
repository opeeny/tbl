<?php
ini_set('max_execution_time', 300000);
$today=date("Y-m-d");
$today2=date("d-m-Y");

if(isset($_GET['fromdate'])){
$fromdate= $_GET['fromdate'];
$todate= $_GET['todate'];
$fromdate2=date('d-m-Y', strtotime($fromdate));
$todate2=date('d-m-Y', strtotime($todate));
}

include("../includes/dbconfig.php");

if(isset($_GET['specimens'])){
$sqlvalue="SELECT s.studycode,count(*) as Frequency from samples s where s.rctdate between '".$fromdate."' and '".$todate."' GROUP BY s.studycode";
$filename="Specimens_".$fromdate2."_to_".$todate2;
}
if(isset($_GET['specimentypes'])){
$sqlvalue="SELECT s.studycode,s.spectype,count(*) 
as Frequency from samples s where s.rctdate between '".$fromdate."' and '".$todate."' 
GROUP BY s.studycode,s.spectype";
$filename="Specimen_Types_".$fromdate2."_to_".$todate2;
}



//======================= OUT PUT ====================================================

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=$filename.xls");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body style='font-family: Arial; font-size: 10px;'>";

	$rows = mysqli_query($dbconnection,$sqlvalue) or die("ERROR : " . mysqli_error($dbconnection));

	echo "$filename &nbsp;<a href='#' onclick='javascript:window.close();'>Close Window</a> <br><br>";
	
	echo "<table border='1' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
	<!--<tr bgcolor='#ffffff'></tr><tr bgcolor='#ffffff'></tr>--><tr bgcolor='#fffbf6' align='left'>";
	
	$i=0;
while ($i < mysqli_num_fields($rows)){
$fld = mysqli_fetch_field($rows);
echo "<th>$fld->name</th>";
$i = $i + 1;
}
echo "</tr>";
while ($row = mysqli_fetch_array($rows,MYSQLI_ASSOC)) {
echo "<tr align='left' bgcolor='#ffffff'>";

foreach($row as $column => $value) {
		echo "<td> $value </td>";
}

echo "</tr>";
	}

	
	echo "</table>";
	
	
echo "</body>";
echo "</html>";