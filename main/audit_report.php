
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM users WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  users SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  users SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

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
 var x=confirm("Are you sure you want to delete the user from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to suspend this user?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to ctivate this suspended user?");
 
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
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING SAMPLE FOR AUDITING</b></legend>
<form action="#" method="GET" name="formfindsample"   autocomplete="off">
<div class="form-horizontal">
<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-4"> 
        <input type="text" class="form-control" name="findlabno" type="text" placeholder="Audit Specific Sample" autofocus />
      </div>
<!--<input name="findlabno" type="text" placeholder="Search LAB NO" style="height:20px; width:200px; background-color:;" autofocus/>-->
<div class="col-sm-1"> 
<input type="submit" name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>

</div>
</fieldset>
<div class="form_head">MICRSCOPY FM AUDIT REPORT  </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from audit_fm  ORDER BY id desc"); 
 // $display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
     <th>Lab No</th>
  
  <th>Res Change From</th>
	
	<th>Res Change To</th>
	<th>Entrant Change From</th>
	<th>Entrant Change To</th>
	 <th>Tech Change From</th>
     <th>Tech Change To</th>
	<th>Date Change From</th>
	<th>Date Change To</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	 
  ?>
 <td>&nbsp; <?php echo $fields['labno'];?></td>
	<td>&nbsp; <?php echo $fields['reschangedfrom'];?></td>
	<td>&nbsp; <?php echo $fields['reschangedto'];?></td>
	<td>&nbsp; <?php echo $fields['entrantchangedfrom'];?></td>
	<td>&nbsp; <?php echo $fields['entrantchangedto'];?></td>
	<td>&nbsp; <?php echo $fields['techchangedfrom'];?></td>
	<td>&nbsp; <?php echo $fields['techchangedto'];?></td>
	<td>&nbsp; <?php echo $fields['datechangedfrom'];?></td>
	<td>&nbsp; <?php echo $fields['datechangedto'];?></td>

	

 </tr>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '';
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