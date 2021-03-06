<?php include("../includes/session_start.php");?>
<?php include("../includes/global_content.php");?>
<?php 
	if(isset($_POST['saverequester'])){
		include("../includes/connection.php");
		$title=ucwords(mysqli_real_escape_string($con, $_POST['title']));
		$name=strtoupper(mysqli_real_escape_string($con, $_POST['name']));
		$organisation=ucwords(mysqli_real_escape_string($con, $_POST['organisation']));
		$district=mysqli_real_escape_string($con, $_POST['district']);
		

		$sqr="INSERT INTO requestors(title,name,organisation,district)VALUES('$name','$title','$organisation','$district')";
		$query=mysqli_query($con, $sqr) or die("Error ".mysqli_error($con));
		if($query){
			echo'requestor saved successfully';
		}else{
			echo 'failed to save';
		}
		echo "<script>window.close();</script>";
	}

?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
	<?php include("../includes/headercontent.php"); ?>
	<?php include("../includes/headerbootstrapcontent.php"); ?>
</head>
<body>
	<div id="wrapper" class='container'>
	<div id="middle" class='row'>
		<?php  // start checking for illegal login
		if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
		 
		<div id="content">
		<br><br><br>
		<?php
		if(isset($_GET['saverequester-success'])){
			echo "<font color='green'>Requester Registration was successful</font>";
		}	
		?>

		<center><h4> <label class="label-format"> Requester Registration</label> </h4></center>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="requester_form" autocomplete="off"><div class="form-horizontal">
			
			<div class="form-group">  
			<label for="title" class="col-sm-2 control-label">Title</label>
			<div class="col-sm-4"> 
			<select name="title" class="form-control"  value = "">
				<option value="">-select-</option>
				<option value="Dr">Dcr</option>
				<option value="Prof">Prof</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
				<option value="Sir">Sir</option>
			</select>	
			</div>
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-4"> 
				<input type="text" name="name" class="form-control"  placeholder="Initials can go up to maximum of 3 And Minimum of 2" required/>
			</div>
			</div>
			
			<div class="form-group">  
			<label for="" class="col-sm-2 control-label">Organisation</label>
			<div class="col-sm-4"> 
				<input type="text" name="organisation" class="form-control" placeholder="" required/>
			</div>
			
			<label for="" class="col-sm-2 control-label">District</label>
			<div class="col-sm-4"> 
			   
			  <select name="district" class="form-control"  >
					
					<option value="">N/A</option>
					<?php
					include("../includes/connection.php");
					$sql="SELECT * FROM districts ORDER BY name";
					$districts=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

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
				<input type="submit" name='saverequester' class="btn btn-success" value='SAVE' class="form-control" placeholder=""/>
			</div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.close();">CLOSE</button>
			</div>
			<div class="col-sm-3"> </div>
			</div>
			
			</div>
			</form>
		</div>

		<?php  // stop checking for illegal login
		} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
		</div>
	</div>
</body>
</html>