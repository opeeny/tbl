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

$sql="SELECT * FROM patients WHERE name like '%$q%' or pid like'%$q%' or pid_other like '%$q%'";

$result = mysqli_query($dbconnection,$sql);
$count=mysqli_num_rows($result);

if($count!=0){echo "<b><u>Suggested Names of Registered Patients</u></b>";

$hint="<div class=''><table class='table-bordered' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
<tr bgcolor='#fffbf6' align='left'>	<th>PID#</th>	<th>Initials</th>	<th>Name</th> <th>Study</th>	<th>Telephone</th>	<th>LC1/Village</th>	
<th>Res District</th>	<th>OPTIONS</th></tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $hint=$hint . "<tr bgcolor='#fffbf6' align='left' class='accessionrow' title='Please ensure that **Details match those on the request form** '>
  
  <td>" . $row['pid'] . "</td>
  <td>" . $row['pinitials'] . "</td>
  <td>" . $row['name'] . "</a></td>
  <td>" . $row['study']. "</td>
  <td>" . $row['telephone']. "</td>
  <td>" . $row['village']. "</td>
  <td>" . $row['district']. "</td>
  <td><a href='?findpatient=" . $row['id'] . "'>Search Freezer</a></td>
  </tr>";
  }

  $hint=$hint . "</table></div>";
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