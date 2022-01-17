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

$sql="SELECT r.*,p.* FROM rejected_samples r ,patients p WHERE p.id=r.patient and (p.pid like '%$q%' or name like '%$q%' or pid_other like '%$q%' or studycode='$q' )";

$result = mysqli_query($dbconnection,$sql);
$count=mysqli_num_rows($result);

if($count!=0){echo "<b><u>Suggested Names of Rejected Samples</u></b>";

$hint="<div class='table-responsive'><table border='1' class='table' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
<tr bgcolor='#fffbf6' align='left'>	<th>PID#</th>	<th>NAME</th>	<th>VILLAGE</th> <th>SUBCOUNTY</th>
	<th>DISTRICT</th>	<th>TELEPONE</th>	
<th>SEX</th><th>STUDY CODE</th><th>COLLTIME</th><th>COLLDATE</th><th>APPEARANCE</th>	<th>VOLUME</th>
<th>RCTTIME</th><th>RCTDATE</th><th>REJECTED BY</th></</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$pid2=$row['pid_other'];
	$colldate =$row['colldate'];
	$colldate= date('d-M-y',strtotime($colldate));
	$rctdate =$row['rctdate'];
	$rctdate= date('d-M-y',strtotime($rctdate));
  $hint=$hint . "<tr bgcolor='#fffbf6' align='left' class='accessionrow' title='Please ensure that **Details match those on the request form** '>
  <td>" . $row['pid'] . "</td>
  <td>" . $row['name'] . "</td>
  <td>" . $row['village'] . "</td>
   <td>" . $row['subcounty']. "</td>
   <td>" . $row['district']. "</td>
    <td>" . $row['telephone']. "</td>
   <td>" . $row['gender']. "</td>
  <td>" . $row['studycode']. "</td>
 <td>" . $row['colltime']. "</td>
 <td>" . $colldate. "</td>
	<td>" . $row['appearance']. "</td>
	<td>" . $row['volume']. "</td>
	<td>" . $row['rcttime']. "</td>
	 <td>" . $rctdate. "</td>
	<td>" . $row['rejected_by']. "</td>

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