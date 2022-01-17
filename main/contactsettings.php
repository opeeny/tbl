<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); 

if(isset($_POST['update_spec']))
{
	include("../includes/dbconfig.php");
	$contact=mysqli_real_escape_string($dbconnection,$_POST['contact']);
	
$id=$_POST['id'];
	
$update=mysqli_query($dbconnection,"UPDATE reportcontacts
SET contact='$contact'
where id='$id'");
		
if ($update){
header('location: '. $_SERVER['PHP_SELF']);	
}
else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
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


<div class="col-md-12"> 
<?php if(isset($_GET['edit'])){ 
$edit_id=$_GET['edit_id'];

include("../includes/dbconfig.php");


$sql="SELECT * FROM  reportcontacts WHERE id='$edit_id'";
$studycodes_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studycodes_check) > 0){
while ($identification_method= mysqli_fetch_array($studycodes_check,MYSQLI_ASSOC)) {
	
	$id= $identification_method['id'];
	$contact= $identification_method['contact'];
	
}
	} ?>

          <div class="form_head">EDITING REPORT CONTACTS SETTINGS</div>
<form action="" method="post" name="requestor" autocomplete="off">
<div class="form-horizontal">

	 <div class="form-group"> 
	<label  class="col-sm-1 control-label">Contact</label>
      <div class="col-sm-9"> 
	  <input type="text" class="form-control" name="contact" VALUE="<?php echo $contact ?>">
	 </div>
	   
	   <input type="hidden"name="id" class="form-control" value="<?php echo $id ?>">
		  <div class="col-sm-1"> 
        <button type="Submit" name="update_spec"  class="btn btn-primary">Submit</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>
  
  
<?php 
}

else{
?>

<div class="form_head">REPORT SETTINGS</div>


<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from reportcontacts  "); 
  //$display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Registered Contacts</th>
	
	
	
	<th colspan="2">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $id = $fields['id'];
	 // $status = $fields['status'];
	  
  ?>
     <td>&nbsp; <?php echo $fields['contact'];?></td>
   
	 <td><form action='' method='GET'><input type='hidden' name='delete_userid' value='<?php echo $id ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $id ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  >
		</form> </td>
 </tr>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '<b>'.'<font color="red">'.'<center>'."Sorry! No DATA was found".'</center>'.'</font>'.'<b>';
	   }
	   
?></table>


  
 
  </div>
<?php } ?>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>



</body>
</html>