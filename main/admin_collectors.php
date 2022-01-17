
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

if(isset($_POST['edited_Transporter']))
{
	include("../includes/dbconfig.php");	
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['fname']));
$contact=$_POST['contact'];
$initials=$_POST['initials'];
$id=$_POST['id'];

$insert=mysqli_query($dbconnection,"UPDATE collectors SET initials='$initials',name='$name',contact='$contact' where id='$id'");
		 
if ($insert){
	
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
 
if(isset($_POST['Reg_User']))
{
	include("../includes/dbconfig.php");	
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['fname']));
$contact=$_POST['contact'];
$initials=$_POST['initials'];
$status='Active';
$insert=mysqli_query($dbconnection,"insert into collectors (initials,name,contact,status)
		values ('$initials','$name','$contact','$status')"); 
if ($insert){
	//header("Location:cluster_cont.php?cname=$c_name&&sub=$c_subcounty&&dist=$c_district&&date=$dob");
	//$requestor_reg_success="Operation Successful! Reason: Requestor $name recorded";
	
//echo "User friendly notification to be developed";
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}



if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM collectors WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  collectors SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  collectors SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

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
	var w=document.forms["addTransporterform"]["fname"].value;
	var x=document.forms["addTransporterform"]["lname"].value;
	var y=document.forms["addTransporterform"]["Transportername"].value;
	var z=document.forms["addTransporterform"]["password"].value;
	var q=document.forms["addTransporterform"]["contact"].value;
	
	if(w==null || w=="" || x==null || x=="" || y==null || y=="" || z==null || z=="" || q==null || q==""){
	alert("USER NOT SAVED! ENTER DATA IN ALL FIELDS AND CONTINUE.");
	return false;}
							}


function delete_warning(node){
 var x=confirm("Are you sure you want to delete the Collector from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to suspend this Collector?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to activate this suspended Collector?");
 
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
<?php if(isset($_POST['Edit'])){ 
$edit_id=$_POST['edit_id'];

include("../includes/dbconfig.php");


$sql="SELECT * FROM  collectors WHERE id='$edit_id'";
$transporters_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($transporters_check) > 0){
while ($user= mysqli_fetch_array($transporters_check,MYSQLI_ASSOC)) {
	$contact= $user['contact'];
	$name= $user['name'];
	
	$initials= $user['initials'];
	$id= $user['id'];
}
	} ?>
	<div class="form_head">UPDATING COLLECTORS INFORMATION</div>
  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 

<input type="hidden" value="<?php echo $id ?>" name="id" />
      <label  class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $name ?>" name="fname" />
      </div>
	  <label  class="col-sm-2 control-label">Initials</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $initials ?>" name="initials" />
      </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Contact</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $contact ?>" name="contact" />
      </div>
	   <div class="col-sm-4"> 
        <button type="Submit" name="edited_Transporter"  class="btn btn-primary">Submit</button>
      </div>
       </div>
	   
	  
    
    
   </div>
  </form>
  </div>







<?php
}else{
	?>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" contact="dialog">
<?php  require_once 'new_collector.php'; ?>
    </div>
	<?php
include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from collectors  ORDER BY id desc"); 
  $display="Displaying System Transporter";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>

	<?php if(isset($_GET['passreset'])){
	  echo '<b>'.'<font color="red">'.'<center>'."<h4>Password Successfully reset to 123456 Please advise the user to login and activate the account
	 </h4> ".'</center>'.'</font>'.'<b>';
	   
} ?>
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
     <th> Name</th>
  
  <th>Contact</th>
	
	 <th>Initials</th>
	<th>Status</th>
	<th>Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $user_id = $fields['id'];
	  $status = $fields['status'];
  ?>
  <td>&nbsp; <?php echo $fields['name'];?></td>

  
    <td>&nbsp; <?php echo $fields['contact'];?></td>
	<td>&nbsp; <?php echo $fields['initials'];?></td>
	<td>&nbsp; <?php echo $fields['status'];?></td>
	<td>
	<form action='' method='POST'>
	<input type='hidden' name='delete_userid' value='<?php echo $user_id ?>'>
	<input type='hidden' name='edit_id' value='<?php echo $user_id ?>'>
   <input type='submit' value='EDIT' class="btn btn-success btn-sm" name='Edit'>     
<input type='submit' value='DELETE' class="btn btn-danger btn-sm" name='Delete' onclick='return delete_warning(this)' <?php if($user_id==$_SESSION['id']){ echo "title='You can not delete yourself while logged in.' style='background-color:#CCCCCC;' disabled"; }?>>
       <?php if ($status=='Suspended'){?>
        <input type='hidden' name='active_userid' value='<?php echo $user_id ?>'>
		<input type='submit' value='ACTIVATE' class="btn btn-success btn-sm" onclick='return activate_warning(this)' name='Activate' <?php if($user_id==$_SESSION['id']){ echo "title='You can not suspend yourself while logged in.' style='background-color:#CCCCCC;' disabled"; }?>>
        <?php }else{?> <input type='hidden' name='suspended_userid' value='<?php echo $user_id ?>'>
		<input type='submit' value='SUSPEND' class="btn btn-warning btn-sm" onclick='return edit_warning(this)' name='Suspend' <?php if($user_id==$_SESSION['id']){ echo "title='You can not suspend yourself while logged in.' style='background-color:#CCCCCC;' disabled"; }?>><?php }?>
		
		 </form>

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
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>



</body>
</html>