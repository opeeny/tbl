<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>

<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
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

<div class="col-md-12"> 

<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING PATIENT PROFILE DETAILS</b></legend>
<div class="form-horizontal">
<form action="" method="POST" name="" onsubmit="" autocomplete="off">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">SEARCH WORD::</label>
<div class="col-sm-5"> 
    <input type="text" class="form-control" name="" type="text" onkeyup="profiles_showPatientprofile(this.value)" placeholder="Search Using either PID or PID2 or Name"  />
</div>

<div class="col-sm-1"> 
</div>

</div>

</form>
</div>

<div id="livesearch" style='font-size:0.8em;background-color:; border:; max-height:300px; width:; margin-right:; padding:; overflow:auto;'></div>
</div>
</fieldset>
 
</div>



 <?php } 
else echo "<tr><td>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources</tr></td>";?>
</div>
<div id="footer"> 
<?php include("../includes/footer.php"); ?>
</div>
</div>

</body>
</html>