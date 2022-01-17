<?php include("../includes/session_start.php"); ?>
<?php
if(isset($_POST['editpatient'])){
	include("../includes/dbconfig.php");
	$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['surname']));
	$patient_initials=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['patient_initials']));
	
	$village=ucwords(mysqli_real_escape_string($dbconnection,$_POST['village']));
	$subcounty=ucwords(mysqli_real_escape_string($dbconnection,$_POST['subcounty']));
    $pid=strtoupper($_POST['patient_id']);
	$pidother=strtoupper($_POST['pid_other']);
   $gender=ucwords($_POST['gender']);
   $study_code=$_POST['study_code'];
	$tel=$_POST['tel'];
	$district=$_POST['district'];
	
$patient=mysqli_real_escape_string($dbconnection,$_POST['patient']);
$sql = "UPDATE patients SET pid_other='$pidother',study='$study_code',pinitials='$patient_initials',pid='$pid',name='$name',gender='$gender',
telephone='$tel',village='$village',subcounty='$subcounty',district='$district' where id='$patient'";
$update=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if($update){
header("location:patient_registration.php");
/*echo "<script>
window.close();
</script> ";}
*/
}
else {echo "failed update";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" oncontextmenu="return false">
<head>
<title></title>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

    <script src="../jquery/jquery.are-you-sure.js"></script>
    <script src="../jquery/ays-beforeunload-shim.js"></script>
<script type="text/javascript">
  $(function() {

        // Example 1 - ... in one line of code
        $('#Patient').areYouSure();
  }
</script>
<body>

<?php  // start checking for illegal login
if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>

<div id='content'>
<?php 
$patient=$_GET['patient'];
include("../includes/dbconfig.php");
$sql="SELECT * FROM patients WHERE id='$patient'";
$patients=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
$study=$patient['study'];
$pid=$patient['pid'];
$pid_other=$patient['pid_other'];
$name=$patient['name'];
$pinitials=$patient['pinitials'];
$sex=$patient['gender'];
$ptcontact=$patient['telephone'];

$village=$patient['village'];

$subcounty=$patient['subcounty'];
$district=$patient['district'];
$patientno=$patient['id'];

}

?>

<div class="form_head">PATIENT DETAILS</div>
  <form action="" method="post" id="example-1-form" autocomplete="off"><div class="form-horizontal">
  <div class="form-group"> 
  <label  class="col-sm-1 control-label label-format">PID#</label>
      <div class="col-sm-2"> <input name="patient" type="hidden" value="<?php echo $patientno; ?>"/>
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" value="<?php echo $pid; ?>" placeholder="Patient ID" 
onkeyup="showRegisteredPatients_name(this.value)"name="patient_id" />
      </div>
	    <label  class="col-sm-2 control-label label-format">Other PID#</label>
      <div class="col-sm-2"> <input name="patient" type="hidden" value="<?php echo $patientno; ?>"/>
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" value="<?php echo $pid_other; ?>" placeholder="Patient ID" 
onkeyup="showRegisteredPatients_name(this.value)"name="pid_other" />
      </div>
      <label  class="col-sm-1 control-label label-format">Telephone</label>
      <div class="col-sm-3"> 
        <input type="number"  
		class="form-control" placeholder="Enter tel in format 256785643123" value="<?php echo $ptcontact; ?>" name="tel" />
      </div>
	  
    </div>
	
<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">Name</label>
      <div class="col-sm-4"> 
        <input type="text" style="color: #222;
text-transform: capitalize;" value="<?php echo $name; ?>" class="form-control" placeholder="Name eg Kibuuka James" name="surname" id="surname" 
onkeyup="showRegisteredPatients_name(this.value)" />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">Village</label>
      <div class="col-sm-4"> 
            <input type="text" class="form-control" value="<?php echo $village; ?>" placeholder="Enter village name" name="village" id="village" />
       </div>
	  
    </div>
	
	<div class="form-group"> 
	<label  class="col-sm-2 control-label label-format">Study </label>
      <div class="col-sm-4"> 
<select name="study_code" required class="form-control" >
			<option value="<?php echo $study; ?>"><?php echo $study; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes ORDER BY status";
			$study_codes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($study_code = mysqli_fetch_array($study_codes,MYSQLI_ASSOC)) {
				$ptitle = $study_code['projtitle'];
				$code = $study_code['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $ptitle</option>";	
			}			
			?>
		</select></div>
	        <label for="Type of sample" class="col-sm-2 control-label label-format">District</label>
      <div class="col-sm-4"> 
	  <select name="district" class="form-control" >
			<option value="<?php echo $district; ?>"><?php echo $district; ?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM districts ORDER BY name";
			$districts=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($district = mysqli_fetch_array ($districts,MYSQLI_ASSOC)) {
				$dname = $district['name'];
				$dist_id = $district['id'];
			echo "<option value='$dname' style='background-color:#CCCCCC;'>$dname</option>";	
			}			
			?>
		</select>
          </div>
      
	  
    </div>
	
	<div class="form-group">
<label  class="col-sm-2 control-label label-format">Patient Initials</label>
      <div class="col-sm-4"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" value="<?php echo $pinitials; ?>" placeholder="Patient Initials" name="patient_initials" />
      </div>
<label  class="col-sm-2 control-label label-format">Subcounty</label>
      <div class="col-sm-4"> 
          <input type="text"  
		  class="form-control" placeholder="Enter Subcounty name" value="<?php echo $subcounty; ?>" name="subcounty" id="subcounty" />
         </div>	  
      
	  
    </div>
	<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">Gender</label>
      <div class="col-sm-4"> 
        <select class="form-control" name="gender" required >
	<option value="<?php echo $sex; ?>" ><?php echo $sex; ?></option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		<option value="Not Provided">Not Provided</option>
		
		</select>
      </div>
		  <div class="col-sm-6"> 
        <button type="Submit" name="editpatient"  class="btn btn-primary">UPDATE</button>
      </div>
		  
    </div>
</div>
  </form>

<hr>
<table width='100%'><tr align='center'>
<td><input type="button" value="BACK" class="btn btn-info" onclick="history.go(-1);return true;"></td>


</tr></table>



</div> 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>

</body>
</html>