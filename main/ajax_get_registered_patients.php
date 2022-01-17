<script type="text/javascript">
function showpatient(){
alert("This is the p");
}
</script>

<style type="text/css">
.accessionrow:hover { background-color: #CCCCCC; font-weight: ;}
</style>

<?php


//get the q parameter from URL
$q=$_GET["q"];


//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";

include("../includes/dbconfig.php");

$sql="SELECT * FROM patients WHERE pid like '%$q%' or pid_other like '%$q%' or name like '%$q%'";

$result = mysqli_query($dbconnection,$sql);
$count=mysqli_num_rows($result);

if($count!=0){echo "<font color='green' size='5'><b><u>Suggested Names of Registered Patients</u></b></font>";

$hint="<div class='table-responsive'><table border='1' class='table' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
<tr bgcolor='#fffbf6' align='left'>	<th>PID#</th>	<th>Initials</th>	<th>Name</th> <th>Study</th>	<th>Telephone</th>	<th>LC1/Village</th>	
<th>Res District</th>	<th>OPTIONS</th></tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$pid2=$row['pid_other'];
  $hint=$hint . "<tr bgcolor='#fffbf6' align='left' class='accessionrow' title='Please ensure that **Details match those on the request form** '>
  
  <td>" . $row['pid'] . "</td>
  <td>" . $row['pinitials'] . "</td>
  <td><a title='Register a sample for ".$row['name'] . "' href='samples_registration.php?pid=". $row['pid']."&&otherpid=$pid2".
  "&&s_code=". $row['study']."&&pauto_id=". $row['id']."'>" . $row['name'] . "</a></td>
  <td>" . $row['study']. "</td>
  <td>" . $row['telephone']. "</td>
  <td>" . $row['village']. "</td>
  <td>" . $row['district']. "</td>
  <td>
  <button class='btn btn-success' onclick=\"location.href='samples_registration.php?pid=". $row['pid']."&&otherpid=$pid2"."&&s_code=". $row['study']."&&pauto_id=". $row['id'] . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>Sample Reg</button>
   
  <button class='btn btn-info' onclick=\"location.href='showpatient.php?patient=". $row['id'] . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>More Details</button>
       
	<button class='btn btn-danger' onclick=\"location.href='sample_rejection.php?pid=". $row['pid']."&&otherpid=$pid2"."&&s_code=". $row['study']."&&pauto_id=". $row['id'] . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>Reject Sample</button>
  </td>
  </tr>";
  }

  $hint=$hint . "</table></div>";
  $response=$hint;
}
  
else
  {
 $response="<font color='red' size='5'>  >>> There is no suggestion from the Database</font>";
  }

//output the response
echo $response;
echo "<br><br>";
}
?>