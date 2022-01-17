
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
if(isset($_POST['Submit_app']))
{include("../includes/dbconfig.php");
    $appearance=ucwords(mysqli_real_escape_string($dbconnection,$_POST['appearance']));
	$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
	$status='Active';
	$insert=mysqli_query($dbconnection,"insert into option_appearance(code,name,status)
		values ('$code','$appearance','$status')"); 
if ($insert){
	}
else{
//echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM option_appearance WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);
}

if(isset($_POST['update_app']))
{include("../includes/dbconfig.php");
   $appearance=ucwords(mysqli_real_escape_string($dbconnection,$_POST['appearance']));
	$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
	$status=$_POST['status'];
	$id=$_POST['id'];	
$update=mysqli_query($dbconnection,"UPDATE option_appearance SET name='$appearance',code='$code',status='$status' 
where id='$id'");
		
if ($update){
	
}
else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}


if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  option_appearance SET status='Deactive' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  option_appearance SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

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
function validateform(){
	var w=document.forms["adduserform"]["fname"].value;
	var x=document.forms["adduserform"]["lname"].value;
	var y=document.forms["adduserform"]["username"].value;
	var z=document.forms["adduserform"]["password"].value;
	var q=document.forms["adduserform"]["role"].value;
	
	if(w==null || w=="" || x==null || x=="" || y==null || y=="" || z==null || z=="" || q==null || q==""){
	alert("USER NOT SAVED! ENTER DATA IN ALL FIELDS AND CONTINUE.");
	return false;}
							}


function delete_warning(node){
 var x=confirm("Are you sure you want to delete this appearance Option?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to Activate this sample appearance  Option?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to Deactivate this  sample appearance option?");
 
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


<div class="col-md-10"> 
<?php if(isset($_POST['edit'])){ 
$edit_id=$_POST['edit_id'];
include("../includes/dbconfig.php");

$sql="SELECT * FROM  option_appearance WHERE id='$edit_id'";
$appearance_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($appearance_check) > 0){
while ($option_appearance= mysqli_fetch_array($appearance_check,MYSQLI_ASSOC)) {
	$code= $option_appearance['code'];
	$appearance= $option_appearance['name'];
	$status= $option_appearance['status'];
	$id= $option_appearance['id'];
}
	}

?>
<div class="form_head">EDITING SPECIMEN APPEARANCE  <?php echo $id; ?></div>
 <form action="" method="post" name="requestor" autocomplete="off">
 <div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Specimen Apperance</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $appearance ?>"placeholder="Specimen Appearance" name="appearance" />
      </div>
	  <input type="hidden"name="id" class="form-control" value="<?php echo $id ?>">
	  <label  class="col-sm-2 control-label">Short Code</label>
      <div class="col-sm-4"> 
          <input type="text" class="form-control" value="<?php echo $code ?>"placeholder="Short Code" name="code" />
     </div>
    </div>
	
	   <div class="form-group"> 
	   <div class="col-sm-7"> 
	   <label  class="col-sm-4 control-label">Status</label>
	   <div class="col-sm-8"> 
	   <select name="status" class="form-control" >
			<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
			<option value="Deactive">Deactive</option>
			<option value="Active">Active</option>
		
		</select>
		</div>
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="update_app"  class="btn btn-primary">UPDATE</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>

<?php 

}else{
?>
<div class="form_head">SAMPLE APPEARANCE OPTIONS  </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from option_appearance  ORDER BY id desc"); 
  $display="Displaying SAMPLE APPEARANCE OPTIONS";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Appearance Option</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php require_once 'new_specappearance.php'; ?>
    </div>
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
     <th>CODE</th>
  
  <th>Option </th>
   <th>Status </th>
	<th>Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $appearance_id = $fields['id'];
	  $status= $fields['status'];
	  
  ?>
    <td>&nbsp; <?php echo $fields['code'];?></td>
	<td>&nbsp; <?php echo $fields['name'];?></td>
	<td>&nbsp; <?php echo $fields['status'];?></td>
	
	<form action='' method='POST'>
  
		
		<td>
	<form action='' method='POST'>
	<input type='hidden' name='delete_userid' value='<?php echo $appearance_id ?>'>
        
         <input type='hidden' name='delete_userid' value='<?php echo $appearance_id ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $appearance_id ?>'>
        <input type='submit' value='EDIT' class="btn btn-primary btn-sm" name='edit'>
		
        
       <?php if ($status=='Deactive'){?>
        <input type='hidden' name='active_userid' value='<?php echo $appearance_id?>'>
		<input type='submit' value='ACTIVATE' class="btn btn-success btn-sm" onclick='return activate_warning(this)' name='Activate'/>
	   <?php } else{ ?>
        <input type='hidden' name='suspended_userid' value='<?php echo $appearance_id?>'>
		<input type='submit' value='DEACTIVATE' class="btn btn-warning btn-sm" onclick='return edit_warning(this)' name='Suspend' /></form> 
	   <?php } ?>
		</td>
	

 </tr>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '';
	   }
	   
}
?></table>


  
 
  </div>

</div>
 </div>
 </div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>




<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
</div>


</body>
</html>