<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
if(isset($_POST['savedstdrug1'])){
include("../includes/dbconfig.php");
	
$code=strtolower(mysqli_real_escape_string($dbconnection,$_POST['code']));
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['name']));
$drugcolumn=strtolower($name);

mysqli_query($dbconnection,"INSERT INTO option_dstdrugs1(code,name) 
VALUES('$code','$name')") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst1_hist ADD `$drugcolumn` VARCHAR(255) AFTER method") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst1 ADD `$drugcolumn` VARCHAR(255) AFTER method") or die("ERROR : " . mysqli_error($dbconnection));
}

if(isset($_POST['savedstdrug2'])){
include("../includes/dbconfig.php");

$code=strtolower(mysqli_real_escape_string($dbconnection,$_POST['code']));
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['name']));

$drugcolumn=strtolower($name);

mysqli_query($dbconnection,"INSERT INTO option_dstdrugs2(code,name) 
VALUES('$code','$name')") or die("ERROR : " . mysqli_error($dbconnection));

mysqli_query($dbconnection,"ALTER TABLE results_dst2_hist ADD `$drugcolumn` VARCHAR(255) AFTER method") or die("ERROR : " . mysqli_error($dbconnection));

mysqli_query($dbconnection,"ALTER TABLE results_dst2 ADD `$drugcolumn` VARCHAR(255) AFTER method") or die("ERROR : " . mysqli_error($dbconnection));
}

if(isset($_POST['savedst1_edit'])){
include("../includes/dbconfig.php");
	
$editid=$_POST['editid'];
$code=strtolower(mysqli_real_escape_string($dbconnection,$_POST['code']));
$old_code=strtolower(mysqli_real_escape_string($dbconnection,$_POST['old_code']));
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['name']));
$old_name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['old_name']));
$drugcolumn=str_replace(' ', '', strtolower($name));

mysqli_query($dbconnection,"UPDATE option_dstdrugs1 set name='$name',code='$code' WHERE id='$editid'") or die("ERROR : " . mysqli_error($dbconnection));

mysqli_query($dbconnection,"ALTER TABLE results_dst1 CHANGE `$old_name` `$drugcolumn` VARCHAR(255)") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst1_hist CHANGE `$old_name` `$drugcolumn` VARCHAR(255)") or die("ERROR : " . mysqli_error($dbconnection));

}

if(isset($_POST['savedst2_edit'])){
include("../includes/dbconfig.php");
	
$editid=$_POST['editid'];
$code=strtolower(mysqli_real_escape_string($dbconnection,$_POST['code']));
$old_code=strtolower(mysqli_real_escape_string($dbconnection,$_POST['old_code']));
$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['name']));
$old_name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['old_name']));
$drugcolumn=str_replace(' ', '', strtolower($name));

mysqli_query($dbconnection,"UPDATE option_dstdrugs2 set name='$name',code='$code' WHERE id='$editid'") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst2 CHANGE `$old_name` `$drugcolumn` VARCHAR(255)") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst2_hist CHANGE `$old_name` `$drugcolumn` VARCHAR(255)") or die("ERROR : " . mysqli_error($dbconnection));

}

if(isset($_GET['dst2_del'])){ 
include("../includes/dbconfig.php");
$name=$_GET['name'];
$drugcolumn=strtolower($name);
$delid=$_GET['dst2_del'];

mysqli_query($dbconnection,"Delete from   option_dstdrugs2 where id='$delid'") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst2 DROP `$drugcolumn`") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst2_hist DROP `$drugcolumn`") or die("ERROR : " . mysqli_error($dbconnection));
}

if(isset($_GET['dst1_del'])){ 
include("../includes/dbconfig.php");
$name=$_GET['name'];
$drugcolumn=strtolower($name);
$delid=$_GET['dst1_del'];

mysqli_query($dbconnection,"Delete from   option_dstdrugs1 where id='$delid'") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE results_dst1 DROP `$drugcolumn`") or die("ERROR : " . mysqli_error($dbconnection));
//ITS HARD TO DELETE FROM THE HISTORY TABLE BELOW...WE NEED TO KNOW WHY----
mysqli_query($dbconnection,"ALTER TABLE results_dst1_hist DROP `$drugcolumn`") or die("ERROR : " . mysqli_error($dbconnection));

}

?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>
<script type="text/javascript">

function delete_warning(node){
 var x=confirm("Are you sure you want to delete this record from the databse?");
 
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
<?php include("../includes/welcomediv.php"); ?>
</div>

<div id="content">

<div class="col-md-6">
<h4>DST 1st LINE DRUGS </h4>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-new-dstdrug1">Register New Drug</button>
<br><br>

<div class='table-responsive'> <table bgcolor="#F0F0F0" class="table" border='1'>
	<tr align="left" bgcolor=''> <th title="">Code</th> <th title="">Name</th> <th title="">Action</th></tr>
	
	<?php
	include("../includes/dbconfig.php");
	$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs1") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)) {
	$id = $drug['id'];
	$code = $drug['code'];
	$name = $drug['name'];
	?>
	<tr class='recordrow' bgcolor='#fffbf6' align='left'>
		
		<td><?php echo $code ?></td>
		<td><?php echo $name ?></td>
		<td>
		<a href='?dst1_edit=<?php echo $id?>'>Edit</a> | <a href='?dst1_del=<?php echo $id ?>&&name=<?php echo $name ?>'onclick='return delete_warning(this)'>Delete</a>
		</td>
		
	</tr>
	<?php
	}
	?>
	
