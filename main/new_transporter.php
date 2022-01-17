<?php include("../includes/global_content.php");?>
<?php include("../includes/session_start.php");?>

<!DOCTYPE html>
<html lang='en' oncontextmenu='return false'>
	<head>
		<?php include("../includes/headercontent.php");?>
		<?php include("../includes/headerbootstrapcontent.php");?>
	</head>
	<body>
		<div id="wrapper" class="container">
			<div id="middle" class="row">
				<?php 
					//start checking for illegal logins
					if($_SESSION['username'] and $_SESSION['password']){ ?>
						<div id="content">
							<br><br><br>
							<?php 
								if(isset($_GET['saverequester-success'])){
									echo "<font color='green'>Transport Registration was successful</font>";
								}
							?>
							<center><h4><label class="label-format">Transport registration</label></h4></center>
							<form action="" method="post" name="requestor" autocomplete="off">
								<div class="form-horizontal">
									<div class="form-group">
								  <label  class="col-sm-2 control-label">Name</label>
								  <div class="col-sm-4"> 
									<input type="text" class="form-control" placeholder="Name eg Mukwaya Ambrose" name="fname" />
								  </div>
								  <label  class="col-sm-2 control-label">Initials</label>
								  <div class="col-sm-4"> 
									<input type="text" class="form-control" placeholder="Enter Initials" name="initials" />
								  </div>
								</div>
								<div class="form-group"> 
								  <label  class="col-sm-2 control-label">Contact</label>
								  <div class="col-sm-4"> 
									<input type="text" class="form-control" placeholder="Enter Contact Information" name="contact" />
								  </div>

								  <div class="col-sm-4"> 
									<button type="Submit" name="SAVETRANS"  class="btn btn-primary">Submit</button>
								  </div>
								</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
				<?php }else {
					echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a>to access the resources.</center>";
				} ?>
				
			</div>
		</div>
	</body>
</html>
