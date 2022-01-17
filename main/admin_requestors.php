<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

if(isset($_POST['Submit_tech']))
{
	include("../includes/dbconfig.php");
	$techname=ucwords(mysqli_real_escape_string($dbconnection,$_POST['techname']));
	
	$techinitials=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['techinitials']));
	
	$status='Active';
	


 $checkduplicate=mysqli_query($dbconnection,"select *  from requestors   where name='$techname' AND initial='$techinitials'");

if(mysqli_num_rows($checkduplicate) <1)
{
$insert=mysqli_query($dbconnection,"insert into trequestors (name,initial,status) values('$techname','$techinitials','Active')"); 
if ($insert){
	}

else{
//echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
}



if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM requestors WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['close'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  requestors SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  requestors SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['saverequester']))
{include("../includes/dbconfig.php");
   
	
	$title=ucwords(mysqli_real_escape_string($dbconnection,$_POST['title']));
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['name']));
$organisation=ucwords(mysqli_real_escape_string($dbconnection,$_POST['organisation']));
$district=mysqli_real_escape_string($dbconnection,$_POST['district']);
	$id=$_POST['id'];
	
	
	
	
$update=mysqli_query($dbconnection,"UPDATE requestors SET name='$name',title='$title',organisation='$organisation',district='$district' where id='$id'");
		
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
 var x=confirm("Are you sure you want to delete the Technician from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to Suspend this Technician?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to activate this closed Technician");
 
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


$sql="SELECT * FROM  requestors WHERE id='$edit_id'";
$reqs_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($reqs_check) > 0){
while ($req= mysqli_fetch_array($reqs_check,MYSQLI_ASSOC)) {
	$title= $req['title'];
	$name= $req['name'];
	$organisation= $req['organisation'];
	//$status= $techinitials['status'];
	$id= $req['id'];
}
	} ?>

          <div class="form_head">EDITING REQUESTORS DETAILS <?php echo $edit_id ?></div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="requester_form" autocomplete="off"><div class="form-horizontal">
	
	<div class="form-group">  
	<input type="hidden" name="id" class="form-control" value="<?php echo $id ?>"  />
	<label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-4"> 
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>" placeholder="" />
    </div>
	
	<label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-4"> 
        <input type="text" name="name" class="form-control" value="<?php echo $name ?>" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Organisation</label>
    <div class="col-sm-4"> 
        <input type="text" name="organisation" class="form-control" value="<?php echo $organisation ?>" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label">District</label>
    <div class="col-sm-4"> 
       
	  <select name="district" class="form-control"  >
			
			<option value="">N/A</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM districts ORDER BY name";
			$districts=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($district = mysqli_fetch_array ($districts,MYSQLI_ASSOC)) {
				$dname = $district['name'];
				$dist_id = $district['id'];
			echo "<option value='$dname' style='background-color:#CCCCCC;'>$dname</option>";	
			}			
			?>
		</select>
    </div>
	</div>
	
	<div class="form-group"> 
	<div class="col-sm-3"> </div>
	<div class="col-sm-2"> 
		<input type="submit" name='saverequester' class="btn btn-success" value='UPDATE' class="form-control" placeholder=""/>
    </div>
	<div class="col-sm-4">
		<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.close();">CLOSE</button>
	</div>
	<div class="col-sm-3"> </div>
	</div>
	
	</div></form>

<?php 
}

else{
?>

<div class="form_head">REQUESTORS  </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from requestors  "); 
  //$display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	
 <div class="table-responsive">
<table  border="1" class="table">
<tr>
    <th>Title</th>
	<th>Name</th>
	<th>Organisation</th>
	<th>District</th>
	<th colspan="2">Action</th>
	
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $id = $fields['id'];
	 
  ?>
     <td><?php echo $fields['title'];?></td>
     <td> <?php echo $fields['name'];?></td>
	<td> <?php echo $fields['organisation'];?></td>
	<td> <?php echo $fields['district'];?></td>
     

	
	
        
   <td><form action='' method='POST'>
   <input type='hidden' name='delete_userid' value='<?php echo $id ?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $id ?>'>
        <input type='submit' value='Edit' class="btn btn-success btn-sm" name='edit'  >
		</form></td>
	
	

 </tr>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '<b>'.'<font color="red">'.'<center>'."Sorry! No data found".'</center>'.'</font>'.'<b>';
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