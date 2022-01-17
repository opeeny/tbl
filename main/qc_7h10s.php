
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 
include("../includes/dbconfig.php");	
if(isset($_POST['edited_qc']))
{
	$expdatemedia=mysqli_real_escape_string($dbconnection,$_POST['expdatemedia']);
$lotnooadc=mysqli_real_escape_string($dbconnection,$_POST['lotnooadc']);
$expdateoadc=mysqli_real_escape_string($dbconnection,$_POST['expdateoadc']);
$lotnoagar=mysqli_real_escape_string($dbconnection,$_POST['lotnooadc']);
$expdateagar=mysqli_real_escape_string($dbconnection,$_POST['expdateagar']);
$lotnoselecta=mysqli_real_escape_string($dbconnection,$_POST['lotnoselecta']);
$expdateselecta=mysqli_real_escape_string($dbconnection,$_POST['expdateselecta']);
$comment=mysqli_real_escape_string($dbconnection,$_POST['comment']);
$prepby=mysqli_real_escape_string($dbconnection,$_POST['prepby']);
$prepdate=mysqli_real_escape_string($dbconnection,$_POST['prepdate']);
$qcpassfail=mysqli_real_escape_string($dbconnection,$_POST['qcpassfail']);
$reviewedby=mysqli_real_escape_string($dbconnection,$_POST['reviewedby']);
$reviewdate=mysqli_real_escape_string($dbconnection,$_POST['reviewdate']);

$id=$_POST['id'];

$insert=mysqli_query($dbconnection,"UPDATE qc_7h10s SET prepdate='$prepdate', comment='$comment',
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
	
	
	$expdatemedia=mysqli_real_escape_string($dbconnection,$_POST['expdatemedia']);
$lotnooadc=mysqli_real_escape_string($dbconnection,$_POST['lotnooadc']);
$expdateoadc=mysqli_real_escape_string($dbconnection,$_POST['expdateoadc']);
$lotnoagar=mysqli_real_escape_string($dbconnection,$_POST['lotnooadc']);
$expdateagar=mysqli_real_escape_string($dbconnection,$_POST['expdateagar']);
$lotnoselecta=mysqli_real_escape_string($dbconnection,$_POST['lotnoselecta']);
$expdateselecta=mysqli_real_escape_string($dbconnection,$_POST['expdateselecta']);
$comment=mysqli_real_escape_string($dbconnection,$_POST['comment']);
$prepby=mysqli_real_escape_string($dbconnection,$_POST['prepby']);
$prepdate=mysqli_real_escape_string($dbconnection,$_POST['prepdate']);
$qcpassfail=mysqli_real_escape_string($dbconnection,$_POST['qcpassfail']);
$reviewedby=mysqli_real_escape_string($dbconnection,$_POST['reviewedby']);
$reviewdate=mysqli_real_escape_string($dbconnection,$_POST['reviewdate']);

$insert=mysqli_query($dbconnection,"insert into qc_7h10s (expdatemedia,prepby,prepdate,lotnooadc,lotnoselecta,lotnoagar,expdateoadc,expdateselecta,expdateagar,qcpassfail,
reviewedby,reviewdate,comment)
		values ('$expdatemedia','$prepby','$prepdate','$lotnooadc','$lotnoselecta','$lotnoagar','$expdateoadc','$expdateselecta',
		'$expdateagar','$qcpassfail','$reviewedby','$reviewdate','$comment'
		)"); 
if ($insert){
header("location:?sub=success");
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}



if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM qc_7h10s WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);

}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  qc_7h10s SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  qc_7h10s SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

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
echo "<br><h1> the current id is only $edit_id</h2>";
include("../includes/dbconfig.php");


$sql="SELECT * FROM  qc_7h10s WHERE id='$edit_id'";
$qc_phosphatebuffer_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($qc_phosphatebuffer_check) > 0){
while ($user= mysqli_fetch_array($qc_phosphatebuffer_check,MYSQLI_ASSOC)) {

	$id= $user['id'];
	$performedby=$user['performedby'];
}
	} ?>
	<div class="form_head">UPDATING FO-MYC-P025-A: 7H10/11S+ QC MEDIA <?php //echo "id $prepby  $id $edit_id" ?>   </div>
  <form action="" method="post" name="requestor" autocomplete="off">
  <div class="form-horizontal">
     
<div class="form-group">
    
	  <label  class="col-sm-2 control-label">Prep Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input16" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input16" value="" name="prepdate" />
				</div>
<label  class="col-sm-2 control-label">Prep By</label>
      <div class="col-sm-4">
			<select class="form-control" name="prepby" >
			<option value="<?php echo $performedby;?>"><?php  echo $performedby; ?></option>
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
    </div>
	<div class="form-group">
      <label  class="col-sm-2 control-label">Lot No. Agar base:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" Value="<?php echo $user['lotnoagar'];?>" placeholder="Lot No. of phosphate buffer" name="lotnoagar" />
      </div>
	  <label  class="col-sm-2 control-label">Lot Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input11" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input11" value="" name="expdateagar" />
				</div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Lot # OADC:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $user['lotnooadc'];?>" placeholder="Lot No.OADC" name="lotnooadc" />
      </div>
	  <label  class="col-sm-2 control-label">Lot OADC Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12" value="" name="expdateoadc" />
				</div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Lot # Selectab:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" value="<?php echo $user['lotnoselecta'];?>" placeholder="Lot No. of phosphate buffer" name="lotnoselecta" />
      </div>
	  <label  class="col-sm-2 control-label">Lot Selectab Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input13" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input13" value="" name="expdateselecta" />
				</div>
    </div>
	<div class="form-group"> 
     
	  <label  class="col-sm-2 control-label">Media Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input18" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input18" value="" name="expdatemedia" />
				</div>
    </div>
