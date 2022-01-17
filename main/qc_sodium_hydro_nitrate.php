
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

if(isset($_POST['edited_qc']))
{
	include("../includes/dbconfig.php");	
$comment=mysqli_real_escape_string($dbconnection,$_POST['comment']);
$performeddate=$_POST['performeddate'];
$qcpassfail=mysqli_real_escape_string($dbconnection,$_POST['qcpassfail']);
$reviewedby=mysqli_real_escape_string($dbconnection,$_POST['reviewedby']);
$reviewdate=mysqli_real_escape_string($dbconnection,$_POST['reviewdate']);
$performedby=mysqli_real_escape_string($dbconnection,$_POST['performedby']);
$lotno=mysqli_real_escape_string($dbconnection,$_POST['lotno']);
$expdate=mysqli_real_escape_string($dbconnection,$_POST['expdate']);
$prepdate=mysqli_real_escape_string($dbconnection,$_POST['prepdate']);
$id=$_POST['id'];

$insert=mysqli_query($dbconnection,"UPDATE qc_sodiumhydro_nitrate SET prepdate='$prepdate', comment='$comment',
performeddate='$performeddate',qcpassfail='$qcpassfail', reviewedby='$reviewedby',reviewdate='$reviewdate',
performedby='$performedby',lotno='$lotno',expdate='$expdate' where id='$id'");
		 
if ($insert){
	
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
 
if(isset($_POST['submitqc']))
{
	include("../includes/dbconfig.php");	
$comment=mysqli_real_escape_string($dbconnection,$_POST['comment']);
$performeddate=$_POST['performeddate'];
$qcpassfail=mysqli_real_escape_string($dbconnection,$_POST['qcpassfail']);
$reviewedby=mysqli_real_escape_string($dbconnection,$_POST['reviewedby']);
$reviewdate=mysqli_real_escape_string($dbconnection,$_POST['reviewdate']);
$performedby=mysqli_real_escape_string($dbconnection,$_POST['performedby']);
$lotno=mysqli_real_escape_string($dbconnection,$_POST['lotno']);
$expdate=mysqli_real_escape_string($dbconnection,$_POST['expdate']);
$prepdate=mysqli_real_escape_string($dbconnection,$_POST['prepdate']);
//$performedby=mysqli_real_escape_string($dbconnection,$_POST['performedby']);


$insert=mysqli_query($dbconnection,"insert into qc_sodiumhydro_nitrate (lotno,expdate,qcpassfail,performedby,performeddate,
reviewedby,reviewdate,comment)
		values ('$lotno','$expdate','$qcpassfail','$performedby','$performeddate','$reviewedby','$reviewdate','$comment'
		)"); 
if ($insert){
echo "User friendly notification to be developed";
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}



if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM qc_sodiumhydro_nitrate WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  qc_sodiumhydro_nitrate SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  qc_sodiumhydro_nitrate SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

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

function delete_warning(node){
 var x=confirm("Are you sure you want to delete this entry from the database?");
 
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
$sql="SELECT * FROM  qc_sodiumhydro_nitrate WHERE id='$edit_id'";
$qc_sodiumhydro_nitrate_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($qc_sodiumhydro_nitrate_check) > 0){
while ($user= mysqli_fetch_array($qc_sodiumhydro_nitrate_check,MYSQLI_ASSOC)) {
	$lotno= $user['lotno'];
	$performedby= $user['performedby'];
	$reviewedby= $user['reviewedby'];
	$expdate= $user['expdate'];
	$qcpassfail= $user['qcpassfail'];
	$reviewdate= $user['reviewdate'];
	$comment= $user['comment'];
	$prepdate= $user['prepdate'];
	$performeddate= $user['performeddate'];
	$id= $user['id'];
}
	} ?>
	<div class="form_head">FO-MYC-P002-A: UPDATING SODIUM HYDROXIDE-SODIUM CITRATE QC  </div>
  <form action="" method="post" name="requestor" autocomplete="off">
  <div class="form-horizontal">
   <div class="form-group"> 
     
	  <label  class="col-sm-3 control-label">Preparion & Autoclaved Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input16" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($prepdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($prepdate));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input16" value="<?php echo $prepdate ?>" name="prepdate" />
				</div>
    </div>
<div class="form-group"> 
 <input type="hidden" name="id" value="<?php echo $id ?>" >
      <label  class="col-sm-2 control-label">Lot No. of NaOH-Citrate Solution:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Lot No. of NaOH-Citrate Solution" value="<?php echo $lotno ?>" name="lotno" />
      </div>
	  <label  class="col-sm-2 control-label">NaOH-Citrate Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input11" value="<?php echo $expdate ?>" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($expdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($expdate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input11" value="<?php echo $expdate ?>" name="expdate" />
				</div>
    </div>
	<div class="form-group"> 
	
	    <label  class="col-sm-2 control-label">Reviewed By</label>
      <div class="col-sm-4">
			<select class="form-control"  name="reviewedby" >
			<option value="<?php echo $reviewedby ?>"><?php echo $reviewedby ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
      </div>
	   <label  class="col-sm-2 control-label">Review Date</label>
       <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" value="<?php echo $reviewdate ?>" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($reviewdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($reviewdate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12"  name="reviewdate" value="<?php echo $reviewdate ?>" />
				</div>
	  </div>
	<div class="form-group"> 
	<label  class="col-sm-2 control-label">Performed By:</label>
      <div class="col-sm-4"> 
       <select class="form-control" name="performedby" >
			<option value="<?php echo $performedby ?>"><?php echo $performedby ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
      </div>
	<label  class="col-sm-2 control-label">Performed By Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input13" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text"  value="<?php if($performeddate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($performeddate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input13" value="<?php $performeddate ?>" name="performeddate" />
				</div>
	 
	
       </div>
	   
	  <div class="form-group"> 
	  <label  class="col-sm-2 control-label">QC PASS/FAIL:</label>
      <div class="col-sm-4"> 
       <select class="form-control" name="qcpassfail" required >
			<option value="<?php echo $qcpassfail ?>"><?php echo $qcpassfail ?></option>
			<option value="Pass">Pass</option>
			<option value="Fail">Fail -</option>
			
		</select>
      </div>
<label  class="col-sm-2 control-label">Comment</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Comment" value="<?php echo $comment ?>" name="comment" />
      </div>
	  </div>
	   <div class="form-group"> 
		  <div class="col-sm-4"> 
		  </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="edited_qc"  class="btn btn-primary">Submit</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>
  
 

<?php
}else{
include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from qc_sodiumhydro_nitrate  ORDER BY id desc"); 
  $display="Displaying System Users";
  $anddisplay="";
  $num_rows=mysqli_num_rows($query);
  ?>
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Entry</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php require_once 'new_qc_hyrdoxide_citrate.php'; ?>
    </div>
	<?php 
  if($num_rows>0)
  {?>
	
	<?php if(isset($_GET['passreset'])){
	  echo '<b>'.'<font color="red">'.'<center>'."<h4>Password Successfully reset to 123456 Please advise the user to login and activate the account
	 </h4> ".'</center>'.'</font>'.'<b>';
	   
} ?>
<div class="form_head">FO-MYC-P002-A: SODIUM HYDROXIDE-SODIUM CITRATE QC FORM  </div>


 <div class="table-responsive">
<table  border="1" class="table">
<tr><th> Preparation & Autoclaved Date</th>
     <th> #Lot No of NaOH-Citrate Solution</th>
  <th>Expiry Date of NaOH-Citrate</th>
  <th>Performed By</th>
	<th>Performed Date</th>
	
	
	<th>QC Pass/Fail</th>
	<th>Reviewed By</th>	
	<th>Review Date</th>
	<th>Comment</th>
	<th colspan="2">Action</th>
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $user_id = $fields['id']; 
	  $prepdate=$recdate=date('d-m-Y', strtotime($fields['prepdate']));	 
$expdate=$recdate=date('d-m-Y', strtotime($fields['expdate']));	 
$reviewdate=$recdate=date('d-m-Y', strtotime($fields['reviewdate']));	 
$performeddate=$recdate=date('d-m-Y', strtotime($fields['performeddate']));	
if($performeddate=='01-01-1970'){$performeddate='';}
if($reviewdate=='01-01-1970'){$reviewdate='';}
if($expdate=='01-01-1970'){$expdate='';}
if($prepdate=='01-01-1970'){$prepdate='';}
//$expdate=$recdate=date('d-m-Y', strtotime($fields['expdate']));	  
  ?>
  <td>&nbsp; <?php echo $prepdate;?></td>
  <td>&nbsp; <?php echo $fields['lotno'];?></td>
  <td>&nbsp; <?php echo $expdate;?></td>

	
  <td>&nbsp; <?php echo $fields['performedby'];?></td>
	<td>&nbsp; <?php echo $performeddate;?></td>
    <td>&nbsp; <?php echo $fields['qcpassfail'];?></td>

	<td>&nbsp; <?php echo $fields['reviewedby'];?></td>
	<td>&nbsp; <?php echo $reviewdate;?></td>
	<td>&nbsp; <?php echo  $fields['comment'];?></td>
	
	
	<form action='' method='POST'>
	<td><input type='hidden' name='delete_userid' value='<?php echo $user_id ?>'>
	<input type='hidden' name='edit_id' value='<?php echo $user_id ?>'>
   <input type='submit' value='EDIT' class="btn btn-success btn-sm" name='Edit'>  
   </td>
<td>   
<input type='submit' value='DELETE' class="btn btn-danger btn-sm" name='Delete' onclick='return delete_warning(this)' <?php if($user_id==$_SESSION['id']){ echo "title='You can not delete yourself while logged in.' style='background-color:#CCCCCC;' disabled"; }?>>
     	</td></form>

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
 <script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>



</body>
</html>