<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
<link href="../scripts/custom_dashboard.css" rel="stylesheet" />
<link href="../scripts/bootstrap_font_awesome.css" rel="stylesheet" />
</head>

<body>

<div id="wrapper" class='container'>

<div id="banner" class='row'>
<?php include("../includes/banner.php"); ?>
</div>
<div class="art-mide">
    <div class="message">
        <?php
        error_reporting(0);
       // echo " Welcome to data backup";
        $msg = $_GET['yes'];
        if($msg ==1){
            ?>
            <div class="btn-info">Data restored successfully</div>
        <?php
        }
        ?>
    </div>
    <h2>Welcome To System Restore Centre</h2>
       <div class="col-sm-5">  <h3>Quick Procedures</h3>   
	   <div class="det">
  <b> * Paste latest sql backup file in recover folder(C:/Wamp/WWW/tblis_jcrc/recover)<br>
   * Make Sure You have Wampserver V2.1 and above Running<br>
   * Go to localhost/tblis-jcrc/recover [Paste this link in your browser]<br>
* Browse the backup sql file (This file should be browsed from (C:/Wamp/WWW/tblis_jcrc/recover)<br>
 </b>
</div>
</div>
<div class="col-sm-7"> 
 <form action="restore.php" method="post">
                  <div class="form-group"> 
	   <div class="col-sm-3">    Browser the Backup file
	   </div>
                   <div class="col-sm-3"> 
				   <input type="file" name="file"/>
				   </div>
				   <div class="col-sm-3"> 
                    <input type="submit" value="Restore" name="restore" class="btn btn-success"/>
               </div> </form>
			   </div>

            
        </div>
    </div>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</div>

</body>
</html>