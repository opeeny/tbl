<?php
if(isset($_POST['Submit'])=="Submit")
{
include("../includes/dbconfig.php");
$part               = $_POST['particular'];
$req                = $_POST['requester'];
$date               = $_POST['sdate'];
$qty_rer            = $_POST['req_qty'];
$iss_qty            = $_POST['iss_qty'];
$section            = $_POST['section'];
$giver              = $_POST['giver'];
$voc                = $_POST['voucher'];
$app                = $_POST['approve'];
$batchno            = $_POST['batchno'];
//GET PARTICULARS ID
$get = mysqli_query($dbconnection,"select * from stock_sum where product_id='$part'") or die(mysql_error($dbconnection));
$item       = mysqli_fetch_array($get,MYSQLI_ASSOC);
$bal        = $item['qty'];
$sId        = $item['stock_id'];
$exp        = $item['exp_date'];
$iss_unit   = $item['Units'];
$qty        = $bal - $iss_qty;
//STORE REQUEST DETAILS
if($iss_qty=='' && $giver==''){
    $query = mysqli_query($dbconnection,"insert into requests(dor,qty_req,is_qty,units,requester,sections,giver,approved,product_id,voucher,bal_hand,batchno,status)
values('$date','$qty_rer','$iss_qty','$iss_unit','$req','$section','$giver','$app','$part','$voc','$qty','$batchno','pending')") or die(mysqli_error($dbconnection));
}
else {
    $query = mysqli_query($dbconnection, "insert into requests(dor,qty_req,is_qty,units,requester,sections,giver,approved,product_id,voucher,bal_hand,batchno,status)
values('$date','$qty_rer','$iss_qty','$iss_unit','$req','$section','$giver','$app','$part','$voc','$qty','$btch','approved')") or die(mysqli_error($dbconnection));
}
//Update stock details
mysqli_query($dbconnection,"update stock_sum set qty='$qty',qty_bal='$qty' where stock_id='$sId'") or die(mysql_error($dbconnection));
if($query){
    header("Location:admin_request.php?registered");
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
    <?php require_once'../includes/request_options.php'; ?>
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
<div class="form_head">ADD A REQUEST</div>

<?php // echo "<font color='blue'><b><center> $patient_reg_success</center></b></font>"; 
?>
  <form action="" method="post" id="patient" autocomplete="off"><div class="form-horizontal">
  <div class="form-group"> 
  <label  class="col-sm-2 control-label label-format">Date of request</label>
      <div class="col-sm-4">
        <input type="text" style="color: #222; width: 295px;
text-transform: capitalize;" id="sdate"  placeholder="Date of request" name="sdate"  />
          <button id="f_btn1"><img src="../images/Calendar.jpg" /></button> 
          <script type="text/javascript">//<![CDATA[
              Calendar.setup({
                  inputField : "sdate",
                  trigger    : "f_btn1",
                  onSelect   : function() { this.hide() },
                  dateFormat : "%Y-%m-%d"
              });                    //]]>
          </script>
      </div>
      <label  class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4">
          <select name="particular" id="" class="form-control" required="required">
              <option value="">-- Select the item --</option>
              <?php
              include("../includes/dbconfig.php");
              $cod = mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id") or die(mysql_error($dbconnection));
              while($item = mysqli_fetch_array($cod)){
                  ?>
                  <option value="<?php echo $item['item_id'];?>"><?php echo $item['product'];?></option>
              <?php
              }
              ?>
          </select>
      </div>
  </div>
<div class="form-group"> 
      <label  class="col-sm-2 control-label label-format">Quantity Requested</label>
      <div class="col-sm-4"> 
        <input type="number" style="color: #222; text-transform: capitalize;"class="form-control" placeholder="Quantity requested" name="req_qty"/>
      </div>
    <label  class="col-sm-2 control-label label-format">Section</label>
    <div class="col-sm-4">
        <select name="section" class="form-control" >
            <option value="">-Requester's section-</option>
            <?php
            include("../includes/dbconfig.php");
            $codi = mysqli_query($dbconnection,"select DISTINCT section_name from sections")or die(mysqli_error($dbconnection));
            while($field = mysqli_fetch_array($codi,MYSQLI_ASSOC)){
                ?>
                <option value="<?php echo $field['section_name'];?>"><?php echo $field['section_name'];?></option>
            <?php
            }
            ?>
        </select>
    </div>

</div>
	
	<div class="form-group">
	<label  class="col-sm-2 control-label label-format">Batch no </label>
      <div class="col-sm-4">
          <input type="text" class="form-control" placeholder="Batch no from which item is taken" name="batchno"/>
      </div>
	        <label for="Type of sample" class="col-sm-2 control-label label-format">Requester</label>
      <div class="col-sm-4"> 
	  <select name="requester" class="form-control" >
			<option value="">-Requested by-</option>
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

<label  class="col-sm-2 control-label label-format">Vouncher No</label>
      <div class="col-sm-4"> 
          <input type="number" class="form-control" placeholder="Enter vouncher no" name="voucher" />
         </div>
        <label for="Village" class="col-sm-2 control-label label-format">Quantity Issued</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" placeholder="Quantity given out" name="iss_qty"/>
        </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label label-format">Giver</label>
      <div class="col-sm-4"> 
        <select class="form-control" name="giver">
	    <option value="" >- Issued by --</option>
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
      <label  class="col-sm-2 control-label label-format">Approved by</label>
      <div class="col-sm-4">
          <select class="form-control" name="approve">
              <option value="" >- approved by --</option>
              <?php
              include("../includes/dbconfig.php");
              $codi = mysqli_query($dbconnection,"select DISTINCT username from users") or die(mysqli_error($dbconnection));
              while($itemi = mysqli_fetch_array($codi)){
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