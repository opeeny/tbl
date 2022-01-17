<?php
//session_start();
if(isset($_POST['Submit'])=="Submit")
{
include("../includes/dbconfig.php");
    //GET INFORMATION ABOUT THE REQUEST
    $ReqId = $_POST['AppId'];
    $code  = mysqli_query($dbconnection,"select * from requests where req_id='$ReqId'");
    $items = mysqli_fetch_array($code);
    $part          = $_POST['product_id'];
    $req           = $items['requester'];
    $date          = $items['dor'];
    $qty_rer       = $items['qty_req'];
    $part_id       = $items['part_id'];
    $section       = $items['sections'];
    $iss_qty       = $_POST['qty'];
    $iss_unit      = $_POST['units'];
    $giver         = $_SESSION['username'];
    $voc           = $_POST['voucher'];
    $app           = $_POST['approved'];
    $giver         = $_POST['giver'];
    $batch         = $_POST['batchno'];
//GET PARTICULARS ID
    $get = mysqli_query($dbconnection,"select * from stock_sum where product_id='$part'");
    $item = mysqli_fetch_array($get,MYSQLI_ASSOC);
    $bal = $item['qty_bal'];
    $sId = $item['stock_id'];
    $exp = $item['exp_date'];
    $btch = $item['batchno'];
    $qty = $bal - $iss_qty;
//STORE REQUEST DETAILS
    $query = mysqli_query($dbconnection,"update requests set is_qty='$iss_qty',giver='$giver',approved='$app',giver='$giver',voucher='$voc',bal_hand='$qty',batchno='$batch',status='approved' where req_id='$ReqId'") or die(mysqli_error($dbconnection));
//Update stock details
    mysqli_query($dbconnection,"update stock_sum set qty='$qty',qty_bal='$qty' where stock_id='$sId'") or die(mysqli_error($dbconnection));
    if ($query) {
        header("Location:view_pending_requests.php");

    } else {
        echo "Not cool" . mysql_error();
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
<?php include("../includes/welcomediv.php"); ?>
</div>

<div id="content">
<div class="col-md-2">
    <?php require_once'../includes/request_options.php'; ?>
</div>

<div class="col-md-10"> 
<?php if(isset($_GET['registered'])){
$registered=$_GET['registered']; 

echo "<div id='successmessage'
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
<div class="form_head">ADD A REQUEST</div>

<?php // echo "<font color='blue'><b><center> $patient_reg_success</center></b></font>"; 
?>
    <?php
    $id_to_use = $_GET['approval'];
    include("../includes/dbconfig.php");
    $code = mysqli_query($dbconnection,"select r.particular,r.req_id,p.product,p.item_id from requests r INNER JOIN products_list p ON r.product_id=p.item_id where req_id='$id_to_use'");
    while($items = mysqli_fetch_array($code,MYSQLI_ASSOC)) {
        $com = $items['product'];
    }
    ?>
  <form action="" method="post" id="patient" autocomplete="off"><div class="form-horizontal">
  <div class="form-group">
      <label  class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4">
          <input type="hidden"  name="AppId" value="<?php echo $id_to_use; ?>" autocomplete="off" required="required"/>
          <select name="particular" id="" class="form-control" required="required">
              <option  value="<?php echo $com; ?>"><?php echo $com; ?></option>
          </select>
      </div>
      <label  class="col-sm-2 control-label label-format">Quantity Issued</label>
      <div class="col-sm-4">
          <input type="number" style="color: #222; text-transform: capitalize;"class="form-control" placeholder="Quantity issued" name="qty"/>
      </div>
  </div>
	<div class="form-group">
        <label  class="col-sm-2 control-label label-format">Vouncher No</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" placeholder="Enter vouncher no" name="voucher" />
        </div>
      <label for="Type of sample" class="col-sm-2 control-label label-format">Giver</label>
      <div class="col-sm-4"> 
	  <select name="giver" class="form-control" >
			<option value="">-Given by-</option>
          <?php
          include("../includes/dbconfig.php");
          $codi = mysqli_query($dbconnection,"select DISTINCT username from users")or die(mysqli_error($dbconnection));
          while($itemi = mysqli_fetch_array($codi,MYSQLI_ASSOC)){
              ?>
              <option value="<?php echo $itemi['username'];?>"><?php echo $itemi['username'];?></option>
          <?php
          }
          ?>
		</select>
          </div>
    </div>
	<div class="form-group">
        <label  class="col-sm-2 control-label label-format">Batch No</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" placeholder="Batch from which item is taken" name="batchno" />
        </div>
        <label for="Type of sample" class="col-sm-2 control-label label-format">Approved by</label>
        <div class="col-sm-4">
            <select name="approved" class="form-control" >
                <option value="">-approved by-</option>
                <?php
                include("../includes/dbconfig.php");
                $codi = mysqli_query($dbconnection,"select DISTINCT username from users")or die(mysqli_error($dbconnection));
                while($itemi = mysqli_fetch_array($codi,MYSQLI_ASSOC)){
                    ?>
                    <option value="<?php echo $itemi['username'];?>"><?php echo $itemi['username'];?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-6">
            <button type="Submit" name="Submit" class="btn btn-primary">Make a request</button>
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