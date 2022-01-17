<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
 include("../includes/dbconfig.php");
 //
if(isset($_POST['editedtest'])){ 
$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$name=mysqli_real_escape_string($dbconnection,$_POST['name']);
$editid=mysqli_real_escape_string($dbconnection,$_POST['editid']);
$status=mysqli_real_escape_string($dbconnection,$_POST['status']);
$tat=mysqli_real_escape_string($dbconnection,$_POST['tat']);

mysqli_query($dbconnection,"update option_examination SET tat='$tat',code='$code',status='$status',name='$name' where id='$editid'") or die("ERROR : " . mysqli_error($dbconnection));

}

if(isset($_POST['saveexam_resultoptothers_edit'])){ 
$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$opt=mysqli_real_escape_string($dbconnection,$_POST['opt']);
$editid=mysqli_real_escape_string($dbconnection,$_POST['editid']);

mysqli_query($dbconnection,"update resultsoptions_others SET code='$code',options='$opt' where id='$editid'") or die("ERROR : " . mysqli_error($dbconnection));
}

if(isset($_POST['resultopt_edit'])){ 

$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$name=mysqli_real_escape_string($dbconnection,$_POST['name']);
$editid=mysqli_real_escape_string($dbconnection,$_POST['editid']);

mysqli_query($dbconnection,"update option_examination SET code='$code',name='$name' where id='$editid'") or die("ERROR : " . mysqli_error($dbconnection));


}

 if(isset($_GET['res_others_del'])){ 

$delid=$_GET['res_others_del'];

mysqli_query($dbconnection,"Delete from  resultsoptions_others where id='$delid'") or die("ERROR : " . mysqli_error($dbconnection));


}
 if(isset($_GET['del_resopt'])){ 

$delid=$_GET['del_resopt'];

$table=$_GET['table'];
$optionstable='resultsoptions_'.$table;

mysqli_query($dbconnection,"Delete from  $optionstable where id='$delid'") or die("ERROR : " . mysqli_error($dbconnection));


}
 if(isset($_POST['exam_resultoptable_edit'])){ 

$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$value=mysqli_real_escape_string($dbconnection,$_POST['opt']);
$editid=mysqli_real_escape_string($dbconnection,$_POST['editid']);
$table=mysqli_real_escape_string($dbconnection,$_POST['table']);
$optionstable='resultsoptions_'.$table;
$options=mysqli_query($dbconnection,"update $optionstable SET code='$code',options='$value' where id='$editid' ") or die("ERROR : " . mysqli_error($dbconnection));
	


}
 if(isset($_POST['editedtest_others'])){ 

$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$name=mysqli_real_escape_string($dbconnection,$_POST['name']);
$editid=mysqli_real_escape_string($dbconnection,$_POST['editid']);
$status=mysqli_real_escape_string($dbconnection,$_POST['status']);
$tat=mysqli_real_escape_string($dbconnection,$_POST['tat']);

mysqli_query($dbconnection,"update option_examination_others SET tat='$tat',code='$code',status='$status',name='$name' where id='$editid'") or die("ERROR : " . mysqli_error($dbconnection));

}

