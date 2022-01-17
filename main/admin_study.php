
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

if(isset($_POST['Reg_Study']))
{
	include("../includes/dbconfig.php");	
    $projtitle=ucwords(mysqli_real_escape_string($dbconnection,$_POST['projtitle']));
	$email1=mysqli_real_escape_string($dbconnection,$_POST['email1']);
	$email2=mysqli_real_escape_string($dbconnection,$_POST['email2']);
	$tel1=mysqli_real_escape_string($dbconnection,$_POST['tel1']);
	$tel2=mysqli_real_escape_string($dbconnection,$_POST['tel2']);
	$contactperson1=ucwords(mysqli_real_escape_string($dbconnection,$_POST['contactperson1']));
	$contactperson2=ucwords(mysqli_real_escape_string($dbconnection,$_POST['contactperson2']));
	$studycode=mysqli_real_escape_string($dbconnection,$_POST['studycode']);
	$organisation1=mysqli_real_escape_string($dbconnection,$_POST['organisation1']);
	$organisation2=mysqli_real_escape_string($dbconnection,$_POST['organisation2']);
	//$address1=mysqli_real_escape_string($dbconnection,$_POST['address1']);
	//$address2=mysqli_real_escape_string($dbconnection,$_POST['address2']);
	$status='ACTIVE';

$insert=mysqli_query($dbconnection,"insert into studycodes(projtitle,code,contactperson1,contactperson2,
organisation1,organisation2,phone1,phone2,email1,email2,status)
		values ('$projtitle','$studycode','$contactperson1','$contactperson2',
		'$organisation1','$organisation2','$tel1','$tel2','$email1','$email2','$status')"); 
if ($insert){
	
}

else{
//echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM studycodes WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['close'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  studycodes SET status='CLOSED' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  studycodes SET status='ACTIVE' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['update_study']))
{include("../includes/dbconfig.php");

$id=mysqli_real_escape_string($dbconnection,$_POST['studyid']);
  $projtitle=ucwords(mysqli_real_escape_string($dbconnection,$_POST['projtitle']));
  $projsumm=ucwords(mysqli_real_escape_string($dbconnection,$_POST['projsumm']));
	$email1=mysqli_real_escape_string($dbconnection,$_POST['email1']);
	$email2=mysqli_real_escape_string($dbconnection,$_POST['email2']);
	$tel1=mysqli_real_escape_string($dbconnection,$_POST['tel1']);
	$tel2=mysqli_real_escape_string($dbconnection,$_POST['tel2']);
	$contactperson1=ucwords(mysqli_real_escape_string($dbconnection,$_POST['contactperson1']));
	$contactperson2=ucwords(mysqli_real_escape_string($dbconnection,$_POST['contactperson2']));
	$studycode=mysqli_real_escape_string($dbconnection,$_POST['studycode']);
	$organisation1=mysqli_real_escape_string($dbconnection,$_POST['organisation1']);
	$organisation2=mysqli_real_escape_string($dbconnection,$_POST['organisation2']);
		
$update=mysqli_query($dbconnection,"UPDATE studycodes SET projsummary='$projsumm',projtitle='$projtitle',
code='$studycode',contactperson1='$contactperson1',contactperson2='$contactperson2',
organisation1='$organisation1',organisation2='$organisation2',
phone1='$tel1',phone2='$tel2',email1='$email1',email2='$email2'where id='$id'");
		
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
 var x=confirm("Are you sure you want to delete the STUDY from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to close this STUDY?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to activate this closed STUDY");
 
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


$sql="SELECT * FROM  studycodes WHERE id='$edit_id'";
$studycodes_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studycodes_check) > 0){
while ($studycodes= mysqli_fetch_array($studycodes_check,MYSQLI_ASSOC)) {
	$code= $studycodes['code'];
	$projecttitle= $studycodes['projtitle'];
	$contactperson1= $studycodes['contactperson1'];
	$contactperson2= $studycodes['contactperson2'];
	$organisation1= $studycodes['organisation1'];
	$organisation2= $studycodes['organisation2'];
	//$address1 = $studycodes['address1'];
	//$address2 = $studycodes['address2'];
	$phone1= $studycodes['phone1'];
	$phone2= $studycodes['phone2'];
	$email2 = $studycodes['email2'];
	$email1 = $studycodes['email1'];
	$status = $studycodes['status'];
	$projsumm = $studycodes['projsummary'];
	
	$id= $studycodes['id'];
}
	} ?>

          <div class="form_head">PROJECT AND STUDY CODES REGISTRATION <?php echo $id; ?></div>
		    <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
  <input type="hidden" value="<?php echo $id ?>" name="studyid" > 
      <label  class="col-sm-2 control-label">Project Title</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $projecttitle ?>" placeholder="Project Title" name="projtitle" />
      </div>
	  <label  class="col-sm-2 control-label">Study Code</label>
      <div class="col-sm-4"> 
          <input type="text" class="form-control" value="<?php echo $code ?>" placeholder="Study Code" name="studycode" />
     </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Contact Person 1</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Contact Person 1"  value="<?php echo $contactperson1 ?>" name="contactperson1" />
      </div>
	  <label  class="col-sm-2 control-label">Oganisation</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Organisation" value="<?php echo $organisation1 ?>" name="organisation1" />
      </div>
       </div>
	    <div class="form-group"> 
      <label  class="col-sm-2 control-label">Telephone</label>
      <div class="col-sm-4"> 
        <input type="number" class="form-control" placeholder="Tel In format 2567xxxxxxxx" value="<?php echo $phone1 ?>" name="tel1" />
      </div>
	  <label  class="col-sm-2 control-label">Email 1</label>
      <div class="col-sm-4"> 
        <input type="email" class="form-control" placeholder="eg james@gmail.com" value="<?php echo $email1 ?>" name="email1" />
      </div>
       </div>
	   <div class="form-group"> 
      <label  class="col-sm-2 control-label">Contact Person  2</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Contact Person 2" value="<?php echo $contactperson2 ?>" name="contactperson2" />
      </div>
	  <label  class="col-sm-2 control-label">Organisation</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Organisation 2" value="<?php echo $organisation2 ?>" name="organisation2" />
      </div>
       </div>
	   <div class="form-group"> 
      <label  class="col-sm-2 control-label">Telephone</label>
      <div class="col-sm-4"> 
        <input type="number" class="form-control" placeholder="Tel In format 2567xxxxxxxx" value="<?php echo $phone2 ?>" name="tel2" />
      </div>
	  <label  class="col-sm-2 control-label">Email 2</label>
      <div class="col-sm-4"> 
        <input type="email" class="form-control" placeholder="eg james@gmail.com" value="<?php echo $email2 ?>" name="email2" />
      </div>
       </div>
	   
	   <div class="form-group"> 
	   <div class="col-sm-7"> 
	   <label  class="col-sm-3 control-label">Project Summary</label>
      <div class="col-sm-8"> 
        <input type="text" class="form-control" placeholder="Organisation 2" 
		value="<?php echo $projsumm ?>" name="projsumm" />
      </div>
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="update_study"  class="btn btn-primary">UPDATE</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>
 

<?php 
}

else{
?>

<div class="form_head">LIST OF CURRENT AND CLOSED PROJECTS  </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from studycodes  ORDER BY id desc"); 
  $display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Study</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_study.php'; ?>
    </div>
	<button class="btn btn-success" onclick="location.href='allstudies_downloads.php'">Download All Studies</button></legend>

 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Project</th>
	<th>Proj Summary</th>
	<th>Study Code</th>
	<th>Contact Person(s)</th>
	<th>Organisation(s)</th>
	<th>Phone(s)</th>
	<th>Email(S)</th>
	
	

	
	
	<th>Status</th>
	<th colspan="3">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $study = $fields['id'];
	  $status = $fields['status'];
	  $cont1=$fields['contactperson1'];
	  $cont2=$fields['contactperson2'];
	  $phone1=$fields['phone1'];
	  $phone2=$fields['phone2'];
	  $email1=$fields['email1'];
	  $email2=$fields['email2'];
	  $email2=$fields['email2'];
	  $org1=$fields['organisation1'];
	  $org2=$fields['organisation2'];
	  $projsummary=$fields['projsummary'];
  ?>
     <td>&nbsp; <?php echo $fields['projtitle'];?></td>
	  <td>&nbsp; <?php echo $projsummary;?></td>
     <td>&nbsp; <?php echo $fields['code'];?></td>
	<td>&nbsp; <?php echo "$cont1,$cont2";?></td>

	<td>&nbsp; <?php echo " $org1,$org2";?></td>
	
    <td>&nbsp; <?php echo "$phone1,$phone2";?></td>
	
	<td>&nbsp; <?php echo "$email1,$email2";?></td>
		
		
	<td>&nbsp; <?php echo $fields['status'];?></td>
	<td><form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $study ?>'>
        
        
        <input type='submit' value='DELETE' class="btn btn-danger btn-sm" name='Delete' onclick='return delete_warning(this)' ></td>
		<td><form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $study ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $study ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  ></td>
		
		<td>
       <?php if ($status=='CLOSED'){?>
        <input type='hidden' name='active_userid' value='<?php echo $study ?>'>
		<input type='submit' value='ACTIVATE' class="btn btn-success btn-sm" onclick='return activate_warning(this)' name='Activate'>
        <?php }else{?> <input type='hidden' name='suspended_userid' value='<?php echo $study ?>'>
		<input type='submit' value='CLOSE' class="btn btn-warning btn-sm" onclick='return edit_warning(this)' name='close'> <?php } ?>
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