<script type="text/javascript">
function showpatient(){
alert("This is the p");
}
</script>

<style type="text/css">
.accessionrow:hover { background-color: #CCCCCC; font-weight: ;}
</style>

<?php
include("../includes/dbconfig.php");

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";

$sql="SELECT * FROM patients WHERE pid like '%$q%' or pid_other like '%q%' or name like '%$q%'";

$result = mysqli_query($dbconnection, $sql) or die("ERROR : " . mysqli_error($dbconnection));
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
  <td>" . $row['name'] . "</td>
  <td>" . $row['study']. "</td>
  <td>" . $row['telephone']. "</td>
  <td>" . $row['village']. "</td>
  <td>" . $row['district']. "</td>
  <td>
  <button onclick='window.open(\"showpatient.php?patient=". $row['id'] . "\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>More Details</button>
  <button onclick='window.open(\"showpatient_profile.php?patient=". $row['id'] . "\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>View Profile</button></td>
  </tr>";
  }

  $hint=$hint . "</table>";
  $response=$hint;
}
  
else
  {
  $response="  >>> There is no suggestion from the Database";
  }

//output the response
echo $response;
}
?>