<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
if(isset($_POST['storage_entry_save'])){
	include("../includes/dbconfig.php");
	
	$freezer = mysqli_real_escape_string($dbconnection,$_POST['freezer']);
	$chest = mysqli_real_escape_string($dbconnection,$_POST['chest']);
	$drawer = mysqli_real_escape_string($dbconnection,$_POST['drawer']);
	$rack = mysqli_real_escape_string($dbconnection,$_POST['rack']);
	$boxposition = mysqli_real_escape_string($dbconnection,$_POST['boxposition']);
	$boxlabel = mysqli_real_escape_string($dbconnection,$_POST['boxlabel']);
	
	$position = mysqli_real_escape_string($dbconnection,$_POST['position']);
	$labno = mysqli_real_escape_string($dbconnection,$_POST['labno']);
	$type = mysqli_real_escape_string($dbconnection,$_POST['type']);
	$volume = mysqli_real_escape_string($dbconnection,$_POST['volume']);
	$media = mysqli_real_escape_string($dbconnection,$_POST['media']);
	$section = mysqli_real_escape_string($dbconnection,$_POST['section']);
	$storage_date = mysqli_real_escape_string($dbconnection,$_POST['storage_date']);
	$storage_tech = mysqli_real_escape_string($dbconnection,$_POST['storage_tech']);
	
	$entryby=$_SESSION['name'];
	$entrytime=date('Y-m-d H:i', time());
	
	$positioncheck=mysqli_query($dbconnection,"SELECT * FROM storage_records WHERE freezer_no='$freezer' AND chest='$chest' 
	AND drawer='$drawer' AND rack='$rack' AND boxposition='$boxposition' AND status='Occupied'") or die("ERROR : " . mysqli_error($dbconnection));
	
	$positioncheck_count=mysqli_num_rows($positioncheck);
	
	if($positioncheck_count==0){
		$insert=mysqli_query($dbconnection,"INSERT INTO 
		storage_records(freezer_no,chest,drawer,rack,boxposition,boxlabel,freezerposition,status,labno,type,volume,media,storagesection,storagedate,storagetech,entryby,entrytime) 
		VALUES ('$freezer','$chest','$drawer','$rack','$boxposition','$boxlabel','$position','Occupied','$labno','$type','$volume','$media','$section','$storage_date','$storage_tech',
		'$entryby','$entrytime')") or die("ERROR : " . mysqli_error($dbconnection)); 
		
		if ($insert){}
		else{
		echo "Data failed to insert: ".mysqli_error($dbconnection);
		}	
	}
	else{
		echo "<script>alert('DATA NOT SAVED.    POSITION $position IN THE SPECIFIED FREEZER LOCATION IS ALREADY OCCUPIED');</script>";
	}
	
}
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


<div class="col-md-2">
<!-- Side Menu for Admin Account-->
<?php require_once'../includes/storage_options.php'; ?>
</div>

<div class="col-md-10"> 
<b>STORAGE DATA ENTRY</b><hr>
<?php
if(isset($_GET['freezer'])){
	include("../includes/dbconfig.php");
	
	$freezer = mysqli_real_escape_string($dbconnection,$_GET['freezer']);
	$chest = mysqli_real_escape_string($dbconnection,$_GET['chest']);
	$drawer = mysqli_real_escape_string($dbconnection,$_GET['drawer']);
	$rack = mysqli_real_escape_string($dbconnection,$_GET['rack']);
	$boxposition = mysqli_real_escape_string($dbconnection,$_GET['boxposition']);
	$boxlabel = mysqli_real_escape_string($dbconnection,$_GET['boxlabel']);
?>
<?php
echo 
"<b>Entry of Storage Data into: </b><br>
Freezer #: $freezer | Chest: $chest | Drawer: $drawer | Rack: $rack | Box Position: $boxposition | Box Label: $boxlabel
"; ?>

<form action="" method="POST" name="" autocomplete="off"><div class="form-horizontal">
<input type="hidden" name="freezer" value="<?php echo $freezer; ?>"/>
<input type="hidden" name="chest" value="<?php echo $chest; ?>"/>
<input type="hidden" name="drawer" value="<?php echo $drawer; ?>"/>
<input type="hidden" name="rack" value="<?php echo $rack; ?>"/>
<input type="hidden" name="boxposition" value="<?php echo $boxposition; ?>"/>
<input type="hidden" name="boxlabel" value="<?php echo $boxlabel; ?>"/>

<b>Fill in details below for each position:</b><br>
<div class="form-group">
	<label  class="col-sm-1 control-label">Freezer Position</label>
	<div class="col-sm-2">
	<input type="number" min="1" max="100" class="form-control" placeholder="" name="position" required/>	
	</div>
</div>
	
<div class="form-group">	
	<label  class="col-sm-1 control-label">Lab No</label>
	<div class="col-sm-2">
	<input type="text" class="form-control" placeholder="" name="labno" required/>
	</div>

	<label  class="col-sm-1 control-label">Type</label>
	<div class="col-sm-2">
	<select name="type" class="form-control" required>
		<option value="">-- Select Type --</option>
		<option value="Isolate">Isolate</option>
		<option value="Sample">Sample</option>
		<option value="Other">Other</option>
	</select>
	</div>
</div>

<div class="form-group">	
	<label  class="col-sm-1 control-label">Volume</label>
	<div class="col-sm-2">
	<input type="text" class="form-control" placeholder="" name="volume" required/>
	</div>

	<label  class="col-sm-1 control-label">Media</label>
	<div class="col-sm-2">
	<select name="media" class="form-control" required>
			<option value="">--Select Media--</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_media";
			$medias=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($media = mysqli_fetch_array($medias,MYSQLI_ASSOC)) {
				$mediacode = $media['code'];
				$mediacategory = $media['category'];
				
			echo "<option value='$mediacode' style='background-color:#CCCCCC;'>$mediacode - $mediacategory</option>";	
			}			
			?>
		</select>
	</div>
</div>

<div class="form-group">	
	<label  class="col-sm-1 control-label">Storage Section</label>
	<div class="col-sm-2">
	<input type="text" class="form-control" placeholder="" name="section" required/>
	</div>

	<label  class="col-sm-1 control-label">Storage Date</label>
	<div class="col-sm-3">
	<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
        <input class="form-control" size="16" type="text" value="" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input9" value=""  name="storage_date"/>			
	</div>
</div>

<div class="form-group">
	<label  class="col-sm-1 control-label label-format">Storage Technologist</label>
    <div class="col-sm-2"> 
	    <select class="form-control" name="storage_tech" >
			<option value="">-Select Technologist-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>       
    </div>

<div class="col-sm-1"> 
    <button type="submit" name="storage_entry_save" class="btn btn-success">SAVE</button>
</div>
</div>

</div></form>



<?php }
else {
?>
<form action="" method="GET" name="" autocomplete="off"><div class="form-horizontal">
<b>Fill in details below and continue:</b><br>
<div class="form-group">
<label  class="col-sm-1 control-label">Freezer</label>
<div class="col-sm-3">
	<select name="freezer" class="form-control" required>
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
<label  class="col-sm-1 control-label">Chest / partition</label>
<div class="col-sm-2">
<input type="text" class="form-control" placeholder="" name="chest" required/>
</div>
<label  class="col-sm-1 control-label">Drawer</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="drawer" required/>
</div>
</div>

<div class="form-group">
<label  class="col-sm-1 control-label">Rack</label>
<div class="col-sm-3">
<input type="number" class="form-control" placeholder="" name="rack" required/>
</div>
<label  class="col-sm-1 control-label">Box Position</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="boxposition" required/>
</div>
<label  class="col-sm-1 control-label">Box Label</label>
<div class="col-sm-2">
<input type="text" class="form-control" placeholder="" name="boxlabel" required/>
</div>
</div>

<div class="form-group">
<div class="col-sm-1"> 
    <button type="submit" name="storage_entry_next" class="btn btn-success">Next >></button>
</div>
</div>

</div></form>

<?php } ?>




</div>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
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