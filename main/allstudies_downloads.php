<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>


</head>
<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
<?php

// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
$date=date("d-m-Y");


header("Content-Disposition: attachment; filename=All_Studies$date.xls");
 
// Add data table
//include 'view_yap_members_exc.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>


<body>

<div class="form_head"><h1><center>LIST OF CURRENT AND CLOSED PROJECTS </center></h1> </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from studycodes  ORDER BY id desc"); 
  $display="Displaying System Users";
  $anddisplay="";
  ?>
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
	</tr>
	  <?php } ?>

</table>
</div>
</div>
</fieldset>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
</div>

</body>
</html>