
<script type="text/javascript">
	function displaypass(){
		//alert('change');
	}
</script>
<?php include("../includes/connection.php");?>
			<?php 
			//php code display should be inside the modal
				//should be set inside the body modal
				if(isset($_POST['change'])){
					$user_id=$_SESSION['id'];
					$pass=$_POST['pass'];
					$cpass = $_POST['cpass'];
					$pass = mysqli_real_escape_string($con,$_POST['pass']);
					$cpass = mysqli_real_escape_string($con, $_POST['cpass']);
					if($pass!=$cpass){
						echo "
						<script>alert('Sorry passwords do not match');
						location.href='index.php';
						</script>";
						//echo "<p style='color:red;'>sorry, passwords do not match</p>";
					}else{
						$sql = "UPDATE users SET password=PASSWORD('$pass') WHERE id='$user_id'";
						$query = mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
						echo "<script>
						alert('Password successfully changed');
						location.href='logout.php';
						</script>";
						}
				}
			?>

<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
		</div>
		<div class="modal-body">
			
			
			<p class="form_head">Password Change</p>
			<form action="" method="post" name="rquestor" autocomplete="off">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-3 control-label">New Password</label>
						<div class="col-sm-7">
							<input type="password" class="form-control" name="pass" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Confirm New Password</label>
						<div class="col-sm-7">
							<input type="password" class="form-control" name="cpass" required>
						</div>
					</div>
					<div class="form-group">
					<div class="col-sm-6"></div>
						<div class="col-sm-4">
							<button type="submit" name="change" onclick = "displaypass()" class="btn btn-primary">Change</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>