<div class="form-group"> 
<label  class="col-sm-2 control-label">Reviewed By</label>
      <div class="col-sm-4">
			<select class="form-control" name="reviewedby" >
			<option value="<?php echo $user['reviewedby'];?>"><?php echo $user['reviewedby'];?></option>
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
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12"  name="reviewdate" />
				</div>
	  </div>
	
	  <div class="form-group"> 
	  <label  class="col-sm-2 control-label">QC PASS/FAIL:</label>
      <div class="col-sm-4"> 
       <select class="form-control" name="qcpassfail" required >
			<option value="">-Select -</option>
			<option value="Pass">Pass</option>
			<option value="Fail">Fail -</option>
			
		</select>
      </div>
<label  class="col-sm-2 control-label">Comment</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Comment" name="comment" />
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
 $query=mysqli_query($dbconnection,"select * from qc_7h10s  ORDER BY id desc"); 
  $num_rows=mysqli_num_rows($query);
 
 ?><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">New Entry</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php require_once 'new_qc_7h10s.php'; ?>
    </div>
	<?php if($num_rows>0)
  {?>
	
<div class="form_head">FO-MYC-P025-A: 7H10/11S+ QC MEDIA LOG</div>


 <div class="table-responsive">
<table  border="1" class="table">
<tr>

<th> Prep By</th>
<th> Prep  Date</th>
     <th> Lot No.Agar Base</th>
  <th>Exp Date Agar Base</th>
  <th> Lot No.OADC</th>
  <th>Exp Date OADC</th>
  <th> Lot No.Selectab</th>
  <th>Exp Date Selectab</th>
  <th>Exp Date Media</th>
  <th>QC Pass/Fail</th>
  
	
	
	<th>Reviewed By</th>	
	<th>Review Date</th>
	<th>Comment</th>
	<th colspan="2">Action</th>
	
 </tr> 
  <tr><?php
	  while ($fields=mysqli_fetch_assoc($query))
	  {	  
	  $qc_id = $fields['id']; 
	  $prepdate=$recdate=date('d-m-Y', strtotime($fields['prepdate']));	 
$expdateagar=$recdate=date('d-m-Y', strtotime($fields['expdateagar']));	
$expdateselecta=$recdate=date('d-m-Y', strtotime($fields['expdateselecta']));
$expdateoadc=$recdate=date('d-m-Y', strtotime($fields['expdateoadc'])); 
$reviewdate=$recdate=date('d-m-Y', strtotime($fields['reviewdate']));	 
//$performeddate=$recdate=date('d-m-Y', strtotime($fields['performeddate']));	
//if($performeddate=='01-01-1970'){$performeddate='';}
if($reviewdate=='01-01-1970'){$reviewdate='';}
if($expdateselecta=='01-01-1970'){$expdateselecta='';}
if($expdateoadc=='01-01-1970'){$expdateoadc='';}
if($expdateagar=='01-01-1970'){$expdateagar='';}  
 if($prepdate=='01-01-1970'){$prepdate='';}   ?>
  
  <td>&nbsp; <?php echo $fields['prepby'];?></td>
  <td>&nbsp; <?php echo $prepdate;?></td> 
   <td>&nbsp; <?php echo $fields['lotnoagar'];?></td>
  <td>&nbsp; <?php echo $expdateagar;?></td> 
   <td>&nbsp; <?php echo $fields['lotnooadc'];?></td>
  <td>&nbsp; <?php echo $expdateoadc;?></td>

  <td>&nbsp; <?php echo $fields['lotnoselecta'];?></td>
  <td>&nbsp; <?php echo $expdateselecta;?></td>

   <td>&nbsp; <?php echo $fields['expdatemedia'];?></td>
	
  
    <td>&nbsp; <?php echo $fields['qcpassfail'];?></td>

	<td>&nbsp; <?php echo $fields['reviewedby'];?></td>
	<td>&nbsp; <?php echo $reviewdate;?></td>
	<td>&nbsp; <?php echo  $fields['comment'];?></td>
	
	
	<form action='' method='POST'>
	<td><input type='hidden' name='delete_userid' value='<?php echo  $qc_id ?>'>
	<input type='hidden' name='edit_id' value='<?php echo $qc_id ?>'>
   <input type='submit' value='EDIT' class="btn btn-success btn-sm" name='Edit'>  
   </td>
<td>   
<input type='submit' value='DELETE' class="btn btn-danger btn-sm" name='Delete' onclick='return delete_warning(this)'>
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
<div>FO-MYC-P025-A Rev.No:03 Effective Date: 31 Jul 2016</div>
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