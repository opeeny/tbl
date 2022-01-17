<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?><?php
include("../includes/dbconfig.php");	
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


<div class="col-md-12"> 
<?php if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 

} ?>
<legend align="center">

<button class="btn btn-success" onclick="location.href='results_rejections_downloads.php?fromdate=<?php echo $fromdate?>&&todate=<?php echo $todate ?>'">Download</button>QUESTIONED RESULTS(LATEST 1000 SAMPLES ONLY)<<<button class="btn btn-info" onclick="location.href='<?php $_SERVER['PHP_SELF']?>'">REFRESH</button>>></legend>
<div id="" style='font-size:0.8em; background-color:; border:; max-height:400px; width:; margin-right:; padding:; overflow:auto;'>
<?php 
include("../includes/dbconfig.php");
if($fromdate!=''){
$sql="SELECT * FROM results_rejections where rejected_date between '".$fromdate."' and '".$todate."' ORDER BY id DESC LIMIT 1000";	
}else
{
	$sql="SELECT * FROM results_rejections ORDER BY id DESC LIMIT 1000";
}
$rejects=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countrejected=mysqli_num_rows($rejects);
if($countrejected>0){
?>
<table class="table table-bordered" bgcolor='91B4DD'>
<tr bgcolor='#fffbf6'><th>LAB NO</th><th>ENTRANT</th><th>REVIEWER</th><th>TEST</th><th>Reason</th> </tr>

<?php
include("../includes/dbconfig.php");

//Sample details rctdate BETWEEN DATEADD(DAY, -3, @rctdate) AND @rctdate datediff(d,SubmissionDate,GETDATE())

$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$entrant= $sample['entrant'];
$reviewer = $sample['reviewer'];
$reason = $sample['rejreason'];
$rejectdate = $sample['rejected_date'];
if($rejectdate=='0000-00-00'){$rejectdate='';}
$test=$sample['test'];


echo "<tr class='accessionrow' bgcolor='#fffbf6' align='left' title='$labno'>
<td>$labno</td>
<td>$entrant</td>
<td>$reviewer</td>
<td>$test</td>
<td>$reason</td>

</tr>";
}
echo "</table>";	
}				
?>

</div>
</div>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</body>
</html>