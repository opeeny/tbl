<?php include("../includes/global_content.php");?>
<?php include("../includes/session_start.php");?>

<?php

	if(isset($_POST['edit_sample'])){
		include("../includes/connection.php");
		$interval=$_POST['interval'];
		$oldinterval=$_POST['oldinterval'];
	
	if($interval=='Month'){
		$monthoption=$_POST['monthoption'];
		$interval='Month'.$monthoption;
	}elseif($interval=='Week'){
		$weekoption=$_POST['weekoption'];
		$interval='Week'.$weekoption;
	}elseif($interval=='Day'){
		$dayoption=$_POST['dayoption'];
		$interval='Day'.$dayoption;
	}elseif($interval='Others'){
		$otheroption=$_POST['otheroption'];
		$interval=$otheroption;
		$interval=$interval;
	}else{
		$interval=$interval;
	}
	$visit_interval=$interval;
	$name=ucwords(mysqli_real_escape_string($con, $_POST['name']));
	$pinitials=ucwords(mysqli_real_escape_string($con, $_POST['pinitials']));
	$village=ucwords(mysqli_real_escape_string($con,$_POST['village']));
	$subcounty=ucwords(mysqli_real_escape_string($con,$_POST['subcounty']));
	$pid=(mysqli_real_escape_string($con,$_POST['pid']));
	$sampleid=(mysqli_real_escape_string($con,$_POST['sample_id']));
	$otherpid=(mysqli_real_escape_string($con,$_POST['other_pid']));
    $gender=(mysqli_real_escape_string($con,$_POST['gender']));
    $studycode=(mysqli_real_escape_string($con,$_POST['study_code']));
	$telephone=(mysqli_real_escape_string($con,$_POST['telephone']));
	$district=(mysqli_real_escape_string($con,$_POST['district']));
	
	$appearance=ucwords(mysqli_real_escape_string($con,$_POST['appearance']));
    $request_reason=(mysqli_real_escape_string($con,$_POST['request_reason']));
    $samplehierachy=(mysqli_real_escape_string($con,$_POST['sample_hierachy']));
	$years=(mysqli_real_escape_string($con,$_POST['age_years']));
	$months=(mysqli_real_escape_string($con,$_POST['age_months']));
	$specimen_type=(mysqli_real_escape_string($con,$_POST['specimen_type']));
	$volume=(mysqli_real_escape_string($con,$_POST['volume']));
	$consistency=(mysqli_real_escape_string($con,$_POST['consistency']));
	$hivstatus=(mysqli_real_escape_string($con,$_POST['hivstatus']));
	$peripheralresults=(mysqli_real_escape_string($con,$_POST['peripheral_results']));
	$collector=(mysqli_real_escape_string($con,$_POST['collector']));
	$collection_method=(mysqli_real_escape_string($con,$_POST['collection_method']));
	$technologist=(mysqli_real_escape_string($con,$_POST['technologist']));
	$comment=(mysqli_real_escape_string($con,$_POST['comment']));
	$transporter=mysqli_real_escape_string($con, $_POST['transporter']);
	$examination=mysqli_real_escape_string($con,implode(',', $_POST['examination']));
	$therexamination=mysqli_real_escape_string($con, implode(',', $_POST['other_examination']));
	$fullexamination=$examination.','.$otherexamination;
	$selectedsolidmedia=mysqli_real_escape_string($con, implode(',', $_POST['solidmedia']));
	$selectedliquidmedia=mysqli_real_escape_string($con, implode(',', $_POST['liquidmedia']));
	$selectedbloodmedia=mysqli_real_escape_string($con, implode(',', $_POST['bloodmedia']));
	$fullmedia=$selectedsolidmedia.','.$selectedliquidmedia.','.$selectedbloodmedia;
	$specimen_storage=mysqli_real_escape_string($con, $_POST['specimen_storage']);
	$requestor=(mysqli_real_escape_string($con, $_POST['requestor']));
	$collection_date=mysqli_real_escape_string($con, $_POST['collection_date']);
	$request_date=mysqli_real_escape_string($con, $_POST['request_date']);
	$collection_time=mysqli_real_escape_string($con, $_POST['collection_time']);
	if($collection_time=='03:00:00' or $collection_time=='00:00:00'){$collection_time='';}
	$collection_date=$_POST['collection_date'];
	$recieved_time=$_POST['recieved_time'];
	if($recieved_time=='03:00:00' or $recieved_time=='00:00:00'){$recieved_time='';}
	$recieved_date=(mysqli_real_escape_string($con, $_POST['recieved_date']));
	$process_date=mysqli_real_escape_string($con, $_POST['process_date']);
	$process_time=$_POST['process_time'];
	$process_time=date('H:i:s', strtotime($process_time));
	if($process_time=='03:00:00' or $process_time=='00:00:00'){$process_time='';}
	$process_tech=mysqli_real_escape_string($con, mysqli_real_escape_string($con,$_POST['process_tech']));
	$transport_date=mysqli_real_escape_string($con, $_POST['transport_date']);
	$transport_time=$_POST['transport_time'];
	$transport_time=date('H:i:s', strtotime($transport_time));
	if($transport_time=='03:00:00' or $transport_time=='00:00:00'){$transport_time='';}
	$labno=mysqli_real_escape_string($con, $_POST['labno']);
	$pauto_id=mysqli_real_escape_string($con, $_POST['pauto_id']);
	
	$editedby=$_SESSION['name'];
	$lastedittime=date('Y-m-d H:i', time());
	
	/* +++++++First Update Patients Table ++++++++++ */
	$sql="SELECT * FROM patients WHERE pid=$'$pid'";//first confirm if there's any row to be updated
	$patients=mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($patients);
	if($count>0){
		$update=mysqli_query($con, "UPDATE patients SET other_pid='$otherpid',study_code='$study_code',pinitials='$pinitials',
		name='$name',gender='$gender',telephone='$telephone',village='$village',subcounty='$subcounty',district='$district'
		WHERE id='$pauto_id'") or die("Error ".mysqli_error($con));
		//why again select from patients pid
		$select_pauto_id="SELECT * FROM patients WHERE pid='$pid'";//to assign it to pauto_id
		$pquery=mysqli_query($con,$select_pauto_id) or die("Error ".mysqli_error($con));
		while($rowp=mysqli_fetch_array($pquery)){
			$pauto_id=$rowp['id'];//
		}	
	}else {
		$insert="INSERT INTO patients(pid,other_pid,study_code,pinitials,name,gender,telephone,village,subcounty,district)
		VALUES('$pid','$otherpid','$studycode','$pinitials','$name','$gender','$telephone','$village','$subcounty','$district')";
		$q=mysqli_query($con, $insert) or die("Error ".mysqli_error($con));
		
		//select last insert id
		$sqlx="SELECT * FROM patients WHERE id=LAST_INSERT_ID()";
		$qu=mysqli_query($con,$sqlx) or die("Error ".mysqli_error($con));
		while($rowx=mysqli_fetch_array($qu)){
			$pauto_id=$rowx['id'];
		}
	}
	//end of updating patients table
	
	/*++++++ Now Updating Samples Table ++++++*/
	$sqls="SELECT * FROM samples WHERE labno='$labno'";
	$qs=mysqli_query($con, $sqls) or die("Error ".mysqli_error($con));
	$thecount=mysqli_num_rows($qs);
	if($thecount>0){
		while($sample=mysqli_fetch_array($qs)){
			$oldlabno=$sample['labno'];
			$oldspectype=$sample['specimen_type'];
			$oldvolume=$sample['volume'];
			$oldappearance=$sample['appearance'];
			$oldcollmethod=$sample['collection_method'];
			$oldcolldate=$sample['collection_date'];
			$oldstudycode=$sample['study_code'];
			$oldexamination=$sample['examination'];
			$oldaccessiontime=$sample['accession_time'];
		}
		//insert into samples_hist before update is done(backup)
		$sql_history="INSERT INTO samples_hist(volume,study_code,labno,specimen_type,appearance,collection_method,
		collection_date,examination,accession_time) VALUES('$oldvolume','$oldstudycode','$oldlabno','$oldspectype',
		'$oldappearance','$oldcollmethod','$oldcolldate','$oldexamination','$oldaccessiontime')";
		mysqli_query($con,$sql_history) or die("Error ".mysqli_error($con));
		
		//Now update samples table, update after backup
		$update_sample=mysqli_error($con,"UPDATE samples SET hivstatus='$hivstatus',sample_id='$sampleid',
		study_code='$studycode',pauto_id='$pauto_id',age_years='$years',age_months='$months',
		visit_interval='$visit_interval',sample_hierachy='$samplehierachy',request_reason='$request_reason',
		specimen_type='$specimen_type',appearance='$appearance',volume='$volume',consistency='$consistency',
		peripheral_results='$peripheralresults',hivstatus='$hivstatus',collector='$collector',collection_method='$collection_method',
		collection_date='$collection_date',collection_time='$collection_time',technologist='$technologist',recieved_date='$recieved_date',
		recieved_time='$recieved_time',requestor='$requestor',request_date='$request_date',examination='$fullexamination',
		media='$fullmedia',specimen_storage='$specimen_storage',comment='$comment',transporter='$transporter',
	process_time='$process_time',process_date='$process_date',process_tech='$process_tech',transport_time='$transport_time',
	transport_date='$transportdate',lasteditby='$editedby',lastedittime='$lastedittime' where labno='$labno'") or die("Error ".mysqli_error($con));
	
	include("samples_examination_media_processing.php");
	$nextfindlabno=$labno+1;
	header("location:samples_update.php?findlabno=".$nextfindlabno."&scode=".$study_code."&edited=".$labno);
	}
}
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
	<title><?php echo $title; ?></title>
	<?php include("../includes/headercontent.php");?>
	<?php include("../includes/headerbootstrapcontent.php");?>
</head>
<body>
	<div id="wrapper" class="container">
		<div id="banner" class="row">
			<?php include("../includes/banner.php");?>
		</div>
		<div id="middle" class="row">
		<?php 
		//start checking for illegal login
			if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
			<div id="welcome" >
				<?php include("../includes/welcomediv.php");?>
			</div>
			<div id="content">
				<div class="col-md-12">
					<div class="searchsample">
					<?php 
						include("../includes/connection.php");
						$sql="SELECT * FROM samples WHERE lasteditby=''";
						$unediteds=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
						$totalunedited=mysqli_num_rows($unediteds);
						
						//second sql
						$sql2="SELECT * FROM samples WHERE lasteditby='' LIMIT 0,60";
						$unediteds2_10=mysqli_query($con, $sql2) or die("Error ".mysqli_error($con));
					?>
					<?php 
					if(isset($_GET['edited'])){
						$scode=$_GET['scode'];
						$edited=$_GET['edited'];
						echo "<div id='successmessage'><center>Sample $edited Update was successful!</center></div>";
					}
					@$labno=$_GET['findlabno'];
					$prevlabno=$labno-1;
					$nextlabno=$labno+1;
					
					?>
					<fieldset class="scheduler-border"><legend class="scheduler-border"><b>SEARCHING SAMPLE FOR EDITING</b></legend>
						<div class="form-horizontal">
						<form action="samples_update.php" method="GET" name="formfindsample" onsubmit="return validateformfindsample();" autocomplete="off">
							<div class="form-group">
								<label class="col-sm-1 control-label label-format">LAB NO:</label>
								 <div class="col-sm-3">
									<input type="text" class="form-control" name="findlabno" placeholder="Search LAB NO" autofocus />
								 </div>
								 <div class="col-sm-1">
									<input type="submit" name="findsample" value="Find" class="form-control btn-primary"   style="height:30px; width:100px;" />
								 </div>
								 <div class="col-md-2">
									<input type="button" class="form-control btn-success" value="<<Previous" onclick="location.href='samples_update.php?findlabno=<?php echo $prevlabno;?>'" />
								 </div>
								 <div class="col-sm-1">
									<input type="button" class="form-control btn-info" value="Next>>" onclick="location.href='samples_update.php?findlabno=<?php echo $nextlabno;?>'" />
								 </div>
							</div>
						</form>
						</div>
						<font color="red">** There are <?php echo $totalunedited; ?> records whose details are not updated**</font>
						<br><b>First 10 Include: </b>
						<?php
							while($row=mysqli_fetch_array($unediteds2_10)){
								$labno_10=$row['labno'];
								$select_studycode_10="SELECT * FROM samples WHERE labno='$labno_10'";
								$querys=mysqli_query($con, $select_studycode_10) or die("Error ".mysqli_error($con));
								while($rows=mysqli_fetch_array($querys)){
									$studycode_10=$row['study_code'];
								}
								echo "<a href='?findlabno=$labno_10'>$studycode_10-$labno_10</a>&emsp;";
								//echo "<a href='resultsentry_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode<br/></a>";
							}
						?><br>
					</fieldset>
					<br>
					<?php
					//if you mess with closing braces  for this if, script may run infinite
					if(isset($_GET['findlabno'])){ ?>
			
					<?php 
						include("../includes/connection.php");
						$sql="SELECT * FROM samples WHERE labno='$labno'";
						$samples=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
						if(mysqli_num_rows($samples) > 0){
							while($row=mysqli_fetch_array($samples,MYSQLI_ASSOC)){
							//this is where the variables got from the url are got to be update by user, values from db are picked from this while loop
								$labno=$row['labno'];
								$pauto_id=$row['pauto_id'];
								$requestor=$row['requestor'];
								
									$select_hcpno="SELECT * FROM patients WHERE id='$pauto_id'";
									$patients=mysqli_query($con, $select_hcpno) or die("Error ".mysqli_error($con));
									while($patient=mysqli_fetch_array($patients)){
										
										$studycode=$patient['study_code'];
										$pid=$patient['pid'];
										$otherpid=$patient['other_pid'];
										$name=$patient['name'];
										$subcounty=$patient['subcounty'];
										$pinitials=$patient['pinitials'];
										$gender=$patient['gender'];
										$village=$patient['village'];
										$telephone=$patient['telephone'];
										$district=$patient['district'];
									}
									if($requestor!=''){
										$select_requester="SELECT * FROM requestors WHERE id='$requestor'";
										$reqs=mysqli_query($con, $select_requester) or die("Error ".mysqli_error($con));
										while($req=mysqli_fetch_array($reqs)){
											$reqname=$req['name'];
										}
									}
								//$studycode=$row['study_code'];
								$sampleid=$row['sample_id'];
								$examination=$row['examination'];
								$request_date=$row['request_date'];
								$technologist=$row['technologist'];
								$processdate=$row['process_date'];
								$processtech=$row['process_tech'];
								$volume=$row['volume']; if($volume==0){$volume='';}
								$transporter=$row['transporter'];
								$comment=$row['comment'];
								$labno=$row['labno'];
								$ageyears=$row['age_years']; if($ageyears==0){$ageyears='';}
								$agemonths=$row['age_months']; if($agemonths==0){$agemonths='';}
								$pauto_id=$row['pauto_id'];
								$samplehierachy=$row['sample_hierachy'];
								$visit_interval=$row['visit_interval'];
								$request_reason=$row['request_reason'];
								$appearance=$row['appearance'];
								$specimen_type=$row['specimen_type'];
								$consistency=$row['consistency'];
								$peripheral_results=$row['peripheral_results'];
								$hivstatus=$row['hivstatus'];
								$collection_date=$row['collection_date'];
								$collection_time=@date('H:i',strtotime($collection_time));
								$collector=$row['collector'];
								$specimen_storage=$row['specimen_storage'];
								$collection_method=$row['collection_method'];
								$requestdate=$row['request_date'];
								$examination=$row['examination'];
								$media=$row['media'];

								$transportdate=$row['transport_date'];
								$processtime = $row['process_time'];
								if($processtime=='03:00:00' or $processtime=='00:00:00'){
									$processtime='';
								}
								$collection_time=$row['collection_time'];
								if($collection_time=='03:00:00' or $collection_time=='00:00:00'){
									$collection_time='';
								}
								$recieved_time=$row['recieved_time'];
								if($recieved_time='03:00:00' or $recieved_time=='00:00:00'){
									$recieved_time='';
								}
								$recieved_date = $row['recieved_date'];
								$transporttime=$row['transport_time'];
								if($transporttime=='' or $transporttime==''){
									$transporttime='';
								}
								$transport_date=$row['transport_date'];
							}//end while, this values are stored in get with findlabno variable
						}else {
							echo "<script>
									alert('The lab No $labno is not registered.');
									location.href='samples_update.php'
								</script>";
						}
					?><!-- single quotes are for printing plain-text where as double quotes are for variable interpolation, variables are expanded -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border" align="">Editing details for Sample <font color='blue'><?php echo "$studycode-$labno"; if($name!=''){echo "($name)"; }?></font>
							<?php 
								$sql_edithist="SELECT * FROM samples_hist WHERE labno='$labno' ORDER BY id DESC";
								$hists=mysqli_query($con, $sql_edithist) or die("Error ".mysqli_error($con));
								$hist_count=mysqli_num_rows($hists);
								if($hist_count > 0){ ?>
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" >View Edit History</button>
									<!-- Modal --->
									<div class="modal fade" id="myModal" role="dialog">
									<!---- Code for simple_edit_history starts here, this code should popup in a modal ---->
										<?php //require_once 'sample_edit_history.php'; ?>
										
									</div>
								<?php } ?>
						</legend>
							<form action="" method="post" name="regform" autocomplete="off" onsubmit="return validateForm()" title="<?php echo '$s_code-$labno'; if($name=''){echo "($name)";}?>" >
								<div class="form-horizontal">
									<?php include("samples_edit_review_extract.php");?>
									<div class="form-group">
										<div class="col-sm-6"> 
										</div>
										<div class="col-sm-1">
											<input type="button" class="btn btn-primary" size="" value="<< BACK" style="height:3em; background-color:" onclick="history.go(-1);return true;" />
										</div>
										<div class="col-sm-1">
											<button type="Submit" name="edit_sample" class="btn btn-success">Update Sample</button>
										</div>
									</div>
								</div>
							<?php } //end if for GET['findlabno'] ?>
							</form>
					</fieldset>
					<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
				</div>
				</div>
				</div>
				<?php 
				//stop checking for illegal login
			     }else {echo "<center>Illegal Access Blocked.<br><a href='index.php'>Login</a>to access the resources</center>"; }
				?>	
			</div>
			<div id="footer" class="row">
				<?php include("../includes/footer.php");?>
			</div>
		</div>
	</div>
</body>
</html>