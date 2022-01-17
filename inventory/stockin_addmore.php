<?php
$id  = $_GET['particular'];
if(isset($_POST['Submit'])=="Submit")
{
	include("../includes/dbconfig.php");
    /*Get data from the form*/
    $particular_id       = $_POST['part_id'];
    $sdate           = $_POST['sdate'];
    $supplier        = $_POST['supplier'];
    $dnote           = ucwords(mysqli_real_escape_string($dbconnection,$_POST['dnote']));
    $invoicenum      = $_POST['invoicenum'];
    $particular      = $_POST['particular'];
    $batch           = $_POST['batch'];
    $quantity        = $_POST['quantity'];
    $exp_date        = $_POST['exp_date'];
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
    $query = mysqli_query($dbconnection,"insert into stock(product_id,exp_date,lot,rdate,procured,verified,received,pro_date,invoice_no,
    del_note_no,date_of_rec,supplier,ver_date,rec_date,ver_des,rec_des,pro_des,qty,cost_unit)
    values('$particular','$exp_date','$batch','$rdate','$procure','$verified','$received','$prodate','$invoicenum','$dnote'
    ,'$sdate','$supplier','$vdate','$rdate','$verdesign','$recdesign','$prodesign','$quantity','$cost')");

    //GET INFORMATION FROM STOCK SUMMARY TABLE
    $get   = mysqli_query($dbconnection,"select * from stock_sum where product_id='$particular_id'");
    $item  = mysqli_fetch_array($get,MYSQLI_ASSOC);
    $bal   = $item['qty_bal'];
    $qty   = $bal+$quantity;
    //UPDATE OUR STOCK SUMMARY
    mysqli_query($dbconnection,"update stock_sum set qty='$qty',exp_date='$exp_date',batchno='$batch' where product_id='$particular_id'") or die(mysql_error($dbconnection));

    if($query){
        header("location:add_new_stockin.php");
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
$user_query=mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id where s.stock_id='$id'")or die(mysql_error($dbconnection));
while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
{
    $specified_item          = $row['product'];
    $item_id                = $row['item_id'];
}?>
  <form action="" method="post" id="patient" autocomplete="off">
      <div class="form-horizontal">
  <div class="form-group">
	  <label  class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4">
          <input type="hidden" size="30" name="part_id" value="<?php echo $item_id;?>" placeholder=""/>
          <select name="particular" id="" class="form-control span4" required="required">
              <option value="<?php echo $item_id; ?>"><?php echo $specified_item; ?></option>
          </select>
      </div>
      <label  class="col-sm-2 control-label label-format">Supplier:</label>
      <div class="col-sm-4">
          <select name="supplier" id="" class="form-control span4">
              <option value="">-- select the supplier --</option>
              <?php
              include("../includes/dbconfig.php");
              $user_query=mysqli_query($dbconnection,"select * from suppliers")or die(mysqli_error($dbconnection));
              while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
              { ?>
                  <option value="<?php echo $row['supplier']?>"><?php echo $row['supplier']?></option>
              <?php } ?>
          </select>
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label label-format">Date of receipt</label>
        <div class="col-sm-4">
            <input type="text" style="color: #222; text-transform: capitalize;" required="required"class="form-control" placeholder="Date of entry"  name="sdate"  />
        </div>
        <label  class="col-sm-2 control-label label-format">Delivery Note</label>
        <div class="col-sm-4">
            <input type="text"
                   class="form-control" placeholder="Enter delivery note" name="dnote" />
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label label-format">Invoice No</label>
        <div class="col-sm-4">
            <input type="text" style="color: #222; text-transform: capitalize;"class="form-control" placeholder="Enter invoice number" name="invoicenum"  />
        </div>
        <label  class="col-sm-2 control-label label-format">Batch No</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="Enter batch number" name="batch" id="fname" />
        </div>
    </div>
	
<div class="form-group"> 
    <label  class="col-sm-2 control-label label-format">Ouantity</label>
      <div class="col-sm-4"> 
        <input type="number" required="required" style="color: #222;  text-transform: capitalize;"class="form-control" placeholder="Quantity stocked" name="quantity" />
      </div>
    <label  class="col-sm-2 control-label label-format">Expiry dated</label>
    <div class="col-sm-4">
        <input type="text" style="color: #222; text-transform: capitalize;" class="form-control" placeholder="Expiry dates" name="exp_date" />
    </div>
 </div>
  <div class="form-group">
      <label for="Village" class="col-sm-2 control-label label-format">Total cost</label>
      <div class="col-sm-4">
          <input type="number" class="form-control" placeholder="Enter total amount paid" name="cost"/>
      </div>
       <label  class="col-sm-2 control-label label-format">Procured by</label>
       <div class="col-sm-2">
           <input type="text" class="form-control" placeholder="Enter total amount procurer" name="procured"/>
       </div>
   </div>
   <div class="form-group">
       <label  class="col-sm-2 control-label label-format">Verified by</label>
       <div class="col-sm-2">
           <select name="verified" id="" class="form-control span4">
               <option value="">-- select who verified --</option>
               <?php
               include("../includes/dbconfig.php");
               $user_query=mysqli_query($dbconnection,"select * from stock")or die(mysqli_error($dbconnection));
               while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
               { ?>
                   <option value="<?php echo $row['particular']?>"><?php echo $row['particular']?></option>
               <?php } ?>
           </select>   </div>
       <label for="Village" class="col-sm-2 control-label label-format">Verified date</label>
       <div class="col-sm-2">
           <input type="text" class="form-control" placeholder="Verifying date" name="vdate" id="village" />
       </div>
       <label for="Village" class="col-sm-2 control-label label-format">Designation</label>
       <div class="col-sm-2">
           <select name="verdesign" id="" class="form-control span4">
               <option value="">-- Verifier's designation --</option>
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
                <option value="">-- Received by --</option>
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
            <input type="text" class="form-control" placeholder="Receiving date" name="rdate" id="village" />
        </div>
        <label for="Village" class="col-sm-2 control-label label-format">Designation</label>
        <div class="col-sm-2">
            <select name="recdesign" id="" class="form-control span4">
                <option value="">-- Designation --</option>
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
        <div class="class-form">
          <div class="col-sm-12">
              <button type="Submit" name="Submit" class="btn btn-success">Add stockin</button>
          </div>
        </div>




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