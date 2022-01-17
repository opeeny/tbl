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


header("Content-Disposition: attachment; filename=userlogs_Report$date.xls");
 
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
 if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 

} 
include("../includes/dbconfig.php");
if($fromdate!=''){
$sql="SELECT * FROM user_logs where time between '".$fromdate."' and '".$todate."' ORDER BY id DESC LIMIT 1000";	
}else
{
	$sql="SELECT * FROM user_logs ORDER BY id DESC LIMIT 1000";
}
$logs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countrejected=mysqli_num_rows($logs);
if($countrejected>0){
?>
<table border="1">
<tr><th>Log Time</th><th>Name</th><th>username</th><th>Action</th></tr>
<?php

while ($log = mysqli_fetch_array($logs,MYSQLI_ASSOC)) {
$id = $log['id'];
$time= $log['time'];
$name = $log['name'];
$username = $log['username'];
$action= $log['action'];


//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$name '>
<td>$time</td>
<td>$name</td>
<td>$username</td>
<td>$action</td>


</tr>";
}
echo "</table>
</div>
";	
}				
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