if(isset($_POST['saveothertest'])){

$tat=mysqli_real_escape_string($dbconnection,$_POST['tat']);
$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$name=mysqli_real_escape_string($dbconnection,$_POST['name']);
$status='Active';

mysqli_query($dbconnection,"INSERT INTO option_examination_others(tat,code,name,status) 
VALUES('$tat','$code','$name','$status')") or die("ERROR : " . mysqli_error($dbconnection));
}

if(isset($_POST['saveresultsoption'])){
include("../includes/dbconfig.php");

$testcode=mysqli_real_escape_string($dbconnection,$_POST['testcode']);
$optionstable=mysqli_real_escape_string($dbconnection,$_POST['optionstable']);
$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$value=mysqli_real_escape_string($dbconnection,$_POST['value']);

mysqli_query($dbconnection,"INSERT INTO $optionstable(code,options) 
VALUES('$code','$value')") or die("ERROR : " . mysqli_error($dbconnection));

header("location:?testcode=$testcode");
}

if(isset($_POST['saveotherresultsoption'])){
include("../includes/dbconfig.php");

$othertestcode=mysqli_real_escape_string($dbconnection,$_POST['othertestcode']);
$othertestid=mysqli_real_escape_string($dbconnection,$_POST['othertestid']);
$code=mysqli_real_escape_string($dbconnection,$_POST['code']);
$value=mysqli_real_escape_string($dbconnection,$_POST['value']);

mysqli_query($dbconnection,"INSERT INTO resultsoptions_others(code,options,test) 
VALUES('$code','$value',$othertestid)") or die("ERROR : " . mysqli_error($dbconnection));

header("location:?othertestcode=$othertestcode&&othertestid=$othertestid");
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

<h4>EXAMINATION METHODS / TESTS </h4>

<table class="table" bgcolor="#F0F0F0" border='1'>
	<tr align="left" bgcolor=''>  <th title="">Short Code</th> <th title="">Name</th><th title="">Turn Around Time</th> <th title="">Status</th> <th title="">Action</th></tr>
	
	<?php
	include("../includes/dbconfig.php");
	
	$tests=mysqli_query($dbconnection,"SELECT * FROM option_examination") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($test = mysqli_fetch_array($tests,MYSQLI_ASSOC)) {
	$id = $test['id'];
	$code = $test['code'];
	$tat = $test['tat'];
	$name = $test['name'];
	$status = $test['status'];
	?>
	<tr class='recordrow' bgcolor='#fffbf6' align='left'>
		
		<td><?php echo $code ?></td>
		<td><?php echo $name ?></td>
		<td><?php echo $tat ?></td>
		<td><?php echo $status ?></td>
		<td>
	<a href='?edittest=<?php echo $code ?>'>Edit</a> | <a href='?res_opt=<?php echo $code ?>'>Results options</a>
		</td>
	</tr>
	<?php
	}
	?>
	
</table>

<br>

<h4>EXAMINATION METHODS / TESTS (MORE)</h4>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-new-test">Register New Examination Method / Test</button>

<br><br>

<table class="table" bgcolor="#F0F0F0" border='1'>
	<tr align="left" bgcolor=''> <th title="">Short Code</th> <th title="">Name</th> <th title="">TAT</th><th title="">status</th> <th title="">Action</th></tr>
	
	<?php
	include("../includes/dbconfig.php");
	
	$tests=mysqli_query($dbconnection,"SELECT * FROM option_examination_others") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($test = mysqli_fetch_array($tests,MYSQLI_ASSOC)) {
	$id = $test['id'];
	$code = $test['code'];
	$name = $test['name'];
	$tat = $test['tat'];
	$status = $test['status'];
	?>
	<tr class='recordrow' bgcolor='#fffbf6' align='left'>
		<td><?php echo $code ?></td>
		<td><?php echo $name ?></td>
		<td><?php echo $tat ?></td>
		<td><?php echo $status ?></td>
		<td>
		<a href='?edittest_others=<?php echo $code ?>'>Edit</a> | <a href='?othertestcode=<?php echo $code ?>&&othertestid=<?php echo $id ?>'>Results options</a>
		</td>
	</tr>
	<?php
	}
	?>
	
</table>

<div class="modal fade" id="modal-new-test" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">NEW EXAMINATION METHOD / TEST</h4>
	</div>
    <div class="modal-body">
	<div class="form_head"></div>
	
	<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Name of Test</label>
    <div class="col-sm-4"> 
        <input type="text" name="name" class="form-control" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label">Short Code</label>
    <div class="col-sm-4"> 
		<input type="text"  name="code" pattern="[a-z]{1,15}" 
		title="Special Characters are not allowed"class="form-control" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Turn Around Time(Days)</label>
    <div class="col-sm-4"> 
        <input type="number" name="tat" class="form-control" placeholder="" required/>
    </div>
	
    <div class="col-sm-2"> 
		<input type="submit" name='saveothertest' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	<div class="col-sm-4">
		<button type="button"  class="btn btn-danger" data-dismiss="modal">CANCEL</button>
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

<br>
</div>

<div class="col-md-6">
<?php if(isset($_GET['edittest_others'])){ 
$edittestid=$_GET['edittest_others'];
?>
<b>Editing test details for Test code <?php echo $edittestid; ?></b>
<?php
$sql="SELECT * FROM  option_examination_others WHERE code='$edittestid'";
$option_examinations=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($option_examinations) > 0){
while ($option_exam= mysqli_fetch_array($option_examinations,MYSQLI_ASSOC)) {
	$code= $option_exam['code'];
	$name = $option_exam['name'];
	$id = $option_exam['id'];
	$tat= $option_exam['tat'];
	$status= $option_exam['status'];
	}
	} ?>
		<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">Name of Test</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="" required/>
    </div>
	<label for="" class="col-sm-3  control-label label-format">Status</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
         
        <select name="status" class="form-control" required>
			<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
			<option value='Active'>Active</option>
			<option value='Suspended'>Suspended</option>
				
		</select>
    
    </div>
	</div>
	<div class="form-group">
	<label for="" class="col-sm-3  control-label label-format">TAT</label>
    <div class="col-sm-2"> 
        <input type="text" name="tat" value="<?php echo $tat; ?>" class="form-control" placeholder="" required/>
    </div>
	<label for="" class="col-sm-2 control-label label-format">Short Code</label>
    <div class="col-sm-2"> 
		<input type="text"  name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	
	
 
	<div class="col-sm-2"> 
		<input type="submit" name='editedtest_others' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	
	
	</div>
	
	</form>
	</div><?php



 } ?>
 
 <?php if(isset($_GET['resultopt_edit'])){ 
$edittestid=$_GET['resultopt_edit'];

?>
Editing Test Results Options<b> <?php echo $edittestid; ?></b>
<?php
$sql="SELECT * FROM  option_examination WHERE code='$edittestid'";
$ption_examinations=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($ption_examinations) > 0){
while ($ption_exam= mysqli_fetch_array($ption_examinations,MYSQLI_ASSOC)) {
	$code= $ption_exam['code'];
	$name = $ption_exam['name'];
	$id = $ption_exam['id'];
	}
	} ?>
		<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">Name of Test</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	<div class="form-group">
	
	<label for="" class="col-sm-2 control-label label-format">Short Code</label>
    <div class="col-sm-4 "> 
		<input type="text"  name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	
	
 
	<div class="col-sm-2"> 
		<input type="submit" name='save_resultopt_edit' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	
	
	</div>
	
	</form>
	</div><?php
} ?>

<?php if(isset($_GET['exam_resultopt_edit'])){ 
$edittestid=$_GET['exam_resultopt_edit'];
$table=$_GET['table'];

?>
Editing Test Results Options<b> <?php echo "$edittestid $table "; ?></b>
<?php
include("../includes/dbconfig.php");
	$optionstable='resultsoptions_'.$table;
	$options=mysqli_query($dbconnection,"SELECT * FROM $optionstable where id='$edittestid' ") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
	$id = $option['id'];
	$code = $option['code'];
	$value = $option['options'];
	
	} ?>
		<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">CODE</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
	<input type="hidden" name="table" value="<?php echo $table; ?>">
        <input type="text" name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	<div class="form-group">
	
	<label for="" class="col-sm-2 control-label label-format">VALUE</label>
    <div class="col-sm-4 "> 
		<input type="text"  name="opt" value="<?php echo $value; ?>" class="form-control" placeholder="" required/>
    </div>
	
	
 
	<div class="col-sm-2"> 
		<input type="submit" name='exam_resultoptable_edit' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	
	
	</div>
	
	</form>
	</div><?php
} ?> 


<?php if(isset($_GET['exam_resultoptothers_edit'])){ 
$edittestid=$_GET['exam_resultoptothers_edit'];


?>
Editing Test Results Options<b> <?php echo "$edittestid  "; ?></b>
<?php
include("../includes/dbconfig.php");
	
	$options=mysqli_query($dbconnection,"SELECT * FROM resultsoptions_others where id='$edittestid' ") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
	$id = $option['id'];
	$code = $option['code'];
	$value = $option['options'];
	$test = $option['test'];
	
	} ?>
		<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">CODE</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
	
        <input type="text" name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	<div class="form-group">
	
	<label for="" class="col-sm-2 control-label label-format">VALUE</label>
    <div class="col-sm-4 "> 
		<input type="text"  name="opt" value="<?php echo $value; ?>" class="form-control" placeholder="" required/>
    </div>
	
	
 
	<div class="col-sm-2"> 
		<input type="submit" name='saveexam_resultoptothers_edit' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	
	
	</div>
	
	</form>
	</div><?php
} ?> 


