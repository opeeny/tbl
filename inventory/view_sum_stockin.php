
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

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
<script type="text/javascript" src="../jquery/DT_bootstrap.js"></script>
<script type="text/javascript" src="../jquery/jquery.dataTables.js"></script>
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
<?php require_once'../includes/stock_options.php'; ?>
</div>

<div class="col-md-10">
 <div class="table-responsive">
     <div class="alert alert-info">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong><i class="icon-user icon-large"></i>&nbsp;Available stockin</strong>
     </div>
     <table cellpadding="3" cellspacing="3" border="0" class="table  table-bordered " id="example">
         <div class="pull-right">
             <a href="download_sum_stockin.php"  class="btn btn-info btn-small"><i class="icon-download icon-large"></i>Download excel</a>
         </div>
         <thead>
         <tr>
             <th>S/N</th>
             <th>Particular</th>
             <th>Quantity In Stock</th>
             <th class="action">Add in stock</th>
             <th class="action">Edit</th>
             <th>Print a card</th>
         </tr>
         </thead>
         <tbody>
         <?php
         include("../includes/dbconfig.php");
         $i =0;
         $user_query=mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id")or die(mysql_error());
         while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
         {
             $i++;
             $id     =$row['stock_id'];
             $part   =$row['product_id'];
             ?>
             <tr class="del<?php echo $id ?>">
                 <td>
                     <?php echo $i; ?>
                 </td>
                 <td>
                     <?php echo $row['product']; ?>
                 </td>
                 <td>
                     <?php echo number_format($row['qty_bal']).' '.$row['Units']; ?>
                 </td>
                 <td width="100">
                     <a  rel="tooltip"  title="Add" id="e<?php echo $id; ?>" href="stockin_addmore.php<?php echo '?particular='.$id; ?>" class="btn btn-success"><i class="icon-plus"></i>Add in stock</a>
                 </td>
                 <td width="70">
                     <a href="update_sum_stockin.php?<?php echo 'stock='. $id?>" class="btn btn-primary"><i class="icon-pencil icon-large"></i>Edit</a>
                 </td>
                 <td class="action" width="100">
                     <a  rel="tooltip"  title="STOCK CARD" id="e<?php echo $id; ?>" href="stock_card.php<?php echo '?item='.$part; ?>" class="btn btn-success"><i class="icon-book icon-large"></i>Stock card</a>
                 </td>
             </tr>
         <?php
         }  ?>
         </tbody>
     </table>
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