<?php ob_start();
include("includes/global_content.php"); ?>
<?php
session_name('TB-LIS');
session_start();


if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

include("includes/dbconfig.php");

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($dbconnection,$username);
$password = mysqli_real_escape_string($dbconnection,$password);

$sql="SELECT * FROM users WHERE username='$username'  and password=PASSWORD('$password')";
$result=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

// store user role to be used for security
while ($user = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
$id=$user['id'];
$name=$user['name'];
$role=$user['role'];
$status=$user['status'];
$username=$user['username'];
$password=$user['password'];
}

$count=mysqli_num_rows($result);

if($count==1){
if ($status=='Active'){ 
 $_SESSION['id']=$id;
 $_SESSION['name']=$name;
 $_SESSION['role']=$role;
 $_SESSION['username']=$username;
 $_SESSION['password']=$password;

 $sql = "INSERT into user_logs (username,name,action)  values('$username','$name','Successfully loggedin')";

mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
header("location:main");
}
if ($status=='Dormant'){ 
 $_SESSION['id']=$id;
 $_SESSION['name']=$name;
 $_SESSION['role']=$role;
 $_SESSION['username']=$username;
 $_SESSION['password']=$password;
  $sql = "INSERT into user_logs (username,name,action)  values('$username','$name','Logged in to first user page , Account Dormant')";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
header("location:main/first_user.php");
}
if($status=='Suspended'){ 
 $_SESSION['id']=$id;
 $_SESSION['name']=$name;
 $_SESSION['role']=$role;
 $_SESSION['username']=$username;
 $_SESSION['password']=$password;
 
 $sql = "INSERT into user_logs (username,name,action)  values('$username','$name','Failed login user under suspension')";

header("location:index.php?suspend");
}
}
else {
	 $sql = "INSERT into user_logs (username,name,action)  values('$username','N/A','Failed login')";

mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
header("location:index.php?login=fail");
}
 
}
ob_end_flush();

?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="TBLIS is a state-of-the-art database system that is customised for Tuberculosis laboratories to handle input, analysis, reporting and security of data for patients, specimen and test results">
<meta name="author" content="Landsat ICT Solutions Ltd | www.licts.co.ug">

<link rel="icon" href="images/favicon.ico">
<!--
<link rel="stylesheet" href="bootstrap336/css/bootstrap.min.css">
<link rel="stylesheet" href="scripts/custom_style.css">
<script src="bootstrap336/js/bootstrap.min.js"></script>
-->

<?php //include("includes/header_content.php"); ?>
<?php //include("includes/header_bootstrap_content.php"); ?>
<?php include("includes/login_header.php");?>
</head>
<br /><br />
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4"></div>
	</div>
	<div id="login">
		<form id="form-login" name="form-login" action="" method="POST" onsubmit="" autocomplete="off">
			<font style=" font:bold 40px 'Aleo'; text-shadow:1px 1px 14px #000; color:#fff;"><center><img src="images/tblis-logo-small-48x48.png" /> User Login</center></font>
			<br>
			<div class="input-prepend">
					<span style="height:30px; width:25px;" class="add-on"><i class="icon-user icon-2x"></i></span><input style="height:40px;" type="text" name="username" Placeholder="Username" required autofocus><br>
			</div>
			<div class="input-prepend">
				<span style="height:30px; width:25px;" class="add-on"><i class="icon-lock icon-2x"></i></span><input type="password" style="height:40px;" name="password" Placeholder="Password" required><br>
			</div>
			<div class="qwe">
				<button class="btn btn-large btn-primary btn-block pull-right" name="login" type="submit"><i class="icon-signin icon-large"></i>Login</button>
			<?php
			if(isset($_GET['login'])){
			if($_GET['login']="fail"){
			echo "<font color='red' size='2'>Login failed. Please try again!</font>";
			}}
			?> 
			<?php 
				if(isset($_GET['suspend'])){
				//$registered=$_GET['registered']; 
				echo "<font color='red' size='2'>Sorry Account currently suspended</font>";
				} 
				ob_end_flush();
			?>
			</div>
		</form>
	</div>
</div>
</body>
</html>