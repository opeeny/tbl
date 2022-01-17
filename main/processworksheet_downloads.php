<?php
	include("../includes/global_content.php");
	include("../includes/session_start.php");
	//$_SESSION['labfrom']=$labfrom;
	echo "processworksheet_downloads".$_GET['labfrom'].$_SESSION['username'].$_GET['labto'];
 ?>
 <!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
</head>
<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
<?php 
	//The function header for sending raw excel,
	header("Content-type: application/vnd-ms-excel");
	//Defines the name of the export file Opeeny Godfrey_date
	$date=date('d-m-y', time());
	//$date=date("d-M-y");//this is also okay
	header("Content-Disposition: attachment; filename=Opeeny Godfrey_$date.xls");
	
	//Adding Data table	
?>
<body>
	<h2>ACCESSIONED SAMPLES PROCESS WORKSHEET</h2>
	<table  border="" class="table table-bordered">
		<tr align='left'><th>LABNO</th><th>STUDY</th>
			<th>COLL TIME</th><th>COLL DATE</th><th>APPEARANCE</th>
			<th>VOLUME</th><th>RECIEVED DATE</th><th>INTERVAL</th>
			<th>PROCESS DATE</th><th>PROCESS TIME</th><th>PROCESS TECH</th>
		</tr>
		<?php 
			if(isset($_GET['labfrom'])){
				$labfrom=$_GET['labfrom'];
				$labto=$_GET['labto'];
			}
			
			include("../includes/connection.php");
			$today=date('d-y-m', time());
			if($labto!=''){
				$sql="SELECT * FROM samples WHERE (labno between '".$labfrom."' and '".$labto."')";
			}else{
				$sql="SELECT * FROM samples WHERE (recieved_date='$today')";
			}
			$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
			while($row=mysqli_fetch_array($query)){
				$labno=$row['labno'];
				$study=$row['study_code'];
				$colltime=$row['collection_time'];
				$colldate=$row['labno'];
				$appearance=$row['labno'];
				$volume=$row['labno'];
				$recieved_date=$row['recieved_date']; $recieved_date=date('d-m-y', strtotime($row['recieved_date']));
				if($recieved_date=='01-Jan-70'){$recieved_date='';}
				$interval=$row['visit_interval'];
				$process_date=$row['process_date'];
				$process_time=$row['process_time'];
				$process_tech=$row['process_tech'];
				
				echo "<tr>
					<td>$labno</td>
					<td>$study</td>
					<td>$colltime</td>
					<td>$colldate</td>
					<td>$appearance</td>
					<td>$volume</td>
					<td>$recieved_date</td>
					<td>$interval</td>
					<td>$process_date</td>
					<td>$process_time</td>
					<td>$process_tech</td>
				</tr>"; 
			}?>
	</table>
</body>
<?php } ?>