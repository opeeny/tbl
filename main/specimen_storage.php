
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
if(isset($_POST['Reg_Spec']))
{
	include("../includes/dbconfig.php");	
$storage=ucwords(mysqli_real_escape_string($dbconnection,$_POST['storage']));
	
$insert=mysqli_query($dbconnection,"insert into specimen_storage (status,specimenstorage)
		values ('Active','$storage')"); 
if ($insert){
	//echo "<h1>success</h1>";
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}


if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM specimen_storage WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  specimen_storage SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  specimen_storage SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
?>





<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>
<script type="text/javascript">



function delete_warning(node){
 var x=confirm("Are you sure you want to delete the Specimen Storage from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to suspend this Specimen Storage ?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to ctivate this suspended Specimen Storage?");
 
 if(x == false)  {return false;}
 
 }
</script>
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


<div class="col-md-5"> 

<div class="form_head">SPECIMEN STORAGE  </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from specimen_storage  ORDER BY id desc"); 
  $display="Displaying Specimen Stoarge";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Specimen Storage</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_specimenstorage.php'; ?>
    </div>
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
     <th> Specimen Storage Environment</th>
  
 
	<th colspan="2">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $id = $fields['id'];
	  $specimenstorage = $fields['specimenstorage'];
  ?>
  <td>&nbsp; <?php echo $fields['specimenstorage'];?></td>


	<td><form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $id ?>'>
        
        
        <input type='submit' value='DELETE' class="btn btn-danger btn-sm" name='Delete' onclick='return delete_warning(this)'>
		</td>
		
		<td>
       <input type='hidden' name='edit_id' value='<?php echo $id ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  ></td>
		<td>
	
     </tr>
	 </form>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '<b>'.'<font color="red">'.'<center>'."Sorry! No Specimen Storage Media found".'</center>'.'</font>'.'<b>';
	   }
	   
?></table>


  
 
  </div>

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