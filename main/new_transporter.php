<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); 
if(isset($_POST['SAVETRANS']))
{
	include("../includes/dbconfig.php");	
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['fname']));
$contact=$_POST['contact'];
$initials=$_POST['initials'];

$status='Active';



$insert=mysqli_query($dbconnection,"insert into transporters (initials,name,contact,status)
		values ('$initials','$name','$contact','$status')");
		echo "<script>window.close();</script>";
}?>

          <!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

<body>

<div id="wrapper" class='container'>

<div id="middle" class='row'>
<?php  // start checking for illegal login
if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
 
<div id="content">
<br><br><br>

<?php
if(isset($_GET['saverequester-success'])){
	echo "<font color='green'>Transporter Registration was successful</font>";
}	
?>

<center><h4> <label class="label-format"> Transporter Registration</label> </h4></center>
   
  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Name eg Mukwaya Ambrose" name="fname" />
      </div>
	  <label  class="col-sm-2 control-label">Initials</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Enter Initials" name="initials" />
      </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Contact</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Enter Contact Information" name="contact" />
      </div>

		  <div class="col-sm-4"> 
        <button type="Submit" name="SAVETRANS"  class="btn btn-primary">Submit</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

</div>

</body>
</html>