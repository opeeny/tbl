
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
<?php 
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
    <div class="table-responsive">
        <form action="" method="post" id="patient" autocomplete="off">
            <div class="form-horizontal">
                <div class="form-group">
                    <label  class="col-sm-1 control-label label-format">Particular</label>
                    <div class="col-sm-2">
                        <select name="particular" id="" class="form-control span4" required="required">
                            <option value="">-- select the item --</option>
                            <?php
                            include("../includes/dbconfig.php");
                            $user_query=mysqli_query($dbconnection,"select product,item_id from products_list")or die(mysqli_error($dbconnection));
                            while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
                            { ?>
                                <option value="<?php echo $row['item_id']?>"><?php echo $row['product']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label  class="col-sm-1 control-label label-format">Date from</label>
                    <div class="col-sm-2">
                        <input  name="sdate" class="span1 form-control"  id="tdate" placeholder="select date" readonly="readonly"/>
                        <button id="f_btn2"><img src="../images/Calendar.jpg" /></button> 
                        <script type="text/javascript">//<![CDATA[
                            Calendar.setup({
                                inputField : "tdate",
                                trigger    : "f_btn2",
                                onSelect   : function() { this.hide() },

                                dateFormat : "%Y-%m-%d"
                            });                    //]]>
                        </script>
                    </div>
                    <label  class="col-sm-1 control-label label-format">Date to</label>
                    <div class="col-sm-2">
                        <input size="30" class="form-control span2" name="tdate"  id="sdate" placeholder="select date" readonly="readonly"/>
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
                    <div class="col-sm-3">
                        <input type="submit" name="submit" value="Submit" class="btn btn-default"/>
                        <a href="" onclick="PrintDiv();" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
                    </div>
                </div>
            </div>
        </form>
     <div id="divToPrint" >
         <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered">
             <thead>
             <tr>
                 <th>Request Date</th>
                 <th>Particular</th>
                 <th>Requested Qty</th>
                 <th>Requester</th>
                 <th>Section</th>
                 <th>Issued Qty</th>
                 <th>Giver</th>
                 <th>Voucher No</th>
                 <th>Approved by</th>
             </tr>
             </thead>
             <tbody>

             <?php
             if (isset($_POST['submit'])) {
                 $particular          = $_POST['particular'];
                 $date_to             = $_POST['tdate'];
                 $date_from           = $_POST['sdate'];
             $user_query=mysqli_query($dbconnection,"select r.*,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id  WHERE (r.dor BETWEEN '$date_from' AND '$date_to') AND r.product_id='$particular' ")or die(mysql_error($dbconnection));
             while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
             {
                 $id=$row['req_id'];

                 ?>
                 <tr class="del<?php echo $id ?>">
                     <td>
                         <?php echo $row['dor']; ?>
                     </td>
                     <td>
                         <?php echo $row['particular']; ?>
                     </td>
                     <td>
                         <?php echo $row['qty_req']; ?>
                     </td>
                     <td>
                         <?php echo $row['requester']; ?>
                     </td>
                     <td>
                         <?php echo $row['sections']; ?>
                     </td>
                     <td>
                         <?php echo $row['is_qty']; ?>
                     </td>
                     <td>
                         <?php echo $row['giver']; ?>
                     </td>
                     <td>
                         <?php echo $row['voucher']; ?>
                     </td>
                     <td>
                         <?php echo $row['approved']; ?>
                     </td>
                 </tr>
             <?php
             }}?>

             </tbody>
         </table>
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