<?php if(isset($_GET['edittest'])){ 
$edittestid=$_GET['edittest'];
?>
<b>Editing test details for Test code <?php echo $edittestid; ?></b>
<?php
$sql="SELECT * FROM  option_examination WHERE code='$edittestid'";
$ption_examinations=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($ption_examinations) > 0){
while ($ption_exam= mysqli_fetch_array($ption_examinations,MYSQLI_ASSOC)) {
	$code= $ption_exam['code'];
	$name = $ption_exam['name'];
	$id = $ption_exam['id'];
	}
	} ?>
		<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-test" autocomplete='off'>
	
	<div class="form-group">  
	<label for="" class="col-sm-3  control-label label-format">Name of Test</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="" required/>
    </div>
	</div>
	<div class="form-group">
	<label for="" class="col-sm-3  control-label label-format">Status</label>
    <div class="col-sm-7"> <input type="hidden" name="editid" value="<?php echo $id; ?>">
         
        <select name="status" class="form-control" required>
			<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
			<option value='Active'>Active</option>
			<option value='Suspended'>Suspended</option>
				
		</select>
    
    </div>
	<label for="" class="col-sm-3  control-label label-format">TAT</label>
    <div class="col-sm-2"> 
        <input type="text" name="tat" value="<?php echo $tat; ?>" class="form-control" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label label-format">Short Code</label>
    <div class="col-sm-4 "> 
		<input type="text"  name="code" value="<?php echo $code; ?>" class="form-control" placeholder="" required/>
    </div>
	
	
 
	<div class="col-sm-2"> 
		<input type="submit" name='editedtest' value='SAVE' class="btn btn-success" placeholder=""/>
    </div>
	
	
	</div>
	
	</form>
	</div><?php
} ?>



