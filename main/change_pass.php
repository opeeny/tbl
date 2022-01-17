
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		<?php
		include("../includes/dbconfig.php");	

if(isset($_POST['Change']))
{
	$userid=$_SESSION['id'];
    
	$pass=mysqli_real_escape_string($dbconnection,$_POST['pass']);
	$cpass=mysqli_real_escape_string($dbconnection,$_POST['cpass']);
	if($pass!=$cpass){
		echo "<script>
alert('Sorry Passwords donot Match');
location.href='index.php';
</script> ";
	}else{
		$sql="UPDATE users SET password=PASSWORD('$pass') WHERE id=$userid ";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

		echo "<script>
alert('Password Update Successful. Login Again');
location.href='logout.php';
</script> ";
		}


}

?>
          <div class="form_head">PASSWORD CHANGE</div>
  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-3 control-label">New Password:</label>
      <div class="col-sm-7"> 
        <input type="password" class="form-control" placeholder="Enter New Password" required name="pass" />
      </div>
	  </div>
	  <div class="form-group"> 
	  <label  class="col-sm-3 control-label">Comfirm New Password:</label>
      <div class="col-sm-7"> 
          <input type="password" class="form-control" placeholder="Comfirm New Password" required name="cpass" />
     </div>
    </div>
	
	   
	   <div class="form-group"> 
	   <div class="col-sm-7"> 
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="Change"  class="btn btn-primary">Submit</button>
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
