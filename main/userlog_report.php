<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

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
	<div class="col-md-12">
<?php if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 
$todate=$todate.':'.'23:59'; 

} ?>
<?php // echo "<font color='red'><b><center> $requestor_reg_aborted</center></b></font>"; ?>

<fieldset class="scheduler-border"> <legend  class="scheduler-border">
<button class="btn btn-success" onclick="location.href='userlogs_downloads.php?fromdate=<?php echo $fromdate?>&&todate=<?php echo $todate ?>'">Download</button>
SYSTEM LOG REPORT(LATEST 1000 LOGS ONLY)<<<button class="btn btn-info" onclick="location.href='<?php $_SERVER['PHP_SELF']?>'">REFRESH</button>>></legend>


<div id="" style='font-size:0.9em; background-color:; border:; max-height:700px; width:; margin-right:; padding:; overflow:scroll;'>

<?php 
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
<div class="table-responsive">
<table   class="table">
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