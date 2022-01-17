<?php include("../includes/global_content.php");?>
<?php include("../includes/session_start.php");?>
<?php
	//$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang='en' oncontextmenu='return false'>
<head>
	<title><?php echo $title;?></title>
	<?php include("../includes/headercontent.php");?>
	<?php include("../includes/headerbootstrapcontent.php");?>
</head>
<body>
	<div id="wrapper" class='container'>

	<div id="banner" class='row'>
	<?php //include("../includes/banner.php"); ?>
	</div>

	<div id="middle" class='row'>
	<?php  // start checking for illegal login
	if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>

	<div id="welcome">
	<?php //include("../includes/welcomediv.php"); ?>
	</div>

	<div id="content">

	<div class="col-md-12"> 

	<fieldset>
	<legend align="center">CHANGE PASSWORD</legend>

	<tr align='center'><td colspan='3'> <font color='blue'><h4>	
	Welcome  <?php echo $_SESSION['name']; ?><br />
	</h4></font>
	<font color='red'><h3>	
	As a first time user of this system you are required to change your password <br />
	</h3></font>
	</td> <td>&nbsp; &nbsp;&nbsp;</td>
	<td></td> <td>&nbsp; &nbsp;&nbsp;</td>
	<td>&nbsp; &nbsp;&nbsp;</td>
	</tr>
	</table>	
	<div class="form-horizontal"> 
	<form name="editpassword" action="activate_user.php"  method="POST" onsubmit="return validateformEditPassword();">
	<div class="form-group"> 
	<label class="col-sm-2 control-label">
	New Password:
	</label>
	<div class="col-sm-4">
	<input type="password" name="newpassword" size="" value="" title="" class="form-control" required>
	</div>
	<div class="col-sm-1">
	<input name="editpassword" type="submit" style="" class="btn btn-success" value="CHANGE">
	</div>
	<div class="col-sm-1">
	<input type="button" name="Submit" class="btn btn-danger"size="" value="CANCEL" title="" onclick="history.go(-1);return true;"/>
	</div>
	</div>
	</form>
	</div>


	</fieldset>
	<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
	</div>

	<?php 
	// stop checking for illegal login
	} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
	</div>
	</div>
	<div id="footer" class='row'> 
	<?php include("../includes/footer.php"); ?>
	</div>
	</div>

</body>
</html>