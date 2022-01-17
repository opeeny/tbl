<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
if(isset($_POST['Submit']))
{
	include("../includes/dbconfig.php");
	  $znc=ucwords(mysqli_real_escape_string($dbconnection,$_POST['znc']));
    $dtp=ucwords(mysqli_real_escape_string($dbconnection,$_POST['dtp']));
	$bap=ucwords(mysqli_real_escape_string($dbconnection,$_POST['bap']));
	$study=mysqli_real_escape_string($dbconnection,$_POST['study']);
	$tech=mysqli_real_escape_string($dbconnection,$_POST['tech']);
	$qt=mysqli_real_escape_string($dbconnection,$_POST['qt']);
	$ql=mysqli_real_escape_string($dbconnection,$_POST['ql']);
	$sqt=mysqli_real_escape_string($dbconnection,$_POST['sqt']);
	$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
    
	$status='Active';
	
$sql="SELECT * FROM  reportsetting WHERE study='$study'";
$studys=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studys) > 0){
	echo "<b><h3>Sorry !Settings for Study $study already exist</b></h3>";
}else{
$insert=mysqli_query($dbconnection,"insert into reportsetting(study,showid,
dtp,bap,znc,qt,ql,sqt,techdetails)
values ('$study','$id','$dtp','$bap','$znc','$qt','$ql','$sqt','$tech')"); 
if ($insert){
	
}
else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}



}

if(isset($_POST['update_spec']))
{include("../includes/dbconfig.php");
 $dtp=ucwords(mysqli_real_escape_string($dbconnection,$_POST['dtp']));
	$bap=ucwords(mysqli_real_escape_string($dbconnection,$_POST['bap']));
	$znc=ucwords(mysqli_real_escape_string($dbconnection,$_POST['znc']));
	$study=mysqli_real_escape_string($dbconnection,$_POST['study']);
	$qt=mysqli_real_escape_string($dbconnection,$_POST['qt']);
	$sqt=mysqli_real_escape_string($dbconnection,$_POST['sqt']);
	$ql=mysqli_real_escape_string($dbconnection,$_POST['ql']);
	$tech=mysqli_real_escape_string($dbconnection,$_POST['tech']);
	$showid=mysqli_real_escape_string($dbconnection,$_POST['showid']);
$id=$_POST['id'];
	
$update=mysqli_query($dbconnection,"UPDATE reportsetting 
SET showid='$showid',study='$study',bap='$bap',znc='$znc',dtp='$dtp',
techdetails='$tech',sqt='$sqt', qt='$qt',ql='$ql'
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


$sql="SELECT * FROM  reportsetting WHERE id='$edit_id'";
$studycodes_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studycodes_check) > 0){
while ($identification_method= mysqli_fetch_array($studycodes_check,MYSQLI_ASSOC)) {
	$dtp= $identification_method['dtp'];
	$bap= $identification_method['bap'];
	$znc= $identification_method['znc'];
	$sqt= $identification_method['sqt'];
	$qt= $identification_method['qt'];
	$ql= $identification_method['ql'];
	$showid= $identification_method['showid'];
	$study= $identification_method['study'];
	$tech= $identification_method['techdetails'];
	$id= $identification_method['id'];
}
	} ?>

          <div class="form_head">EDITING REPORT SETTING<?php echo $id; ?></div>
		  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-1 control-label">Study</label>
      <div class="col-sm-2"> 
	  <select name="study" class="form-control"  >
			
			<?php
			echo "<option value='$study' style='background-color:#CCCCCC;'>$study</option>";
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes ORDER BY code";
			$districts=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($district = mysqli_fetch_array ($districts,MYSQLI_ASSOC)) {
				$code = $district['code'];
				//$dist_id = $district['id'];
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code</option>";	
			}			
			?>
		</select>
       
      </div>
	  <label  class="col-sm-1 control-label">Show ID</label>
      <div class="col-sm-2"> 
	    <select name="showid" class="form-control" >
			<option value="<?php echo $showid ?>"><?php echo $showid ?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
	 <label  class="col-sm-1 control-label">Result Tech</label>
      <div class="col-sm-2"> 
	    <select name="tech" class="form-control" >
			<option value="<?php echo $tech ?>"><?php echo $tech ?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
    </div>
	<div class="form-group"> 
      
	   
	  <label  class="col-sm-2 control-label">SQT-Solid Culture </label>
      <div class="col-sm-2"> 
	  <select name="sqt" class="form-control" >
			<option value="<?php echo $sqt ?>"><?php echo $sqt ?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
	 <label  class="col-sm-2 control-label">QT-Solid Culture </label>
      <div class="col-sm-2"> 
	  <select name="qt" class="form-control" >
			<option value="<?php echo $qt ?>"><?php echo $qt ?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
	 <label  class="col-sm-2 control-label">QL-Solid Culture </label>
      <div class="col-sm-2"> 
	  <select name="ql" class="form-control" >
			<option value="<?php echo $ql ?>"><?php echo $ql?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
    </div>
	
	   <div class="form-group"> 
	  <label  class="col-sm-2 control-label">DTP-Liquid Culture </label>
      <div class="col-sm-2"> 
	    <select name="dtp" class="form-control" >
			<option value="<?php echo $dtp ?>"><?php echo $dtp ?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	   <label  class="col-sm-2 control-label">ZNC-Liquid Culture </label>
      <div class="col-sm-2"> 
	    <select name="znc" class="form-control" >
			<option value="<?php echo $znc ?>"><?php echo $znc?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	  <label  class="col-sm-1 control-label">BAP-Liquid Culture </label>
      <div class="col-sm-2"> 
	    <select name="bap" class="form-control" >
			<option value="<?php echo $bap ?>"><?php echo $bap ?></option>
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	  </div>
	   <div class="form-group"> 
	     
	 <div class="col-sm-5"> 
      </div>
		  
	   
	   <input type="hidden"name="id" class="form-control" value="<?php echo $id ?>">
		  <div class="col-sm-4"> 
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

<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Setting</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_reportsettings.php'; ?>
    </div>

<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from reportsetting  ORDER BY id desc"); 
  //$display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Study</th>
	<th>Identification</th>
	<th>DTP-<br>Liquid <br>Culture</th>
	<th>BAP-<br>Liquid<br> Culture</th>
	<th>ZNC-<br>Liquid<br> Culture</th>
	<th>SQT-<br>Solid <br>Culture</th>
	<th>QT-<br>Solid<br> Culture</th>
	<th>QL-<br>Solid<br> Culture</th>
	
	<th>Result Tech</th>
	<th colspan="2">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $study = $fields['id'];
	 // $status = $fields['status'];
	  
  ?>
     <td>&nbsp; <?php echo $fields['study'];?></td>
     <td>&nbsp; <?php echo $fields['showid'];?></td>
	<td>&nbsp; <?php echo $fields['dtp'];?></td>
	<td>&nbsp; <?php echo $fields['bap'];?></td>
	<td>&nbsp; <?php echo $fields['znc'];?></td>
	<td>&nbsp; <?php echo $fields['sqt'];?></td>
	<td>&nbsp; <?php echo $fields['qt'];?></td>
	<td>&nbsp; <?php echo $fields['ql'];?></td>
	
	<td>&nbsp; <?php echo $fields['techdetails'];?></td>
	<form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $study ?>'>
        
   <td><form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $study ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $study ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  ></td>
		
</form> 
		
	

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