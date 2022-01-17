<?php
include("../includes/dbconfig.php");
if(isset($_POST['submit'])){
    $section = $_POST['section_name'];
    mysqli_query($dbconnection,"insert into sections(section_name)VALUES ('$section')")or die(mysqli_error($dbconnection));
}
if(isset($_POST['edit'])){
    $section = $_POST['section_name'];
    $sectId  = $_POST['section_id'];
    $query = mysqli_query($dbconnection,"update sections set section_name='$section' WHERE section_id='$sectId' ")or die(mysqli_error($dbconnection));
    if($query){
        header("Location:manage_sections.php");
    }
}
?>
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
        <?php
        if(isset($_GET['edit'])){
             $section_id = $_GET['Id'];
             include("../includes/dbconfig.php");
             $num =0;
             $users_query=mysqli_query($dbconnection,"select * from sections WHERE section_id='$section_id'")or die(mysql_error($dbconnection));
             while($rows=mysqli_fetch_array($users_query,MYSQLI_ASSOC)){
                 $num++;
                 $id=$rows['section_id'];
                 ?>
            <form action="" method="post" id="patient" autocomplete="off">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label label-format">Section</label>
                        <div class="col-sm-4">
                            <input type="text" style="color: #222; text-transform: capitalize;" class="form-control" value="<?php echo $rows['section_name'] ?>" name="section_name"  />
                            <input type="hidden" class="form-control" value="<?php echo $rows['section_id'] ?>" name="section_id"  />
                        </div>
                        <div class="col-sm-4"> <input type="submit" name="edit" value="update section" class="btn btn-success"/>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        }}
        else{
        ?>
        <form action="" method="post" id="patient" autocomplete="off">
            <div class="form-horizontal">
                <div class="form-group">
                    <label  class="col-sm-2 control-label label-format">Section</label>
                    <div class="col-sm-4">
                        <input type="text" style="color: #222; text-transform: capitalize;" class="form-control" placeholder="Enter section" name="section_name"  />
                    </div>
                    <div class="col-sm-4"> <input type="submit" name="submit" value="add section" class="btn btn-success"/>
                    </div>
                </div>
                 </div>

            </form>
        <?php } ?>
     <br/>
     <div id="divToPrint" >
         <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
             <div class="alert alert-info">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong><i class="icon-user icon-large"></i>&nbsp;Section Table</strong>
             </div>
             <thead>
             <tr>
                 <th>S/N</th>
                 <th>Section</th>
                 <th>Action</th>
             </tr>
             </thead>
             <tbody>

             <?php
             include("../includes/dbconfig.php");
             $num =0;
             $user_query=mysqli_query($dbconnection,"select * from sections ")or die(mysql_error($dbconnection));
             while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC)){
                 $num++;
                 $id=$row['section_id'];
                 ?>
                 <tr class="del<?php echo $id ?>">
                     <td><?php echo $num; ?></td>
                     <td><?php echo $row['section_name']; ?></td>
                     <td width="150">
                         <a rel="tooltip" onclick="return deleted()"  title="Delete" id="<?php echo $id; ?>"  href="delete_section.php<?php echo '?did='. $id; ?>"   class="btn btn-danger"><i class="icon-trash icon-large"></i>Delete</a>
                         <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="manage_sections.php?<?php echo "edit"; ?>&&Id=<?php echo $id; ?>"   class="btn btn-info"><i class="icon-trash icon-large"></i>Edit</a>

                     </td>
                     <!-- Modal edit user -->

                 </tr>
             <?php } ?>

             </tbody>
         </table>

     </div>
  </div>
</div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>
    <script>
        function deleted(){
            var x =confirm("Do you want to delete this user?")
            if(x==true){return true}
            if(x==false){return false}
        }
    </script>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>



</body>
</html>