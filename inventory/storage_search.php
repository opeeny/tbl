
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
<?php include("../includes/welcomediv_invent.php"); ?>
</div>

<div id="content">


<div class="col-md-2">
<!-- Side Menu for Admin Account-->
<?php require_once'../includes/storage_options.php'; ?>
 </div>

<div class="col-md-10"> 

SEARCHING FREEZER STORAGE RECORDS<hr>

<div class="col-sm-6 row"> 
	<div class="form-horizontal">
	<form action="" method="GET" name="formfindsample" onsubmit="" autocomplete="off">

	<div class="form-group"> 
	<label class="col-sm-2 control-label label-format">LAB NO:</label>
	<div class="col-sm-4"> 
		<input type="number" class="form-control" name="findlabno" type="text" placeholder="Search LAB NO" autofocus required/>
	</div>
	<div class="col-sm-2"> 
	<input type="submit" name="searchlabno" value="SEARCH" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
	</div>
	</div>

	</form>
	</div>
</div>

<div class="col-sm-6 row"> 
	<div class="form-horizontal">
	<form action="" method="GET" name="formfindpatient" onsubmit="" autocomplete="off">

	<div class="form-group"> 
	<label class="col-sm-2 control-label label-format">PATIENT:</label>
	<div class="col-sm-4"> 
		<input type="text" class="form-control" name="findpatient" type="text" placeholder="Search PATIENT" onkeyup="storage_showPatientprofileby_name(this.value)" autofocus required/>
	</div>
	<div class="col-sm-2"> 
	<input type="submit" name="searchpatient" value="SEARCH" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
	</div>
	</div>

	</form>
	</div>
	
	<div id="livesearch" style='font-size:0.8em;background-color:; border:; max-height:300px; width:; margin-right:; padding:; overflow:auto;'></div>

</div>

<?php
IF(ISSET($_GET['searchlabno']) OR ISSET($_GET['searchpatient'])){
	include("../includes/dbconfig.php");
	
	$findlabno = mysqli_real_escape_string($dbconnection,$_GET['findlabno']);
	$findpatient = mysqli_real_escape_string($dbconnection,$_GET['findpatient']);
	
	$searchs=mysqli_query($dbconnection,"SELECT * FROM storage_records WHERE labno='$findlabno'") or die("ERROR : " . mysqli_error($dbconnection));;
	
	$search_count=mysqli_num_rows($searchs);
	
	echo "<br><br>SEARCH RESULTS<hr>";
	
	if($search_count>0){
		
		//echo "<table class='table-condensed table-bordered table'>
		echo "<table class='table-bordered'>
		<tr><th>OPTIONS</t><th>FREEZER</th><th>CHEST</th><th>DRAWER</th><th>RACK</th><th>BOX POSITION</th><th>BOX LABEL</th><th>FREEZER POSITION</th><th>STATUS</th>
		<th>LAB NO</th><th>PATIENT NO</th><th>TYPE</th><th>VOLUME</th>
		<th>MEDIA<th><th>STORAGE SECTION</th><th>STORAGE DATE</th><th>STORAGE TECH</th><th>ENTRY BY</th><th>ENTRY TIME</th>";
		
		while ($search = mysqli_fetch_array($searchs)) {
		$labno = $search['labno'];
		
		$id = $search['id'];
		$freezer_no = $search['freezer_no'];
		$chest = $search['chest'];
		$drawer = $search['drawer'];
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
		<td><a href='?retrieve_record=$id'>Retrieve</a> | </td>
		<td>$freezer_no</td><td>$chest</td><td>$drawer</td><td>$rack</td><td>$boxposition</td><td>$boxlabel</td><td>$freezerposition</td>
		<td>$status</td><td>$labno</td><td></td><td>$type</td><td>$volume</td>
		<td>$media<td><td>$storagesection</td><td>$storagedate</td><td>$storagetech</td><td>$entryby</td><td>$entrytime</td>";
		}
		
		echo "</table>";
		
	}
	
	else
		echo "NO STORAGE RECORDS FOUND FOR LAB NO $findlabno";
	
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