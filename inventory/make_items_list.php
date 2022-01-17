<?php
if(isset($_POST['Submit'])=="Submit")
{
include("../includes/dbconfig.php");
    $particular = $_POST['particular'];
    $minimum    = $_POST['min'];
    $maximum    = $_POST['max'];
    $measure    = $_POST['measure'];
   $query = mysqli_query($dbconnection,"insert into products_list(product,minimum,maximum,measures)
    values('$particular','$minimum','$maximum','$measure')")or die(mysql_error($dbconnection));
if($query){
    header("Location:make_items_list.php?registered");
}else{
    echo "Not cool".mysql_error();
}
}
?>
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

    <script src="../jquery/jquery.are-you-sure.js"></script>
    <script src="../jquery/ays-beforeunload-shim.js"></script>
<script type="text/javascript">
  $(function() {

        // Example 1 - ... in one line of code
        $('#Patient').areYouSure();
</script>
 
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
    <?php require_once'../includes/stock_options.php'; ?>
</div>

<div class="col-md-10"> 
<?php if(isset($_GET['registered'])){
$registered=$_GET['registered']; 

echo "<div id='successmessage2'
 <center>Sample Registration successsful!</div>";
} ?>
<?php if(isset($_GET['savedsample'])){
$savedsample=$_GET['savedsample'];
$scode=$_GET['scode'];
//$ntrlpno=$_GET['ntrlpno']; 
$pname=$_GET['pname'];
echo "<div style='border:1px red solid;'><center><b>Sample with LAB NO <font color='red' size='5'>";if($scode!=''){echo "$scode-$savedsample";} else{echo $savedsample;} echo "</font></b> "; if($pname!=''){echo "has been registered for Patient <b>$pname"; } echo "</center></div><br>";
} ?>
<?php if(isset($_GET['rejected'])){
$savedsample=$_GET['rejected'];
$scode=$_GET['scode'];
//$ntrlpno=$_GET['ntrlpno']; 
$pname=$_GET['pname'];
echo "<div style='border:1px red solid;'><center><b>Sample for  <font color='red' size='5'>";if($pname!=''){echo "$pname";} else{echo "";} echo "</font>  has been rejected</b> "; echo "</center></div><br>";
} ?>
<div class="form_head">ADD AN ITEM ON THE LIST</div>

<?php // echo "<font color='blue'><b><center> $patient_reg_success</center></b></font>"; 
?>
  <form action="" method="post" id="patient" autocomplete="off"><div class="form-horizontal">
  <div class="form-group"> 
  <label  class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4">
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Enter particular's name" name="particular"  />
      </div>
      <label  class="col-sm-2 control-label label-format">Minimum quantity</label>
      <div class="col-sm-4">
          <input type="number" style="color: #222; text-transform: capitalize;"class="form-control" placeholder="Enter minimum quantiy" name="min"  />
      </div>
  </div>
<div class="form-group"> 
      <label  class="col-sm-2 control-label label-format">Maximum quantity</label>
      <div class="col-sm-4"> 
        <input type="text" style="color: #222; text-transform: capitalize;"class="form-control" placeholder="Maximum quantity" name="max"/>
      </div>
    <label  class="col-sm-2 control-label label-format">Measurement</label>
    <div class="col-sm-4">
        <input type="text" style="color: #222; text-transform: capitalize;"class="form-control" placeholder="Measurement unit" name="measure"/>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-6">
        <button type="Submit" name="Submit" class="btn btn-primary">Add Items</button>
    </div>
</div>
	 <div id="livesearch" style='font-size:0.8em;background-color:; border:; max-height:300px; width:; margin-right:; padding:; overflow:auto;'></div>
    
   </div>
  </form>
  
 
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