</table></div>

<div class="modal fade" id="modal-new-dstdrug1" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">NEW DST 1st LINE DRUG</h4>
	</div>
    <div class="modal-body">
	<div class="form_head"></div>
	
	<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-dstdrug1" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Name of Drug</label>
    <div class="col-sm-4"> 
        <input type="text" name="name" class="form-control" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label">Short Code</label>
    <div class="col-sm-4"> 
		<input type="text"  name="code" class="form-control" pattern="^[a-zA-Z0-9_]*$" required/>
    </div>
	</div>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label"></label>
    <div class="col-sm-4"> 
    </div>
	
    <div class="col-sm-2"> 
		<input type="submit" name='savedstdrug1' class="btn btn-success" value='SAVE' class="form-control" placeholder=""/>
    </div>
	<div class="col-sm-4">
		<button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
	</div>
	
	</div>
	
	</form>
	</div>
    
	<div class="modal-footer">
		<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
    </div>
    
	</div>
</div>
</div>

</div>
<h4>DST 2nd LINE DRUGS </h4>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-new-dstdrug2">Register New Drug</button>
<br><br>

<div class='table-responsive'> 
<table class="table" bgcolor="#F0F0F0" border='1'>
	<tr align="left" bgcolor=''> <th>#</th> <th title="">Code</th> <th title="">Name</th> <th title="">Action</th></tr>
	
	<?php
	include("../includes/dbconfig.php");
	$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs2") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)) {
	$id = $drug['id'];
	$code = $drug['code'];
	$name = $drug['name'];
	?>
	<tr class='recordrow' bgcolor='#fffbf6' align='left'>
		<td><?php echo $id ?></td>
		<td><?php echo $code ?></td>
		<td><?php echo $name ?></td>
		<td>
		<a href='?dst2_edit=<?php echo $id?>'>Edit</a> | <a href='?dst2_del=<?php echo $id ?>&&name=<?php echo $name ?>'onclick='return delete_warning(this)'>Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
	
</table></div>

<div class="modal fade" id="modal-new-dstdrug2" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">NEW DST 2nd LINE DRUG</h4>
	</div>
    <div class="modal-body">
	<div class="form_head"></div>
	
	<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-dstdrug2" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Name of Drug</label>
    <div class="col-sm-4"> 
        <input type="text" name="name" class="form-control" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label">Short Code</label>
    <div class="col-sm-4"> 
		<input type="text"  name="code" class="form-control" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label"></label>
    <div class="col-sm-4"> 
    </div>
	
    <div class="col-sm-2"> 
		<input type="submit" name='savedstdrug2' class="btn btn-success" value='SAVE' class="form-control" placeholder=""/>
    </div>
	<div class="col-sm-4">
		<button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
	</div>
	
	</div>
	
	</form>
	</div>
    
	<div class="modal-footer">
		<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
    </div>
    
	</div>
</div>
</div>

</div>

</div>

<div class="col-md-6">

<?php
if(isset($_GET['dst1_edit'])){ 
$edit_id=$_GET['dst1_edit'];
?>
Editing DST1 Drugs
<?php
$sql="SELECT * FROM  option_dstdrugs1 WHERE id='$edit_id'";
$drugs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($drugs) > 0){

while ($drug= mysqli_fetch_array($drugs,MYSQLI_ASSOC)) {
	$code= $drug['code'];
	$name = $drug['name'];
	$id = $drug['id'];
}
?>

<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<input type="hidden" name="editid" value="<?php echo $id; ?>">
	<input type="hidden" name="old_name" value="<?php echo $name; ?>" class="form-control" placeholder="" />
	<input type="hidden" name="old_code" value="<?php echo $code; ?>" class="form-control" placeholder="" />
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">Name of Test</label>
    <div class="col-sm-7">
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">
	<label for="" class="col-sm-2 control-label label-format">Short Code</label>
    <div class="col-sm-4 "> 
		<input type="text"  name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	
 	<div class="col-sm-2"> 
		<input type="submit" name='savedst1_edit' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	
	</form>
	</div>

<?php } ?>
<?php } ?>

<?php if(isset($_GET['dst2_edit'])){ 
$edit_id=$_GET['dst2_edit'];
?>
Editing DST2 Drugs
<?php
$sql="SELECT * FROM  option_dstdrugs2 WHERE id='$edit_id'";
$option_examinations=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($option_examinations) > 0){
while ($option_exam= mysqli_fetch_array($option_examinations,MYSQLI_ASSOC)) {
	$code= $option_exam['code'];
	$name = $option_exam['name'];
	$id = $option_exam['id'];
}
?>
<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<input type="hidden" name="editid" value="<?php echo $id; ?>">
	<input type="hidden" name="old_name" value="<?php echo $name; ?>" class="form-control" placeholder="" />
	<input type="hidden" name="old_code" value="<?php echo $code; ?>" class="form-control" placeholder="" />
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">Name of Test</label>
    <div class="col-sm-7">
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">
	<label for="" class="col-sm-2 control-label label-format">Short Code</label>
    <div class="col-sm-4 "> 
		<input type="text"  name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>

	<div class="col-sm-2"> 
		<input type="submit" name='savedst2_edit' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>

	</form>
</div>

<?php } ?>
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