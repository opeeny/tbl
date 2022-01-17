<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
if(isset($_POST['Submit_tech']))
{
include("../includes/dbconfig.php");
	$optname=ucwords(mysqli_real_escape_string($dbconnection,$_POST['optname']));
	$status='Active';
	
$checkduplicate=mysqli_query($dbconnection,"select *  from resultsoptions_interpretation
 where interpretation='$optname'");

if(mysqli_num_rows($checkduplicate)<1)
{
$insert=mysqli_query($dbconnection,"insert into resultsoptions_interpretation 
(interpretation,status) values('$optname','Active')"); 
if ($insert){
	}

else{

}
}
}
if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM resultsoptions_interpretation WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  resultsoptions_interpretation SET status='Deactive' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

//header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];
include("../includes/dbconfig.php");
mysqli_query($dbconnection,"UPDATE  resultsoptions_interpretation 
SET status='Active' WHERE id='$active_userid'") or die("ERROR :". mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['update_spec']))
{
include("../includes/dbconfig.php");
$spectype=ucwords(mysqli_real_escape_string($dbconnection,$_POST['spectype']));
$id=$_POST['id'];
$update=mysqli_query($dbconnection,"UPDATE resultsoptions_interpretation 
SET interpretation='$spectype' 
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
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
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


$sql="SELECT * FROM  resultsoptions_interpretation WHERE id='$edit_id'";
$studycodes_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($studycodes_check) > 0){
while ($visitinterval= mysqli_fetch_array($studycodes_check,MYSQLI_ASSOC)) {
	///$initial= $visitinterval['initial'];
	$spectype= $visitinterval['interpretation'];
	$status= $visitinterval['status'];
	$id= $visitinterval['id'];
}
	} ?>

          <div class="form_head">EDITING  <?php echo $id; ?></div>
  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Interpretation</label>
      <div class="col-sm-4"> <input type="hidden"name="id" class="form-control" value="<?php echo $id ?>">
        <input type="text" class="form-control" value="<?php echo $spectype ?>" placeholder="Project Title" name="spectype" />
      </div>
	  <div class="col-sm-4"> 
        <button type="Submit" name="update_spec"  class="btn btn-primary">UPDATE</button>
      </div>
    </div>
 </div>
 </div>
  </form>

<?php 
}

else{
?>

<div class="form_head">Result Interpretation </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from resultsoptions_interpretation  
 ORDER BY status asc"); 
  //$display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  if($num_rows>0)
  {?>
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Visit Interval option</button>
 
  <div class="modal fade" id="myModal" role="dialog">
<?php  require_once 'new_interpret.php'; ?>
    </div><br>
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
<tr>
    
	<th>Result Option</th>	
 </tr> 
 </thead>
 <tbody>
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	$interpretid=$fields['id'];
	$status=$fields['status'];
	  
  ?>
    
    
	<td>&nbsp; <?php echo $fields['interpretation'];?></td>
	<td>
	<form action='' method='POST'>
	<input type='hidden' name='delete_userid' value='<?php echo $interpretid?>'>
        
         <input type='hidden' name='delete_userid' value='<?php echo $interpretid?>'>
        
       <input type='hidden' name='edit_id' value='<?php echo $interpretid ?>'>
        <input type='submit' value='EDIT' class="btn btn-primary btn-sm" name='edit'>
		
        
       <?php if ($status=='Active'){?>
	     <input type='hidden' name='suspended_userid' value='<?php echo $interpretid?>'>
		<input type='submit' value='DEACTIVATE' class="btn btn-warning btn-sm" onclick='return edit_warning(this)' name='Suspend' />
		
	   
      <?php } if ($status=='Deactive'){?>
	    <input type='hidden' name='active_userid' value='<?php echo $interpretid ?>'>
		<input type='submit' value='ACTIVATE' class="btn btn-success btn-sm" onclick='return activate_warning(this)' name='Activate'/>
	   
      <?php } ?>
	  </form> 
		</td>
</tr>
  <?php
 
  	  }//closing the while loop
	   }//closing the if statement
	   else{ echo '<b>'.'<font color="red">'.'<center>'."Sorry! No data found".'</center>'.'</font>'.'<b>';
	   }
	   
?></tbody></table>


  
 
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