
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
<?php if(isset($_GET['retrieve_record'])){
	include("../includes/dbconfig.php");
	$id=$_GET['retrieve_record'];
	$sql="SELECT * FROM storage_records where id='$id'";
			$retrecords=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($retrecord= mysqli_fetch_array($retrecords,MYSQLI_ASSOC)) {
				$freezer = $retrecord['freezer'];
				$chest = $retrecord['chest'];
				$drawer = $retrecord['drawer'];
				$rack = $retrecord['rack'];
				$boxposition = $retrecord['boxposition'];
				$boxlabel= $retrecord['boxlabel'];
				$freezerposition = $retrecord['freezerposition'];
				$labno = $retrecord['labno'];
				$type = $retrecord['type'];
				$volume = $retrecord['volume'];
				$media = $retrecord['media'];
				$entryby = $retrecord['entryby'];
				$storagedate= $retrecord['storagedate'];
				$storagetech= $retrecord['storagetech'];
				$storagesection = $retrecord['storagesection'];

$insertsql="INSERT INTO storage_records_hist(freezer,chest,drawer,rack,boxposition,boxlabel,freezerposition,
labno,type,volume,media,entryby,storagedate,storagetech,storagesection)
VALUES ('$freezer','$chest','$drawer','$rack','$boxposition','$boxlabel','$freezerposition',
'$labno','$type','$volume','$media','$entryby','$storagedate','$storagetech',
'$storagesection')";

$insert=mysqli_query($dbconnection,$insertsql) or die("ERROR : " . mysqli_error($dbconnection)); 

}
$sql = "UPDATE storage_records SET status='',labno='',type='',volume='',media='',
entryby='',storagedate='',storagetech='',storagesection='' WHERE id=$id";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

}

?>
 
<div id="welcome">
<?php include("../includes/welcomediv.php"); ?>
</div>

<div id="content">


<div class="col-md-2">
<!-- Side Menu for Admin Account-->
<?php require_once'../includes/storage_options.php'; ?>
 </div>

<div class="col-md-10"> 

DOWNLOADING FREEZER STORAGE RECORDS<hr>

<div class="col-sm-6 row"> 
	<div class="form-horizontal">
	<form action="download_storedsamples.php" method="GET" name="formfindsample" onsubmit="" autocomplete="off">

	<div class="form-group"> 
	<label class="col-sm-2 control-label label-format">LAB NO:</label>
	<div class="col-sm-4"> 
		<input type="number" class="form-control" name="labno" type="text" placeholder="Search LAB NO" autofocus required/>
	</div>
	<div class="col-sm-2"> 
	<input type="submit" name="searchlabno" value="DOWNLOAD" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
	</div>
	</div>

	</form>
	</div>
</div>
<div class="col-sm-6 row"> 
	<div class="form-horizontal">
	<form action="download_storedsamples.php" method="GET" name="formfindsample" onsubmit="" autocomplete="off">

	<div class="form-group"> 
	<label class="col-sm-2 control-label label-format">Freezer:</label>
	<div class="col-sm-4">
<select name="freezer" class="form-control freezer" REQUIRED>
			
		<option value="">-- Select Freezer --</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM storage_freezers";
			$freezers=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($freezer = mysqli_fetch_array($freezers,MYSQLI_ASSOC)) {
				$freezer_id = $freezer['id'];
				$freezer_number = $freezer['number'];
				$freezer_name = $freezer['name'];
				$freezer_make = $freezer['make'];
				$freezer_location = $freezer['location'];
				
				echo "<option value='$freezer_number' style='background-color:#CCCCCC;'>Freezer # $freezer_number (Make:$freezer_make, Location:$freezer_location)</option>";	
			}			
			?>
	</select>		
	</div>
	<div class="col-sm-2"> 
	<input type="submit" name="searchfreezer" value="DOWNLOAD" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
	</div>
	</div>

	</form>
	</div>
</div>
<div class="col-sm-6 row"> 
	<div class="form-horizontal">
	<form action="download_storedsamples.php" method="GET" name="formfindsample" onsubmit="" autocomplete="off">

	<div class="form-group"> 
	<label class="col-sm-2 control-label label-format">STUDY:</label>
	<div class="col-sm-4">
	<select name="study" required class="form-control" >
			<option value="">- Study -</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes WHERE status='Active'";
			$study_codes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($study_code = mysqli_fetch_array($study_codes,MYSQLI_ASSOC)) {
				$ptitle = $study_code['projtitle'];
				$code = $study_code['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $ptitle</option>";	
			}			
			?>
		</select>

	</div>
	<div class="col-sm-2"> 
	<input type="submit" name="searchfreezer" value="DOWNLOAD" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
	</div>
	</div>

	</form>
	</div>
</div>

<div class="col-sm-6 row"> 
	<div class="form-horizontal">
	<form action="download_storedsamples.php" method="GET" name="formfindpatient" onsubmit="" autocomplete="off">

	<div class="form-group"> 
	<label class="col-sm-2 control-label label-format">PATIENT:</label>
	<div class="col-sm-4"> 
<input type="text" class="form-control" name="findpatient" type="text" 
placeholder="Search PATIENT" required/>
	</div>
	<div class="col-sm-2"> 
	<input type="submit" name="searchpatient" value="DOWNLOAD" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
	</div>
	</div>

	</form>
	</div>
	
</div>



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