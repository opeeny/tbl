<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
if(isset($_POST['Submit']))
{
	include("../includes/dbconfig.php");
    $collmtd=ucwords(mysqli_real_escape_string($dbconnection,$_POST['collmtd']));
	
	$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
	
	$status='Active';
	


$insert=mysqli_query($dbconnection,"insert into identification_method(code,name,status)
		values ('$code','$collmtd','$status')"); 
if ($insert){
	
}

else{
//echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}


if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM identification_method WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['close'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  identification_method SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  identification_method SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['update_spec']))
{include("../includes/dbconfig.php");
    $method=ucwords(mysqli_real_escape_string($dbconnection,$_POST['method']));
	
	$status=$_POST['status'];
	$id=$_POST['id'];
	
	$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
	
	
$update=mysqli_query($dbconnection,"UPDATE identification_method SET name='$method',code='$code',status='$status' 
where id='$id'");
		
if ($update){
	
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
<script type="text/javascript">



function delete_warning(node){
 var x=confirm("Are you sure you want to delete the Collection Method from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to close this Collection Method?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to activate this closed Identification Method");
 
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


<div class="col-md-12"> 
<?php if(isset($_POST['edit'])){ 
$edit_id=$_POST['edit_id'];

include("../includes/dbconfig.php");


$sql="SELECT * FROM  identification_method WHERE id='$edit_id'";
$studycodes_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studycodes_check) > 0){
while ($identification_method= mysqli_fetch_array($studycodes_check,MYSQLI_ASSOC)) {
	$code= $identification_method['code'];
	$method= $identification_method['name'];
	$status= $identification_method['status'];
	$id= $identification_method['id'];
}
	} ?>

          <div class="form_head">EDITINGIDENTIFICATION METHODS <?php echo $id; ?></div>
  <form action="" method="post"  autocomplete="off">
  <div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Specimen Type</label>
      <div class="col-sm-4"> <input type="hidden"name="id" class="form-control" value="<?php echo $id ?>">
        <input type="text" class="form-control" value="<?php echo $method ?>" placeholder="Project Title" name="method" />
      </div>
	  <label  class="col-sm-2 control-label">Code</label>
      <div class="col-sm-4"> 
          <input type="text" class="form-control" value="<?php echo $code ?>" placeholder="Code" name="code" />
     </div>
    </div>


      
	   
	   <div class="form-group"> 
	   <label  class="col-sm-2 control-label">Status</label>
	   <div class="col-sm-2"> 
	   <select name="status" class="form-control" >
			<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
			<option value="Suspended">Suspended</option>
			<option value="Active">Active</option>
		
		</select>
		</div>
	   <div class="col-sm-4"> 
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="update_spec"  class="btn btn-primary">UPDATE</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>

<?php 
}

else{
?>

<div class="form_head">IDENTIFICATION METHODS  </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from identification_method  ORDER BY id desc"); 
  //$display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Identification Method</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_idmethod.php'; ?>
    </div>
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Code</th>
	<th>Identification Method</th>
	<th>Status</th>
	<th colspan="2">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $study = $fields['id'];
	  $status = $fields['status'];
	  
  ?>
     <td>&nbsp; <?php echo $fields['code'];?></td>
     <td>&nbsp; <?php echo $fields['name'];?></td>
	<td>&nbsp; <?php echo $fields['status'];?></td>
	
	<form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $study ?>'>
        
   <td><form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $study ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $study ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  ></td>
		
		<td>
       <?php if ($status=='Suspended'){?>
        <input type='hidden' name='active_userid' value='<?php echo $study ?>'>
		<input type='submit' value='ACTIVATE' class="btn btn-success btn-sm" onclick='return activate_warning(this)' name='Activate'>
        <?php }else{?> <input type='hidden' name='suspended_userid' value='<?php echo $study ?>'>
		<input type='submit' value='SUSPEND' class="btn btn-warning btn-sm" onclick='return edit_warning(this)' name='close'> <?php } ?>
 </form> 
		</td>
	

 </tr>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '<b>'.'<font color="red">'.'<center>'."Sorry! No Samples have beeen entered".'</center>'.'</font>'.'<b>';
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