
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php
$particular = $_GET['item'];
/*
if(isset($_POST['reset'])){
$reset_userid=$_POST['reset_userid'];

include("../includes/dbconfig.php");
$pass='123456';
mysqli_query($dbconnection,"UPDATE users SET status='Dormant',password=PASSWORD('$pass') WHERE id=$reset_userid") or mysqli_error($dbconnection);

header("location:admin_users.php?passreset=$pass");

//echo "<h2>password is $pass  and id is $reset_userid";
}
if(isset($_POST['edited_user']))
{
	include("../includes/dbconfig.php");	
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['fname']));
$role=$_POST['role'];
$id=$_POST['id'];
$username=mysqli_real_escape_string($dbconnection,$_POST['username']);
$insert=mysqli_query($dbconnection,"UPDATE users SET name='$name',role='$role',username='$username' where id='$id'");
		 
if ($insert){
	
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}
 
if(isset($_POST['Reg_User']))
{
	include("../includes/dbconfig.php");	
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['fname']));
$role=$_POST['role'];
$username=mysqli_real_escape_string($dbconnection,$_POST['username']);
$password=mysqli_real_escape_string($dbconnection,$_POST['password']);
$status='Dormant';



$insert=mysqli_query($dbconnection,"insert into users (name,username,password,role,status)
		values ('$name','$username',PASSWORD('$password'),'$role','$status')"); 
if ($insert){
	//header("Location:cluster_cont.php?cname=$c_name&&sub=$c_subcounty&&dist=$c_district&&date=$dob");
	//$requestor_reg_success="Operation Successful! Reason: Requestor $name recorded";
	
//echo "User friendly notification to be developed";
}

else{
echo "Data failed to insert: ".mysqli_error($dbconnection);
}
}



if(isset($_POST['Delete'])){
$delete_userid=$_POST['delete_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"DELETE FROM users WHERE id=$delete_userid") or mysqli_error($dbconnection);

header('location: '. $_SERVER['PHP_SELF']);


}
if(isset($_POST['Suspend'])){
$suspended_userid=$_POST['suspended_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  users SET status='Suspended' WHERE id=$suspended_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
if(isset($_POST['Activate'])){
$active_userid=$_POST['active_userid'];

include("../includes/dbconfig.php");

mysqli_query($dbconnection,"UPDATE  users SET status='Active' WHERE id=$active_userid") or die("ERROR : " . mysqli_error($dbconnection));

header('location: '. $_SERVER['PHP_SELF']);
}
*/
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>
<script type="text/javascript">

function delete_warning(node){
 var x=confirm("Are you sure you want to delete the user from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to suspend this user?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to ctivate this suspended user?");
 
 if(x == false)  {return false;}
 
 }

