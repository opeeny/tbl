
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
  <?php include("../includes/welcomediv_invent.php"); ?>
</div>
<div id="content">
<div class="col-md-2">
<!-- Side Menu for Admin Account-->
<?php require_once'../includes/inventorymain_options.php'; ?>
 </div>
<div class="col-md-10">
    <div>
        Number of items that have reached their minimum
        <i style="font-size: 20px; color: #ff0000;"><?php
            include("../includes/dbconfig.php");
            $user_query=mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id WHERE p.minimum>=s.qty_bal")or die(mysql_error());
            $num_rows = mysqli_num_rows($user_query);
            echo $num_rows;
            ?></i>

    </div>
</div>

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