<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
if(isset($_POST['racker_create'])){
	include("../includes/dbconfig.php");
	$freezer = mysqli_real_escape_string($dbconnection,$_POST['freezer']);
	$chest= mysqli_real_escape_string($dbconnection,$_POST['chest']);
    $drawerfrom ='1';
    $rackfrom ='1';
	$rack= mysqli_real_escape_string($dbconnection,$_POST['rackto']);
	$drawerto= mysqli_real_escape_string($dbconnection,$_POST['drawerto']);
	$boxnofrom= mysqli_real_escape_string($dbconnection,$_POST['boxnofrom']);
	$boxnoto = mysqli_real_escape_string($dbconnection,$_POST['boxnoto']);
	$boxpositionfrom = mysqli_real_escape_string($dbconnection,$_POST['boxpositionfrom']);
	$boxpositionto = mysqli_real_escape_string($dbconnection,$_POST['boxpositionto']);
	
	$positioncheck=mysqli_query($dbconnection,"SELECT * FROM storage_records 
	WHERE freezer='$freezer' AND chest='$chest' AND   
	  rack='$rack'  ") or die("ERROR : " . mysqli_error($dbconnection));
	//AND boxposition='$boxposition' AND status='Occupied'
	$positioncheck_count=mysqli_num_rows($positioncheck);
	if($positioncheck_count==0){
	
 //box numbers start here
 //for ($x3=$rackfrom; $x3<= $rackto; $x3++) {
for ($x2=$drawerfrom; $x2<= $drawerto; $x2++) {
 for ($x1 = $boxpositionfrom; $x1 <= $boxpositionto; $x1++) {

  for ($x = $boxnofrom; $x <= $boxnoto; $x++) {
	  
	  	$insertsql1="insert into storage_records 
		(chest,freezer,rack,boxlabel,boxposition,drawer)values
 ('$chest','$freezer','$rack','$x','$x1','$x2')";
$insert1=mysqli_query($dbconnection,$insertsql1) 
 or die("ERROR : " . mysqli_error($dbconnection)); 	 
 	  

 }
}
}
 //}
 
if($insert1){
	echo "<script>alert('SETTINGS SUCCESSFULLY CONFIGURED FOR RACKER $rack FREEZER $freezer');</script>";

}
else{
	echo "failed".mysqli_error($dbconnection);
}

  }else{
	  
	echo "<script>alert('ERROR 68.SETTINGS  NOT CONFIGURED FOR RACKER $rack FREEZER $freezer');</script>";
	  
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
if(isset($_GET['freezeriiii'])){
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





<?php }
else {
?>
<form action="" method="POST" name="regform" autocomplete="off" onsubmit="return validateForm()"><div class="form-horizontal">
<b>Fill in details below and continue:</b><br>
<div class="form-group">
<label  class="col-sm-1 control-label">Freezer</label>
<div class="col-sm-3">
	<select name="freezer" class="form-control" REQUIRED>
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
<label  class="col-sm-1 control-label">Compartment</label>
<div class="col-sm-2">
<input type="text" class="form-control" placeholder="" name="chest" required/>
</div>
<label  class="col-sm-1 control-label">Rack No</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="rackto" required/>
</div>

</div>
<div class="form-group">
<!--
<label  class="col-sm-1 control-label">Row</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="row" required/>
</div>
-->
<label  class="col-sm-1 control-label">No.Of.Drawers/Rows </label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="drawerto" required/>
</div>
<label  class="col-sm-1 control-label">Box No from</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="boxnofrom" required/>
</div>
<label  class="col-sm-1 control-label">Box No to</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="boxnoto" required/>
</div>

<!--
<label  class="col-sm-1 control-label">Box Label</label>
<div class="col-sm-2">
<input type="text" class="form-control" placeholder="" name="boxlabel" required/>
</div>-->
</div>

<div class="form-group">
<label  class="col-sm-1 control-label">Box Pos from</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="boxpositionfrom" required/>
</div>
<label  class="col-sm-1 control-label">Box Pos to</label>
<div class="col-sm-2">
<input type="number" class="form-control" placeholder="" name="boxpositionto" required/>
</div>

<div class="col-sm-1"> 
    <button type="submit" name="racker_create" class="btn btn-success">SAVE</button>
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