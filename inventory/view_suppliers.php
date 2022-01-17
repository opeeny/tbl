
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
<?php require_once'../includes/supplier_options.php'; ?>
</div>

<div class="col-md-10">
 <div class="table-responsive">
     <table cellpadding="0" cellspacing="0" border="1" class="table table-bordered" id="example">
         <div class="alert alert-info">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong><i class="icon-user icon-large"></i>&nbsp;Suppliers</strong>
         </div>
         <thead>
         <tr>
             <th>Supplier</th>
             <th>Location</th>
             <th>Service or product</th>
             <th>Contact</th>
             <th>Action</th>
         </tr>
         </thead>
         <tbody>
         <?php
         include("../includes/dbconfig.php");
         $user_query=mysqli_query($dbconnection,"select * from suppliers ")or die(mysql_error($dbconnection));
         while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC)){
             $id=$row['sup_id']; ?>
             <tr class="del<?php echo $id ?>">
                 <td><?php echo $row['supplier']; ?></td>
                 <td><?php echo $row['locatn']; ?></td>
                 <td><?php echo $row['product']; ?></td>
                 <td><?php echo $row['contacts']; ?></td>
                 <td width="150">
                     <a rel="tooltip" onclick="return deleted()"  title="Delete" id="<?php echo $id; ?>"
                        href="delete_supplier.php<?php echo '?id='. $id; ?>"   class="btn btn-danger"><i class="icon-trash icon-large"></i>delete</a>
                     <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_suppliers.php?supplier=<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i>edit</a>
                 </td>
                 <!-- Modal edit user -->

             </tr>
         <?php } ?>

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
    <script>
        function deleted(){
            var x =confirm("Do you want to delete this user?")
            if(x==true){return true}
            if(x==false){return false}
        }
    </script>
</body>
</html>