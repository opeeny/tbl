
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

if(isset($_POST['regdst_mtd']))
{include("../includes/dbconfig.php");
    $code=ucwords(mysqli_real_escape_string($dbconnection,$_POST['code']));
	$method=mysqli_real_escape_string($dbconnection,$_POST['method']);
	$cat=mysqli_real_escape_string($dbconnection,$_POST['cat']);
	$type=mysqli_real_escape_string($dbconnection,$_POST['type']);
	
	$status='Active';
	


$insert=mysqli_query($dbconnection,"insert into option_dstmethods(code,name,status,category,type)
		values ('$code','$method','$status','$cat','$type')"); 
if ($insert){
	
}

else{
//echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}


if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM option_dstmethods WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['close'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  option_dstmethods SET status='CLOSED' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  option_dstmethods SET status='ACTIVE' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}

if(isset($_POST['update_dst']))
{include("../includes/dbconfig.php");
   $code=ucwords(mysqli_real_escape_string($dbconnection,$_POST['code']));
	$method=mysqli_real_escape_string($dbconnection,$_POST['method']);
	$cat=mysqli_real_escape_string($dbconnection,$_POST['cat']);
	$type=mysqli_real_escape_string($dbconnection,$_POST['type']);
	$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
	
	


$update=mysqli_query($dbconnection,"UPDATE option_dstmethods SET code='$code',name='$method',category='$cat',type='$type'  where id='$id'");
		
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
 var x=confirm("Are you sure you want to delete the DST Method from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to close this DST Method?");
 
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


$sql="SELECT * FROM  option_dstmethods WHERE id='$edit_id'";
$option_dstmethods_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($option_dstmethods_check) > 0){
while ($option_dstmethods= mysqli_fetch_array($option_dstmethods_check,MYSQLI_ASSOC)) {
	$code= $option_dstmethods['code'];
	$name= $option_dstmethods['name'];
	$category= $option_dstmethods['category'];
	$type= $option_dstmethods['type'];

}
	} ?>

        
		  
          <div class="form_head">EDITING DST METHOD</div>
  <form action="" method="post" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
   <input type="hidden" class="form-control" placeholder="id" value="<?php echo $edit_id ?>" name="id" />
     
      <label  class="col-sm-2 control-label">Code</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="code" value="<?php echo $code ?>" name="code" />
      </div>
	  <label  class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4"> 
          <input type="text" class="form-control" value="<?php echo $name ?>" placeholder="Method Name here" name="method" />
     </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Category</label>
      <div class="col-sm-4"> 
       <select name="cat" class="form-control" REQUIRED>
	   <option value="<?php echo $category ?>"  style='background-color:#CCCCCC;'><?php echo $category ?></option>
			<option value="dst1" style='background-color:#CCCCCC;'>dst1</option>
			<option value="dst2" style='background-color:#CCCCCC;'>dst2</option>
			</select>
      </div>
	  <label  class="col-sm-2 control-label">Type</label>
      <div class="col-sm-4"> 
	  	<select name="type" class="form-control">
		<option value="<?php echo $type ?>" style='background-color:#CCCCCC;'><?php echo $type ?></option>
			<option value="Genotypic" style='background-color:#CCCCCC;'>Genotypic</option>
			<option value="Phenotypic" style='background-color:#CCCCCC;'>Phenotypic</option>
			</select>
			
        
      </div>
       </div>
	   
	   
	   <div class="form-group"> 
	   <div class="col-sm-7"> 
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="update_dst"  class="btn btn-primary">Submit</button>
      </div>
	  </div>
	</form>
	

<?php 
}

else{
?>

<div class="form_head">LIST OF DST METHODS </div>



<?php

include("../includes/dbconfig.php");  

 $query=mysqli_query($dbconnection,"select * from option_dstmethods  ORDER BY id desc"); 
  $display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Method</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_dstmethod.php'; ?>
    </div>
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Code</th>
	<th>Name</th>
	<th>Category</th>
	<th>Type</th>
	
	<th>Status</th>
	
	<th colspan="3">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
  $id= $fields['id'];
	 $code= $fields['code'];
	$name= $fields['name'];
	$category= $fields['category'];
	$type= $fields['type'];
	$status= $fields['status'];
	  
  ?>
     <td>&nbsp; <?php echo $code;?></td>
     <td>&nbsp; <?php echo $name;?></td>
	<td>&nbsp; <?php echo $category;?></td>
	<td>&nbsp; <?php echo $type;?></td>
	<td>&nbsp; <?php echo $status;?></td>
	
   
	<td><form action='' method='POST'><input type='hidden' name='delete_userid' value='<?php echo $id ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $id ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  ></td>
		
		<td>
       <?php if ($status=='CLOSED'){?>
        <input type='hidden' name='active_userid' value='<?php echo $id ?>'>
		<input type='submit' value='ACTIVATE' class="btn btn-success btn-sm" onclick='return activate_warning(this)' name='Activate'>
        <?php }else{?> <input type='hidden' name='suspended_userid' value='<?php echo $id ?>'>
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