<?php if(isset($_GET['res_opt'])){ 
$testcode=$_GET['res_opt'];
?>
<h4>Results Options for Test code <?php echo $testcode; ?></h4>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-new-resultsoption">Add Results Option</button>
<br><br>
<table bgcolor="#F0F0F0" border='1'>
	<tr align="left" bgcolor=''>  <th title="">CODE</th> <th title="">VALUE</th> <th title="">ACTION</th></tr>
	<?php
	include("../includes/dbconfig.php");
	$optionstable='resultsoptions_'.$testcode;
	$options=mysqli_query($dbconnection,"SELECT * FROM $optionstable") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
	$id = $option['id'];
	$code = $option['code'];
	$value = $option['options'];
	?>
	<tr class='recordrow' bgcolor='#fffbf6' align='left'>
		
		<td><?php echo $code ?></td>
		<td><?php echo $value ?></td>
		<td>
		<a href='?exam_resultopt_edit=<?php echo $id ?>&&table=<?php echo $testcode ?>'>Edit</a> | <a href='?del_resopt=<?php echo $id ?>&&table=<?php echo $testcode ?>'onclick='return delete_warning(this)'>Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
	
</table>

<div class="modal fade" id="modal-new-resultsoption" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">NEW RESULTS OPTION - <?php echo $testcode; ?></h4>
	</div>
    <div class="modal-body">
	<div class="form_head"></div>
	
	<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-resultsoption" autocomplete='off'>
	
	<input type="hidden" name="testcode" class="form-control" value="<?php echo $testcode; ?>" placeholder=""/>
	<input type="hidden" name="optionstable" class="form-control" value="<?php echo $optionstable; ?>" placeholder=""/>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Option Code</label>
    <div class="col-sm-4"> 
        <input type="text" name="code" class="form-control" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label">Option Value</label>
    <div class="col-sm-4"> 
		<input type="text"  name="value" class="form-control" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label"></label>
    <div class="col-sm-4"> 
     
    </div>
	
    <div class="col-sm-2"> 
		<input type="submit" name='saveresultsoption' class="btn btn-success" value='SAVE' class="form-control" placeholder=""/>
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


<?php } ?>


