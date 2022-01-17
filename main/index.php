<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>


<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/headercontent.php"); ?>
<?php include("../includes/headerbootstrapcontent.php"); ?>
<link href="../scripts/custom_dashboard.css" rel="stylesheet" />
<link href="../scripts/bootstrap_font_awesome.css" rel="stylesheet" />
</head>

<body>

<div id="wrapper" class='container'>

<div id="banner" class='row'>
<?php include("../includes/banner.php"); ?>
</div>

<div id="middle" class='row'>
<?php  // start checking for illegal login
if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
 
<div id="welcome">
<?php include("../includes/welcomediv.php"); ?>
</div>

<div id="content">

<?php require_once '../includes/dashbord.php'; ?>


</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</div>

</body>
</html>