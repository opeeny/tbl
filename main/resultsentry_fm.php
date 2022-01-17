<?php echo "Microscoy"; ?>
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
	include("../includes/connection.php");
	if(isset($_POST['ressubmit_fm'])){
		$reslabno=$_POST['reslabno'];
		$resresult=$_POST['resresult'];
		$resinterpretation=$_POST['resinterpretation'];
		$resdate=$_POST['resdate'];
		$rescomment=$_POST['rescomment'];
		$qned=$_POST['qned'];
		$restech=$_POST['restech'];
		$resentrant=$_SESSION['name'];
		
		echo "I am ".$resentrant;
		
		$entrytime=date('Y-m-d H:i:s', time());//current time
		$sql="SELECT * FROM results_fm WHERE labno=$reslabno and entrytime!=0000-00-00";
		$sql_samples=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
		if(mysqli_num_rows($sql_samples)>0){
		while($row_samples=mysqli_fetch_array($sql_samples)){
			$labno=$row_samples['labno'];
			$result=$row_samples['result'];
			$interpretation=$row_samples['interpretation'];
			$date=$row_samples['resdate'];
			$comment=$row_samples['comment'];
			$tech=$row_samples['restech'];
			$oldentrant=$samples['entrant'];
			$oldentrydate=$samples['entrytime'];
			//comparing values captured from the form using the post method and those got from the database tables using the while loop
			if($result!=$resresult or $date!=$resdate or $comment!=$rescomment or $tech!=$restech){
				$entrycorrected='Yes';
			}
		 }
		 $sql_insert_hist="INSERT INTO results_fm_hist(labno,result,interpretation,resdate,comment,restech,entrant,entrytime)
		 VALUES($labno,$result,$interpretation,$date,$comment,$tech,$oldentrant,$oldentrydate)";
		 mysqli_query($con, $sql_insert_hist) or die("Error".mysqli_error($con)) or die("Error ".mysqli_error($con));
		 }//end if 
		 if($qned=='yes' and $entrycorrected=='yes'){
			 $sql_update1="UPDATE results_fm SET status='',result='result',interpretation='$interpretation',resdate='$date',
			 comment='$comment',restech='$tech',entrant='$entrant',entrytime='',reviewer='',reviewdate='' WHERE labno=$reslabno";
			 mysqli_query($con,$sql_update1) or die("Error ".mysqli_error($con)) or die("Error".mysqli_error($con));
		 }else{
			 $sql_update2 = "UPDATE results_fm SET result='$resresult',interpretation='$resinterpretation',comment='$rescomment',
			 resdate='$resdate',restech='$restech',entrant='$resentrant',entrytime='$entrytime',reviewer='',reviewdate='',status='' WHERE labno=$reslabno";
			mysqli_query($con,$sql_update2) or die("Error".mysqli_error($con)) or die("Error".mysqli_error($con));
			}
			
			//Now query the next rows
			$query_nextrows=mysqli_query($con, "SELECT labno FROM results_fm WHERE labno>$reslabno AND result='' ORDER BY labno LIMIT 1") or die("Err".mysqli_error($con));
			while($nextrows=mysqli_fetch_array($query_nextrows)){
				$newlabno=$nextrow['labno'];
			}
			header("location:?ressumit=yes&&findlabno=".$newlabno);   
	  }
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
	<head>
		<?php include("../includes/headercontent.php"); ?>
		<?php include("../includes/headerbootstrapcontent.php"); ?>
	</head>
	<script type="text/javascript">
		setTimeout(function(){
			$('#successmessage').fadeOut('slow');
		}, 2000//time in milliseconds
	</script>
	<body>
		<div id="wrapper" class="container">
			<div id="banner" class="row">
				<?php include("../includes/banner.php"); ?>
			</div>
			<div id="middle" class="row">
				<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
			<div id="welcome" >
				<?php include("../includes/welcomediv.php");?>
			</div>
			<div id="content">
					<div class="row">
						<?php
							if(isset($_GET['findlabno'])){
								@$labno=$_GET['findlabno'];
								include("../includes/connection.php");
								if($labno==''){
									echo 
									"<script>
										alert('Lab No $labno is not registered in Microscoy FM');
										location.href='resultsentry_fm.php';
									</script>";
								}
								include("../includes/connection.php");
								$next_query=mysqli_query($con, "SELECT labno FROM results_fm WHERE labno>$labno ORDER BY labno LIMIT 1") or die("Error ".mysqli_error($con));
								while($nextrow=mysqli_fetch_array($next_query)){
									$nextlabno=$nextrow['labno'];
									
								}
								$prev_query=mysqli_query($con, "SELECT labno FROM results_fm WHERE labno<$labno ORDER BY labno DESC LIMIT 1") or die("Error".mysqli_query($con));
								while($prevrow=mysqli_fetch_array($prev_query)){
									$prev_labno=$prevrow['labno'];
								}
							}
						?>
						
						<div class="col-md-7">
							<fieldset class="scheduler-border">
								<legend  class="scheduler-border" ><b>MICROSCOPY FM  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
								<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" name="formfindsample"  autocomplete="off">
									<div class="form-horizontal">
									<div class="form-group"> 
									<div class="col-md-2">
									<label>LAB NO</label>:
									</div>
									<div class="col-md-3">
										<input name="findlabno" class="form-control" type="text" placeholder="Search LAB NO" />
									</div>
									<div class="col-md-2">
										<input type="submit"  name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
									</div>
									<div class="col-md-3">
										<input type="button"value="<<PREVIOUS" class="form-control btn btn-success" onclick="location.href='resultsentry_fm.php?findlabno=<?php echo @$prevlabno;?>'">
									</div>
									<div class="col-md-2">
										<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_fm.php?findlabno=<?php echo @$nextlabno;?>'">
									</div>
									</div>
									</div>
								</form>
							</fieldset>
							<!--php to process submit of results--->
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">
									<b><font size='6em'>LAB NO<a href='#' title="Click to view request details"><font color='red'><u><?php echo @$studycode.'-'.@$labno;?></u></font></a></font></b>
									<div style='background-color:white;'>
										<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
											<div class="form-horizontal">
												<div class="form-group">
													<b class="col-sm-6">MICROSCOPY FM</b>
												</div>
												<input type="hidden" name="reslabno" value="<?php $labno;?>" />
												<?php if(isset($_GET['qnd'])){ 
													$qnd=$_GET['qnd'];
												?>
												<input name="qned" type="hidden" value="<?php echo $qnd; ?>" />
												<div class="form-group">
													<label class="col-sm-3 control-label label-format">Rejection Reason</label>
													<div class="col-sm-7">
														<?php echo '<b>'.'<font color="red">'.$rejectionreason.'</font>'.'</b>'; ?>
													</div>
												</div>
												<?php }//closes the $_GET['qnd'] if statement ?>
												<div class="form-group">
													<label class="col-sm-2 control-label label-format">Result:</label>
													<div class="col-sm-7">
														<select name="resresult" class="form-control">
															<option value="<?php echo '$result';?>"><?php echo @$result;?></option>
															<option value=""></option>
															<?php
																include("../includes/connection.php");
																$query=mysqli_query($con, "SELECT * FROM resultsoptions_fm ORDER BY options") or die("Error ".mysqli_error($con));
																while($row=mysqli_fetch_array($query)){
																	$fmoption=$row['options'];
																	$code=$row['code'];
																	echo "<option value='$fmoption' style='background-color:#CCCCCC'>$fmoption</option>";
																}
															?>
														</select>
													</div>
												</div>vvvv
												<div class="form-group">
													<label class="col-sm-2 control-label label-format" >INTERPRETATION:</label>
													<div class="col-sm-4">
														<select name="resinterpretation" class="form-control">
															<option value="<?php echo $interpretation; ?>"><?php $interpretation;?></option>
															<option value=""></option>
															<option value="MTBC isolated">MTBC isolated</option>
															<option value="MTBC NOT isolated">MTBC NOT isolated</option>
															<option value="MTBC isolated and culture contaminated">MTBC isolated and culture contaminated</option>
															<option value="NTM isolated ">NTM isolated </option>
															<option value="NTM isolated and culture contaminated ">NTM isolated and culture contaminated </option>
															<option value="Contaminated">Contaminated</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label label-format" >DATE:</label>
													<div class="col-sm-7">
														<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
															<input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>"  readonly>
															<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
														</div>
														<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>"  name="resdate" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label label-format">COMMENT:</label>
													<div class="col-sm-7">
														<select name="rescomment" class="form-control">
															<option value="<?php echo $comment;?>"><?php echo $comment;?></option>
															<?php
																include("../includes/connection.php");
															$sql="SELECT * FROM comments ORDER BY comment";
															$comments=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

															while ($comment = mysqli_fetch_array($comments,MYSQLI_ASSOC)) {
																$commentname = $comment['comment'];
															echo "<option value='$commentname' style='background-color:#CCCCCC;'>$commentname</option>";	
															}	
															?>nnn
														</select>
													</div>
												</div>mmmmmmmmm
												<div class="form-group">
													<label class="col-sm-2 control-label label-format">TECH:</label>
													<div class="col-sm-7">
														<select name="restech" class="form-control">
																<option value="<?php echo $tech;?>" style='background-color:#CCCCCC;'><?php echo $tech;?></option>
																
																<?php
																include("../includes/connection.php");
																$sql="SELECT * FROM tech_initials where status='Active' ORDER BY initial";
																$techs=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

																while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
																	$techinitial = $tech['initial'];
																	$techname = $tech['name'];
																	echo "<option value='$techinitial' style='background-color:#CCCCCC;'>$techinitial - $techname</option>";	
																}			
																?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
													<div class="col-sm-3"> <?php echo $entrant;?>
													<input name="resentrant" type="hidden" value="<?php echo $entrant;?>"/>
													</div>
													<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
													<div class="col-sm-3"><?php if($entrytime=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrytime));?>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-5"> 
													</div>
													<div class="col-sm-2"> 
														<input type="submit" class="btn btn-success" name="ressubmit_fm" value="SAVE" >
													</div>
												</div>
											</div>
										</form>
									</div>
								</legend>
							</fieldset>
							
							<!---<?php //} ?> --->
							<?php 
								include("../includes/connection.php"); 
								$sql="SELECT * FROM results_fm WHERE result=''";
								$empty_results=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
								$total_empty=mysqli_num_rows($empty_results);
							?>
							<div id="" style="font-size:0.9em;  max-height:130px; width:; margin-right:; padding:; overflow:scroll;">
								<b>Pending Microscopy FM Results</b><br/>
								This is the the list of pending Microscopy FM results. [Total=<?php echo $total_empty;?>]
								<?php
									while($row=mysqli_fetch_array($empty_results)){
										$empty_labno=$row['labno'];
										$select_empty="SELECT * FROM samples WHERE labno=$empty_labno";
										$empty_query=mysqli_query($con, $select_empty) or die("Error ".mysqli_error($con));
										while($empty_row=mysqli_fetch_array($empty_query)){
											$empty_study=$empty_row['study_code'];
										}
										echo "<a href='?findlabno=$empty_labno'>empty_study-empty_labno</a>&emsp;";
									}
								?>
							</div>
							<?php 
								include("../includes/connection.php");
								$sql="SELECT * FROM results_fm WHERE status='Rejected'";
								$questioned_results=mysqli_query($con, $sql) or die("Error".mysqli_error($con));
								$total_questioned=mysqli_num_rows($questioned_results);
								if($total_questioned>0){ ?>
								<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
									<h4><b> Questioned Microscopy Fm Results </b></h4>
									This is the list of Questioned Microscopy FM results. [Total=<?php echo $total_questioned;?>]<br>
									<?php 
									while($questioned_rows=mysqli_fetch_array($questioned_results)){
										$qnd_labno=$questioned_rows['labno'];
										$sql_qnd="SELECT * FROM samples WHERE labno=$qnd_labno";
										$qnd_query=mysqli_query($con, $sql_qnd) or die("Error ".mysqli_error($con));
										while($rows_qnd=mysqli_fetch_array($qnd_query)){
											$qnd_studycode=$rows_qnd['study_code'];
										}
										echo "<a href='?qnd=yes&&findlabno=$qnd_labno'>$qnd_studycode-$qnd_labno&emsp;</a>";//list of several links of questioned codes&labs
									}
								 }//ends total_questioned if statement
									?>
									<?php if(isset($_GET['findlabno'])){
										
										$labno=$_GET['findlabno'];
									?>
									<?php 
										include("../includes/connection.php");
										$sql="SELECT * FROM results_fm_hist WHERE labno=$labno ORDER BY id DESC";
										$hists=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
										$hist_count=mysqli_num_rows($hists);
										if($hist_count>0){
											$sql_hist="SELECT * FROM samples WHERE labno=$labno";
											$query_hist=mysqli_query($con, $sql_hist) or die("Error ".mysqli_error($con));
											while($row_hist=mysqli_fetch_array($query_hist)){
												$hist_code=$row_hist['study_code'];
											}?>
											<h4><b>Result Edit History For LABNo<?php echo "$hist_code-$labno <font color='red'>[Total Edits=$hist_count]</font>"; ?></b></h4>
											<div style='font-size:0.9em; background-color:white; border:; max-height:200px; width:; margin-right:; padding:; overflow:scroll;'>
												<div class="table-responsive">
													<table border="1" class="table">
														<tr align='left'>
															<th>Labno</th>
															<th>Result</th>
															<th>Resdate</th>
															<th>Comment</th>
															<th>Entrant</th>
															<th>Res Tech</th>
															<th>Entry Time</th>
															<th>Modified Time</th>
														</tr>
														<?php 
														//getting results from results_fm_hist table
															while($hist=mysqli_fetch_array($hists)){
																$histid=$hist['id'];
																$histlabno=$hist['labno'];
																$histresult=$hist['result'];
																$histcomment=$hist['comment'];
																$histresdate=$hist['resdate'];
																$histentrant=$hist['entrant'];
																$histtech=$hist['restech'];
																$histentrytime=$hist['entrytime'];
																$histmodifiedtime=$hist['modified_time'];
																echo "<tr class='accessionrow' align='left' title='$histlabno'>
																	<td>$histlabno</td>
																	<td>$histresult</td>
																	<td>$histresdate</td>
																	<td>$histcomment</td>
																	<td>$histentrant</td>
																	<td>$histtech</td>
																	<td>$histentrytime</td>
																	<td>$histmodifiedtime</td>
																</tr>";
															}
															echo "</table>";
														}//end if for hist_count
														?>
												</div>
											</div>
									<?php } //end if for findlabno ?>	
								</div>
						</div>
					</div>
				  <?php } else { echo "<center>Illegal Access Blocked.<br><a href='index.php'>Login</a>to access the resources.</center>"; } ?>
				  <div id="footer" class='row'> 
					<?php include("../includes/footer.php"); ?>
				  </div>
				  <script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
				</div>//content below welcome
			</div>//row
		</div>//container
	</body>
</html>