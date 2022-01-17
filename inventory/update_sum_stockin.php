<?php
$id_lookup  = $_GET['stock'];
if(isset($_POST['Submit'])=="Submit")
{
	include("../includes/dbconfig.php");
    /*Get data from the form*/
    $sdate      = $_POST['sdate'];
    $part       = $_POST['particular'];
    $batchno    = $_POST['batch'];
    $qty_sys    = $_POST['quantity'];
    $edate      = $_POST['exp_date'];
    $mst        = $_POST['urate'];
    $stock_id   =  $_POST['stock_id'];
    $phy_qty    =  $_POST['phy_qty'];
    $date       =  date('Y-m-d');
    $reason     = $_POST['reason'];
//STORE REQUEST DETAILS
    $query = mysqli_query($dbconnection,"update stock_sum set Units='$mst',qty_bal='$phy_qty' where stock_id='$stock_id'") or die(mysql_error($dbconnection));
    mysqli_query($dbconnection,"insert into physical_count(product_id,initial_qty,physical_qty,date_count,reason)VALUES ('$part','$qty_sys','$phy_qty','$date','$reason')") or die(mysql_error());
    if($query){
        header("location:view_sum_stockin.php");
    }else{
        echo "Something went wrong".mysqli_error($dbconnection);
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
    echo "<div id='successmessage'>
 <center>Item Registration successsful!</div>";
} ?>
<div class="form_head">ADD NEW STOCK </div>

<?php // echo "<font color='blue'><b><center> $patient_reg_success</center></b></font>"; 
?>
    <?php
    include("../includes/dbconfig.php");
    $user_query=mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id where s.stock_id='$id_lookup'")or die(mysql_error($dbconnection));
    while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
    {
    $id     =$row['stock_id'];
    $part   =$row['particular'];
    ?>
  <form action="" method="post" id="patient" autocomplete="off">
      <div class="form-horizontal">
  <div class="form-group">
	  <label  class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4">
          <input type="hidden"  name="stock_id" value="<?php echo $row['stock_id'];?>" autocomplete="off" required="required"/>
          <select name="particular" id="" class="form-control span4" required="required">
              <option value="<?php echo $row['item_id'];?>"><?php echo $row['product'];?></option>
          </select>
      </div>
      <label  class="col-sm-2 control-label label-format">Date of count</label>
      <div class="col-sm-4">
          <input type="text" style="color: #222; text-transform: capitalize;" required="required"class="form-control" value="<?php echo date('Y-m-d');?>"  name="sdate"  />
      </div>
      </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label label-format">System Ouantity</label>
        <div class="col-sm-4">
            <input type="number" required="required" style="color: #222;  text-transform: capitalize;" class="form-control" value="<?php echo $row['qty'];?>" name="quantity"/>
        </div>
        <label  class="col-sm-2 control-label label-format">Physical quantity</label>
        <div class="col-sm-4">
            <input type="number" placeholder="what is available physically?" class="form-control" name="phy_qty" />
        </div>
    </div>
      <div class="form-group">
          <label for="Village" class="col-sm-2 control-label label-format">Measuring units</label>
          <div class="col-sm-4">
              <select name="urate" id="" class="form-control span4">
                  <option value="<?php echo $row['measures'];?>"><?php echo $row['measures'];?></option>
              </select>
          </div>
      <label  class="col-sm-2 control-label label-format">Reason for editting</label>
      <div class="col-sm-4">
          <textarea name="reason" id="" placeholder="Why are you editting?" class="form-control" cols="30" rows="3"></textarea>
      </div>
  </div>
        <div class="class-form">
          <div class="col-sm-12">
              <button type="Submit" name="Submit" class="btn btn-success">Update stockin</button>
          </div>
        </div>
      </div>
  </form>
    <?php } ?>
  </div>
</div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>


</body>
</html>