<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("select.freezer").change(function(){
            var selectedfreezer = $(".freezer option:selected").val();
            $.ajax({
                type: "POST",
                url: "process_request2.php",
                data: { freezer : selectedfreezer } 
            }).done(function(data){
                $("#response").html(data);
            });
        });
		 });
		
</script>
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

<div class="col-md-10"> <?php
include("../includes/dbconfig.php");
	if(isset($_GET['labno']) or isset($_GET['freezer']) 
		or isset($_GET['study']) or isset($_GET['searchaliq']) or isset($_GET['searchall'])){
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
	if(isset($_GET['study'])){
	$study=$_GET['study'];
	$searchs=mysqli_query($dbconnection,"SELECT s.*,c.* FROM samples s,storage_records c 
	WHERE s.labno=c.labno and s.studycode='$study'") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	if(isset($_GET['searchaliq'])){
	$type=$_GET['type'];
	$searchs=mysqli_query($dbconnection,"SELECT s.*,c.* FROM samples s,storage_records c 
	WHERE s.labno=c.labno and c.type='$type'") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	if(isset($_GET['searchall'])){
	$rack=$_GET['rack'];
	$freezer=$_GET['freezer'];
	$box=$_GET['box'];
	$pos1=$_GET['pos1'];
	$pos2=$_GET['pos2'];
	$searchs=mysqli_query($dbconnection,"SELECT s.*,c.* FROM samples s,storage_records c 
	WHERE s.labno=c.labno and c.type='$type'") or die("ERROR : " . mysqli_error($dbconnection));;
	}
	$search_count=mysqli_num_rows($searchs);
	
	echo "<br><br>SEARCH RESULTS<hr>";
	
	if($search_count>0){
		
		//echo "<table class='table-condensed table-bordered table'>
		echo "<table class='table table-bordered'>
		<tr><th colspan='2'>OPTIONS</t><th>FREEZER</th><th>RACK</th><th>BOX LABEL</th>
		<th>BOX POSITION</th><th>ALIQUOTE ID</th>
		<th>STUDY</th><th>STATUS</th>
		<th>LAB NO</th><th>PATIENT NO</th><th>TYPE</th><th>VOLUME</th>
		<th>MEDIA</th><th>STORAGE DATE</th>
		";
		
		while ($search = mysqli_fetch_array($searchs)) {
		$labno = $search['labno'];
		
		$id = $search['id'];
		$freezer_no = $search['freezer'];
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
		$storagesection = $search['storagesection'];
		$storagedate = date('d-M-y',strtotime($search['storagedate']));
		$storagetech = $search['storagetech'];
		$entryby = $search['entryby'];
		$entrytime = $search['entrytime'];
		
		echo "<tr class='freezer_accessionrow'>
		<td><a href='?retrieve_record=$id'>Retrieve</a> </td><td>
		<a href='?retrieve_record=$id'>Details</a> </td>
		<td>$freezer_no</td><td>$rack</td><td>$boxlabel</td><td>$boxposition</td><td>$storagesection</td>
		<td>$study</td>
		<td>$status</td><td>$labno</td><td>$patient</td><td>$type</td><td>$volume</td>
		<td>$media</td><td>$storagedate</td>
		";
		}
		
		echo "</table>";
		
	}
	
	else
		echo "<script>alert('NO DATA WAS FOUND FOR THE SPECIFIED SEARCH CRITERIA`');</script>";

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