</script>
<!-- printing -->
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
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
    <div style="background-color:;">
        <form action="" method="POST">
            <i class="date_from" style="color: #111; font-size: 16px;font-style: normal;"><b>Date from</b>:</i>
            <input size="20" name="sdate"  id="sdate" placeholder="select date" readonly="readonly"/>
            <button id="f_btn1"><img src="images/Calendar.jpg" /></button> 
            <script type="text/javascript">//<![CDATA[
                Calendar.setup({
                    inputField : "sdate",
                    trigger    : "f_btn1",
                    onSelect   : function() { this.hide() },
                    dateFormat : "%Y-%m-%d"
                });                    //]]>
            </script>
            <i class="date_to" style="color: #111; font-size: 16px; font-style: normal;"><b>Date to</b>:</i>
            <input size="20" name="tdate"  id="tdate" placeholder="select date" readonly="readonly"/>
            <button id="f_btn2"><img src="images/Calendar.jpg" /></button> 
            <script type="text/javascript">//<![CDATA[
                Calendar.setup({
                    inputField : "tdate",
                    trigger    : "f_btn2",
                    onSelect   : function() { this.hide() },
                    dateFormat : "%Y-%m-%d"
                });                    //]]>
            </script>
            <input type="submit" name="submit" value="Generate a report" class="btn btn-default"/>
            <a href="" onclick="PrintDiv();" class="btn btn-default"><i class="icon-print icon-large"></i>Print</a>
        </form>
    </div>
    <br/>


    <div class="table-responsive">
     <div id="divToPrint" >
     <div align="center" style="border: 1px solid #ddd;">
     <table class="table table-bordered" cellspacing="0" border="1" cellpadding="0" width="100%">
         <tr>
             <td colspan="5">
                 <div align="center" class="nati">National Tuberculosis and Leprosy Control Program</div>
                 <div align="center" class="nait">National TB Reference Laboratory</div>
             </td>
         </tr>
         <tr>
             <td><div>Code:P025 F5</div></td>
             <td><div> Version 3.0</div></td>
             <td><div>Effective date:<br/>1-Jan-15</div></td>
             <td>
                 <div>Authorized by</div>
             </td>
             <td><div>MK</div></td>
         </tr>
     </table>
     <div class="stock">STOCK CARD</div>
     <?php
     include("../includes/dbconfig.php");
     $query          = mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id where product_id='$particular'") or die(mysqli_error($dbconnection));
     $field          = mysqli_fetch_array($query,MYSQLI_ASSOC);
     $partName       = $field['product'];
     $unit           = $field['measures'];
     ?>
     <table class="table table-bordered" cellspacing="0" cellpadding="0" border="1" width="100%">
         <tr>
             <td colspan="5"><div>ITEM NAME:&nbsp;&nbsp;<i class="fin"><b><?php echo $partName;?></b></i></div></td>
             <td colspan="5"><div>STORED AT:&nbsp;&nbsp;<i class="fin"><?php //echo $delivered;?></i></div></td>
         </tr>
         <tr>
             <td colspan="5"><div>STRENGTH/SIZE:</div></td>
             <td colspan="5"><div>ISSUE UNIT:&nbsp;&nbsp;&nbsp; <i class="fin"><b><?php echo $unit;?></b></i></div></td>
         </tr>
         <tr>
             <td colspan="5"><div>MAXIMUM STOCK:</div></td>
             <td colspan="5"><div>MINIMUM STOCK:</div></td>
         </tr>
         <tr style="font-weight: bold;">
             <td>Date</td>
             <td>To of from</td>
             <td>Voucher No</td>
             <td>Qty in</td>
             <td>Qty out</td>
             <td>Balance at hand</td>
             <td>Batch/Lot no.</td>
             <td>Remarks</td>
             <td>Name initials</td>
         </tr>
         <?php
         include("../includes/dbconfig.php");
         if (isset($_POST['submit'])) {
             $date_to    = $_POST['tdate'];
             $date_from  = $_POST['sdate'];
             $qua  = mysqli_query($dbconnection,"select r.*,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id  where product_id='$particular' and (r.dor BETWEEN '$date_from' AND '$date_to')")or die(mysql_error($dbconnection));
         }
         else {
             $qua = mysqli_query($dbconnection, "select r.*,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id where product_id='$particular'") or die(mysql_error($dbconnection));
         }
         while($item = mysqli_fetch_array($qua,MYSQLI_ASSOC)) { ?>
             <tr style="background-color: ghostwhite;">
                 <td><?php echo $item['dor']; ?></td>
                 <td><?php echo $item['requester']; ?></td>
                 <td><?php echo $item['voucher']; ?></td>
                 <td><?php //echo $item['']; ?></td>
                 <td><?php echo $item['is_qty']; ?></td>
                 <td><?php echo $item['bal_hand']; ?></td>
                 <td><?php echo $item['batchno']; ?></td>
                 <td></td>
                 <td></td>
             </tr>
         <?php } ?>
         <?php
         include("../includes/dbconfig.php");
         if (isset($_POST['submit'])) {
             $date_to = $_POST['tdate'];
             $date_from = $_POST['sdate'];
             $qua = mysqli_query($dbconnection, "select s.*,r.* from stock s INNER JOIN stock_sum r ON s.product_id= r.product_id) and (date_of_rec BETWEEN '$date_from' AND '$date_to') ") or die(mysql_error($dbconnection));
         }else{
             $qua = mysqli_query($dbconnection, "select s.*,r.* from stock s INNER JOIN stock_sum r ON s.product_id=r.product_id") or die(mysql_error($dbconnection));
         }
         while($item = mysqli_fetch_array($qua,MYSQLI_ASSOC)) {
             ?>
             <tr style="background-color: whitesmoke; color: #504b4a; text-align: center">
                 <td style="color: #0075b0;"><?php echo $item['rdate']; ?></td>
                 <td><?php echo $item['received']; ?></td>
                 <td><?php echo $item['lot']; ?></td>
                 <td><?php echo $item['qty']; ?></td>
                 <td><?php //echo $item['']; ?></td>
                 <td><?php echo $item['qty_bal']; ?></td>
                 <td><?php echo $item['lot']; ?></td>
                 <td><?php echo $item['exp_date']; ?></td>
                 <td><?php// echo $item['']; ?></td>
                 <td><?php// echo $item['']; ?></td>
             </tr>

         <?php
         }
         ?>
     </table>

     <div align="center">Leakage and Breakage Monitoring</div>
     <table class="table table-bordered" cellspacing="0" cellpadding="0" border="1" width="100%">
         <tr>
             <td>Period</td>
             <td>OMF No:</td>
             <td>Checked by</td>
             <td>Signature/Initials</td>
             <td>Verified by</td>
             <td>Signature/Initials</td>
         </tr>
         <tr style="height: 40px;">
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
         </tr>
         <tr style="height: 40px;">
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
         </tr>
         <tr style="height: 40px;">
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
         </tr>
     </table>
     </div>
     </div>
  </div>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>



</body>
</html>