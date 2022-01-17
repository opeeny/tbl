<?php
$id      = $_GET['id'];
if(isset($_POST['update'])=="update")
{
	include("../includes/dbconfig.php");
    /*Get data from the form*/
    $sdate           = $_POST['sdate'];
    $supplier        = $_POST['supplier'];
    $dnote           = ucwords(mysqli_real_escape_string($dbconnection,$_POST['dnote']));
    $invoicenum      = $_POST['invoicenum'];
    $particular      = $_POST['particular'];
    $batch           = $_POST['batch'];
    $quantity        = $_POST['quantity'];
    $exp_date        = $_POST['exp_date'];
    $urate           = $_POST['urate'];
    $cost            = $_POST['cost'];
    $procure         = ucwords(mysqli_real_escape_string($dbconnection,$_POST['procured']));
    $verified        = ucwords(mysqli_real_escape_string($dbconnection,$_POST['verified']));
    $vdate           = $_POST['vdate'];
    $verdesign       = ucwords(mysqli_real_escape_string($dbconnection,$_POST['verdesign']));
    $received        = ucwords(mysqli_real_escape_string($dbconnection,$_POST['received']));
    $rdate           = $_POST['rdate'];
    $recdesign       = ucwords(mysqli_real_escape_string($dbconnection,$_POST['recdesign']));
    $former          = $_POST['formqty'];
    /*INSERT IN THE STOCK DETAILS TABLE*/
    $query = mysqli_query($dbconnection,"update stock set product_id='$particular',exp_date='$exp_date',lot='$batch',rdate='$rdate',procured='$procure',verified='$verified',received='$received',invoice_no='$invoicenum',
    del_note_no='$dnote',date_of_rec='$sdate',urate='$urate',supplier='$supplier',ver_date='$vdate',rec_date='$rdate',ver_des='$verdesign',rec_des='$recdesign',qty='$quantity',cost_unit='$cost'
     WHERE part_id='$id'");
    //GET INFORMATION FROM STOCK SUMMARY TABLE
    $get      = mysqli_query($dbconnection,"select * from stock_sum where product_id='$particular'");
    $item     = mysqli_fetch_array($get);
    $bal      = $item['qty'];
    $forqty   = $bal-$former;
    $newqty   = $forqty+$quantity;
    if(mysqli_num_rows(mysqli_query($dbconnection,"select * from stock_sum where particular='$particular'"))>0){
        mysqli_query($dbconnection,"update stock_sum set qty='$newqty', particular='$particular',exp_date='$exp_date',batchno='$batch' where product_id='$particular'") or die(mysql_error($dbconnection));
    }
    else{
        mysqli_query($dbconnection,"insert into stock_sum(product_id,qty,qty_bal,batchno,exp_date) VALUES('$particular','$quantity','$quantity','$batch','$exp_date')") or die(mysql_error($dbconnection));
    }
    if ($query) {
        header("location:view_stockin.php");
    } else {
        echo "Not inserted".mysql_error($dbconnection);
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
$quo    = mysqli_query($dbconnection,"select s.*,p.* from stock s INNER JOIN products_list p ON s.product_id=p.item_id where part_id='$id'") or die(mysql_error($dbconnection));
while($field = mysqli_fetch_array($quo)) {
?>
  <form action="" method="post" id="patient" autocomplete="off">
      <div class="form-horizontal">
  <div class="form-group">
	  <label  class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4">
          <select name="particular" id="" class="form-control span4" required="required">
              <option value="<?php echo $field['item_id'];?>"><?php echo $field['product'];?></option>
          </select>
      </div>
      <label  class="col-sm-2 control-label label-format">Supplier:</label>
      <div class="col-sm-4">
          <select name="supplier" id="" class="form-control span4">
              <option value="<?php echo $field['supplier'];?>"><?php echo $field['supplier'];?></option>
          </select>
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label label-format">Date of receipt</label>
        <div class="col-sm-4">
            <input type="text" style="color: #222; text-transform: capitalize;" required="required"class="form-control" value="<?php echo $field['rdate'];?>"  name="sdate"  />
        </div>
        <label  class="col-sm-2 control-label label-format">Delivery Note</label>
        <div class="col-sm-4">
            <input type="text"
                   class="form-control" value="<?php echo $field['del_note_no'];?>" name="dnote" />
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label label-format">Invoice No</label>
        <div class="col-sm-4">
            <input type="text" style="color: #222; text-transform: capitalize;"class="form-control" value="<?php echo $field['invoice_no'];?>" name="invoicenum"  />
        </div>
        <label  class="col-sm-2 control-label label-format">Batch No</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $field['lot'];?>" name="batch" id="fname" />
        </div>
    </div>
	
<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">Ouantity</label>
      <div class="col-sm-4">
          <input size="30" type="hidden" name="formqty" value="<?php echo $field['qty'];?>" autocomplete=""/>
        <input type="number" required="required" style="color: #222;  text-transform: capitalize;"class="form-control" value="<?php echo $field['qty'];?>" name="quantity" />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">Measuring units</label>
      <div class="col-sm-4">
          <select name="urate" id="" class="form-control span4">
              <option value="<?php echo $field['measures'];?>"><?php echo $field['measures'];?></option>
          </select>
       </div>
	  
    </div>
  <div class="form-group">
      <label  class="col-sm-2 control-label label-format">Expiry dated</label>
      <div class="col-sm-4">
          <input type="text" style="color: #222; text-transform: capitalize;" class="form-control" value="<?php echo $field['exp_date'];?>" name="exp_date" />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">Total cost</label>
      <div class="col-sm-4">
          <input type="number" class="form-control" value="<?php echo $field['cost_unit'];?>" name="cost"/>
      </div>
  </div>
   <div class="form-group">
       <label  class="col-sm-2 control-label label-format">Procured by</label>
       <div class="col-sm-4">
           <input type="text" class="form-control" value="<?php echo $field['procured'];?>" name="procured"/>
       </div>

   </div>
   <div class="form-group">
       <label  class="col-sm-2 control-label label-format">Verified by</label>
       <div class="col-sm-2">
           <select name="verified" id="" class="form-control span4">
               <option value="<?php echo $field['verified'];?>"><?php echo $field['verified'];?></option>
               <?php
               include("../includes/dbconfig.php");
               $user_query=mysqli_query($dbconnection,"select * from stock")or die(mysqli_error($dbconnection));
               while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
               { ?>
                   <option value="<?php echo $row['verified']?>"><?php echo $row['verified']?></option>
               <?php } ?>
           </select>   </div>
       <label for="Village" class="col-sm-2 control-label label-format">Verified date</label>
       <div class="col-sm-2">
           <input type="text" class="form-control" value="<?php echo $field['ver_date'];?>" name="vdate" id="village" />
       </div>
       <label for="Village" class="col-sm-2 control-label label-format">Designation</label>
       <div class="col-sm-2">
           <select name="verdesign" id="" class="form-control span4">
               <option value="<?php echo $field['ver_des'];?>"><?php echo $field['ver_des'];?></option>
               <?php
               include("../includes/dbconfig.php");
               $user_query=mysqli_query($dbconnection,"select * from stock")or die(mysqli_error($dbconnection));
               while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
               { ?>
                   <option value="<?php echo $row['particular']?>"><?php echo $row['particular']?></option>
               <?php } ?>
           </select>
       </div>
   </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label label-format">Received by</label>
        <div class="col-sm-2">
            <select name="received" id="" class="form-control span4">
                <option value="<?php echo $field['received'];?>"><?php echo $field['received'];?></option>
                <?php
                include("../includes/dbconfig.php");
                $user_query=mysqli_query($dbconnection,"select * from stock")or die(mysqli_error($dbconnection));
                while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
                { ?>
                    <option value="<?php echo $row['particular']?>"><?php echo $row['particular']?></option>
                <?php } ?>
            </select>     </div>
        <label for="Village" class="col-sm-2 control-label label-format">Received date</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" value="<?php echo $field['rec_date'];?>" name="rdate" id="village" />
        </div>
        <label for="Village" class="col-sm-2 control-label label-format">Designation</label>
        <div class="col-sm-2">
            <select name="recdesign" id="" class="form-control span4">
                <option value="<?php echo $field['rec_des']?>"><?php echo $field['rec_des']?></option>
                <?php
                include("../includes/dbconfig.php");
                $user_query=mysqli_query($dbconnection,"select * from stock")or die(mysqli_error($dbconnection));
                while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
                { ?>
                    <option value="<?php echo $row['particular']?>"><?php echo $row['rec_des']?></option>
                <?php } ?>
            </select>
        </div>
          </div>
        <div class="class-form">
          <div class="col-sm-12">
              <button type="Submit" name="update" class="btn btn-success">Update stockin</button>
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

</div>

</body>
</html>