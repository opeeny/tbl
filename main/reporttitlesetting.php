<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
if(isset($_POST['Submit']))
{
	include("../includes/dbconfig.php");
    $title=ucwords(mysqli_real_escape_string($dbconnection,$_POST['liquid']));
	$study=mysqli_real_escape_string($dbconnection,$_POST['study']);
	$solid=mysqli_real_escape_string($dbconnection,$_POST['solid']);
	$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
	
	$status='Active';
	
$sql="SELECT * FROM  reporttitle ";
$studys=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studys) > 0){
	echo "<b><h3>Sorry !Settings for Study $study already exist</b></h3>";
}else{
$insert=mysqli_query($dbconnection,"insert into reporttitle(title1,title2)
values ('$title1','$title2')"); 
if ($insert){
	
}
else{
//echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}



}


if(isset($_POST['update_spec']))
{
	include("../includes/dbconfig.php");
	$title1=mysqli_real_escape_string($dbconnection,$_POST['title1']);
	$title2=mysqli_real_escape_string($dbconnection,$_POST['title2']);
$id=$_POST['id'];
	
$update=mysqli_query($dbconnection,"UPDATE reporttitle
SET title1='$title1',title2='$title2'  
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


$sql="SELECT * FROM  reporttitle WHERE id='$edit_id'";
$studycodes_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studycodes_check) > 0){
while ($identification_method= mysqli_fetch_array($studycodes_check,MYSQLI_ASSOC)) {
	
	$id= $identification_method['id'];
	$title2= $identification_method['title2'];
	$title1= $identification_method['title1'];
}
	} ?>

          <div class="form_head">EDITING REPORT TITLE SETTINGS</div>
<form action="" method="post" name="requestor" autocomplete="off">
<div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-1 control-label">Title1</label>
      <div class="col-sm-9"> 
	  <input type="text" class="form-control" name="title1" VALUE="<?php echo $title1 ?>">
	 </div>
	 </DIV>
	 <div class="form-group"> 
	<label  class="col-sm-1 control-label">Title 2</label>
      <div class="col-sm-9"> 
	  <input type="text" class="form-control" name="title2" VALUE="<?php echo $title2 ?>">
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
 $query=mysqli_query($dbconnection,"select * from reporttitle  "); 
  //$display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Title 1</th>
	<th>Title 2</th>
	
	
	<th colspan="2">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $id = $fields['id'];
	 // $status = $fields['status'];
	  
  ?>
     <td>&nbsp; <?php echo $fields['title1'];?></td>
     <td>&nbsp; <?php echo $fields['title2'];?></td>
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