<?php if(isset($_GET['othertestcode'])){ 
$othertestcode=$_GET['othertestcode'];
$othertestid=$_GET['othertestid'];
?>
<h4>Results Options for Test code <?php echo $othertestcode; ?></h4>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-new-otherresultsoption">Add Results Option</button>
<br><br>
<table bgcolor="#F0F0F0" border='1'>
	<tr align="left" bgcolor=''>  <th title="">CODE</th> <th title="">VALUE</th> <th title="">ACTION</th></tr>
	
	<?php
	include("../includes/dbconfig.php");
	$options=mysqli_query($dbconnection,"SELECT * FROM resultsoptions_others WHERE test=$othertestid") or die("ERROR : " . mysqli_error($dbconnection));
	
	while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
	$id = $option['id'];
	$code = $option['code'];
	$value = $option['options'];
	?>
	<tr class='recordrow' bgcolor='#fffbf6' align='left'>
		
		<td><?php echo $code ?></td>
		<td><?php echo $value ?></td>
		<td>
		<a href='?exam_resultoptothers_edit=<?php echo $id?>'>Edit</a> | <a href='?res_others_del=<?php echo $id ?>'onclick='return delete_warning(this)'>Delete</a>
		</td>
	</tr>
	
	<?php
	}
	?>
	
</table>

<div class="modal fade" id="modal-new-otherresultsoption" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">NEW RESULTS OPTION - <?php echo $othertestcode; ?></h4>
	</div>
    <div class="modal-body">
	<div class="form_head"></div>
	
	<div class="form-horizontal">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form-new-otherresultsoption" autocomplete='off'>
	
	<input type="hidden" name="othertestcode" class="form-control" value="<?php echo $othertestcode; ?>" placeholder=""/>
	<input type="hidden" name="othertestid" class="form-control" value="<?php echo $othertestid; ?>" placeholder=""/>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label">Option Code</label>
    <div class="col-sm-4"> 
        <input type="text" name="code" class="form-control" placeholder="" required/>
    </div>
	
	<label for="" class="col-sm-2 control-label">Option Value</label>
    <div class="col-sm-4"> 
		<input type="text"  name="value" class="form-control" placeholder="" required/>
    </div>
	</div>
	
	<div class="form-group">  
	<label for="" class="col-sm-2 control-label"></label>
    <div class="col-sm-4"> 
     
    </div>
	
    <div class="col-sm-2"> 
		<input type="submit" name='saveotherresultsoption' class="btn btn-success" value='SAVE' class="form-control" placeholder=""/>
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

<?php } ?>

</div>


</div>

<br>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</div>

</body>
</html>