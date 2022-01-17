<br/>
<div class = "row">
	<div class="col-md-3 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-green set-icon"> <i class="fa fa-edit"></i> </span>
	<div class="text-box" >
		<p class="main-text">Manage Samples</p>
		<select name="result"  class="form-control" onchange="location=this.value">
			<option value="" required>Select Action On Samples</option>
			<option value='patient_registration.php' style='background-color:#CCCCCC;'>Patient/Samples Registration</option>
			<option value='samples_update.php' style='background-color:#CCCCCC;'>Samples Data Update</option>
		    <option value='samples_review.php' style='background-color:#CCCCCC;'>Samples Data Review</option>
			<option value='deletedsamples_select.php' style='background-color:#CCCCCC;'>Deleted Samples</option>
			<option value='profiles.php' style='background-color:#CCCCCC;'>Patient Profile Management</option>
			<option value='accessioned_info.php' style='background-color:#CCCCCC;'>Accessioned Samples</option>
			<option value='rejectedsamples_select.php' style='background-color:#CCCCCC;'>Rejected Samples</option>
			<option value='sample_rejection_advanced.php' style='background-color:#CCCCCC;'>Reject Accessioned Samples</option>
			<option value='report_srf.php' style='background-color:#CCCCCC;'>Print SRFs</option>
			</select>
		<p class="text-muted"></p>
	</div>
	</div>
	</div>
	
	<!-- Results Entry --->
	<div class="col-md-3 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-green set-icon"> <i class="glyphicon glyphicon-level-up"></i> </span>
	<div class="text-box" >
		<p class="main-text">Results Entry</p>
			<select name="result"  class="form-control" onchange="location = this.value;">
			<option value="">Select a Test for Results Entry</option>
			<option value='processing_worksheet.php' style='background-color:#CCCCCC;'>Processing Worksheet</option>
			<option value='resultsentry_fm.php' style='background-color:#CCCCCC;'>MICROSCOPY - FM (Auramine)</option>
		    <option value='resultsentry_zn.php' style='background-color:#CCCCCC;'>MICROSCOPY - ZN (Concentrated)</option>
			<option value='resultsentry_genexpert.php' style='background-color:#CCCCCC;'>GENEXPERT</option>
			<option value='resultsentry_liquidculture.php' style='background-color:#CCCCCC;'>LIQUID CULTURE </option>
			<option value='resultsentry_solidculture.php' style='background-color:#CCCCCC;'>SOLID CULTURE </option>
			<option value='resultsentry_bloodculture.php' style='background-color:#CCCCCC;'>BLOOD CULTURE </option>
			<option value='resultsentry_identification.php' style='background-color:#CCCCCC;'>IDENTIFICATION </option>
			<option value='resultsentry_dst1.php' style='background-color:#CCCCCC;'>1st LINE DST</option>
			<option value='resultsentry_dst2.php' style='background-color:#CCCCCC;'>2nd LINE DST</option>
			<option value='process_edit.php' style='background-color:#CCCCCC;'>Processing Data</option>
			<option value='' style='background-color:#CCCCCC;'>OTHERS</option>
			<?php
			include("../includes/connection.php");
			$sql="SELECT * FROM option_examination_others WHERE status='Active'";
			$othertests=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

			while ($othertest = mysqli_fetch_array($othertests,MYSQLI_ASSOC)) {
				$code = $othertest['code'];
				$name = $othertest['name'];
				echo "<option value='resultsentry_others.php?newtest=$code' style='background-color:#CCCCCC;'>
				OTHERS - $name</option>";
			}
			?>
			</select>
		<p class="text-muted"></p>
	</div>
	</div>
	</div>
	
	<!-- Results Review --->
	<div class="col-md-3 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-green set-icon"> <i class="fa fa-check"></i> </span>
	<div class="text-box" <?php if($role=='Lab Technologist' or $role=='Data Administrator'){ ?>style='pointer-events:none;' <?php } ?> >
		<p class="main-text">Results Review</p>
			<select name="result"  class="form-control" onchange="location = this.value;">
			<option value="">Select a Test for Results Review</option>
		    <option value='resultsreview_fm.php' style='background-color:#CCCCCC;'>MICROSCOPY - FM (Concentrated)</option>
			<option value='resultsreview_zn.php' style='background-color:#CCCCCC;'>MICROSCOPY - ZN (Concentrated)</option>			 
			<option value='resultsreview_genexpert.php' style='background-color:#CCCCCC;'>GENEXPERT</option>
			<option value='resultsreview_liquidculture.php' style='background-color:#CCCCCC;'>LIQUID CULTURE</option>
			<option value='resultsreview_solidculture.php' style='background-color:#CCCCCC;'>SOLID CULTURE</option>
			<option value='resultsreview_bloodculture.php' style='background-color:#CCCCCC;'>BLOOD CULTURE</option>
			<option value='resultsreview_identification.php' style='background-color:#CCCCCC;'>IDENTIFICATION</option>			
			<option value='resultsreview_dst1.php' style='background-color:#CCCCCC;'>1st LINE DST</option>
			<option value='resultsreview_dst2.php' style='background-color:#CCCCCC;'>2nd LINE DST</option>
			<option value='' style='background-color:#CCCCCC;'>OTHERS</option>
			<?php 
				include("../includes/connection.php");
				
				$sql = "SELECT * FROM option_examination_others where status='Active'";
				$query = mysqli_query($con, $sql) or die("Error ".mysqli_error($con));	
				while($others=mysqli_fetch_array($query)){
					$name=$others['name'];
					$code=$others['code'];
					echo "<option value='resultsreview_others.php?newtest=$code' style='background-color:#CCCCCC'>Others -> $name</option>";
				}
				?>
			</select>
		<p class="text-muted"></p>
	</div>
	</div>
	</div>
</div>
<!-- Row 2 -->
<div class="row">

	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box"><br/><br/>
			<span class="icon-box bg-color-green set-icon"><i class="glyphicon glyphicon-paperclip"></i></span>
			<div class="text-box">
				<a href="worksheet.php"><p class="main-text">Work Sheets</p></a>
				<br/>
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box"><br/><br/>
			<span class="icon-box bg-color-green set-icon"><i class="fa fa-download"></i></span>
			<div class="text-box" <?php if($role=='Lab Technologist'){?> style='pointer-events:none;'<?php } ?>>
				<a href="reports_extract.php"><p class="main-text">Data Downloads</p></a>
				<br/>
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box"><br/>
			<span class="icon-box bg-color-green set-icon"><i class="glyphicon glyphicon-duplicate"></i></span>
			<div class="text-box" <?php if($role=='IT' or $role=='Lab Technologist'){?> style='pointer-events:none;'<?php }?>>
				<a href="report_soft_simplified.php?state=normal"><p class="main-text">Results Reports(Research Studies)</p></a>
				
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	
	<?php if($role!=='Administrator'){?>
	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box">
			<span class="icon-box bg-color-green set-icon"><i class="fa fa-lock"></i></span>
			<div class="text-box" >
				<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><p class="main-text"></p>Change Password</button>
				<div class="modal fade" id="myModal" role="dialog">
					<?php require_once 'changepass.php'?>
				</div>
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	<?php }else {?>
	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box">
			<span class="icon-box bg-color-green set-icon"><i class="fa fa-wrench"></i></span>
			<div class="text-box" >
				<p class="main-text">Settings</p>
				<select name="result" class="form-control" onchange="location=this.value;">
					<option value="">Select Admin task</option>
					<option value="admin_study.php">Manage Studies/Projects</option>
					<option value="admin_resinterpret.php">Manage Results Interpretation</option>
					<option value='admin_tests.php' style='background-color:#CCCCCC;'>Manage Tests and Results Options</option>
					<option value='admin_drugs.php' style='background-color:#CCCCCC;'>Manage DST Drugs </option>
					<option value='specimen_storage.php' style='background-color:#CCCCCC;'>Specimen Storage  </option>
					<option value='admin_appearance.php' style='background-color:#CCCCCC;'>Sample Appearance Options</option>
					<option value='admin_collmethod.php' style='background-color:#CCCCCC;'>Collection Methods </option>
					<option value='admin_dst_methods.php' style='background-color:#CCCCCC;'>Manage DST Methods</option>
					<option value='sample_deletion.php' style='background-color:#CCCCCC;'>Delete Sample</option>
					<option value='admin_spectype.php' style='background-color:#CCCCCC;'>Specimen Types</option>
					<option value='admin_tech.php' style='background-color:#CCCCCC;'>Manage Technologists</option>
					<option value='admin_rescomments.php' style='background-color:#CCCCCC;'>Results Comments</option>
					<option value='admin_visitinterval.php' style='background-color:#CCCCCC;'>Manage Visit Interval</option>
					<option value='admin_media.php' style='background-color:#CCCCCC;'>Manage Media Options</option>
					<option value='admin_idmethods.php' style='background-color:#CCCCCC;'>Manage ID Methods</option>
					<option value='admin_consistency.php' style='background-color:#CCCCCC;'>Manage Consistency</option>
					<option value='audit_search.php' style='background-color:#CCCCCC;'>Manage Results Audit</option>
					<option value='rej_reason.php' style='background-color:#CCCCCC;'>Manage Rejection Reasons</option>
				</select>
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	<?php }?>
	
</div>
<!-- Row 3 -->
<div class="row">

	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box">
			<span class="icon-box bg-color-green set-icon"><i class="fa fa-lock"></i></span>
			<div class="text-box" <?php if($role=='Quality Officer' or $role=='Lab Technologist'){?> style="pointer-events:none;"<?php } ?>>
				<a href="report_soft_simplified.php?state=normal"><p class="main-text">Results Reports(Patient Care)</p></a>
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box"><br/>
			<span class="icon-box bg-color-green set-icon"><i class="fa fa-lock"></i></span>
			<div class="text-box" <?php if($role=='Quality Officer' or $role=='Lab Technologist'){?> style="pointer-events:none;"<?php } ?>>
				<a href="reports_custom.php"><p class="main-text">Custom Reports and Analysis</p></a>
				
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-6">
		<div class="panel panel-back noti-box"><br/><br/>
		<span class="icon-box bg-color-green set-icon"> <i class="glyphicon glyphicon-time"></i> </span>
			<div class="text-box" >
				<a href="overduesamples_select.php"><p class="main-text">TAT Monitoring</p></a>
				
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-3">
		<div class="panel panel-back noti-box"><br/><br/>
			<span class="icon-box bg-color-green set-icon"><i class="glyphicon glyphicon-folder-close"></i></span>
			<div class="text-box" >
				<a href="storage.php"><p class="main-text">Storage Manager</p></a>
				
				<p class="text-muted"></p>
			</div>
		</div>
	</div>
</div>
<!-- Row 4 -->
<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-6">           
		<div class="panel panel-back noti-box"><br/><br/>
		<span class="icon-box bg-color-green set-icon"> <i class="glyphicon glyphicon-paperclip"></i> </span>
		<div class="text-box" >
			<a href="../inventory"><p class="main-text">Inventory Manager</p></a>
			<br/>
		<p class="text-muted"></p>
		</div>
		</div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-6">           
		<div class="panel panel-back noti-box">
		<span class="icon-box bg-color-green set-icon"> <i class="glyphicon glyphicon-paperclip"></i> </span>
		<div class="text-box" <?php if($role=='IT' or $role=='Data Administrator'){?> style='pointer-events:none;' <?php } ?> >
			<p class="main-text">Advanced Settings</p>
			<select class="form-control" name ="advanced" onchange="location=this.value;">
				<option value="">Select an Option</option>
				<option value="iom_report_smear.php" style="background-color:#CCCCCC;">IOM Smear Report</option>
				<option value="iom_culture_results.php" style="background-color:">IOM Culture Report</option>
				<option value="singlepagereport_soft.php" style="background-color:#CCCCCC;">Single Page Results Report</option>
				<option value="admin_users.php">manage Users</option>
				<option value="userlogreport_select.php" style="background-color:#CCCCCC;">User Log Report</option>
				<option value="admin_report.php" style="background-color:">Report Settings</option>
				<option value="footersettings.php" style="background-color:#CCCCCC;">Footer Settings</option>
				<option value="contactsettings.php">Footer Contact Settings</option>
				<option value='contactsettings.php' style='background-color:#CCCCCC;'>Footer Contact Settings</option>
				<option value='reporttitlesetting.php' style='background-color:'>Report Title Settings</option>
				<option value='report_soft_simplified.php?state=corrected' style='background-color:#CCCCCC;'>Print Corrected Reports</option>
				<option value='report_soft_simplified.php?state=reprint' style='background-color:'>Re-Print Results Reports</option>
				<option value='audit_search.php' style='background-color:#CCCCCC;'>Results Audit Search</option>
				<option value='results_audit_advanced.php' style='background-color:'>Summary Results Audit</option>
			</select>
		<p class="text-muted"></p>
		</div>
		</div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-6">           
		<div class="panel panel-back noti-box">
		<span class="icon-box bg-color-green set-icon"> <i class="glyphicon glyphicon-paperclip"></i> </span>
		<div class="text-box" >
			<p class="main-text">QC-Management</p>
			<select name="qc" class="form-control" onchange="location=this.value;">
				<option value="">Select a Test for QC Option</option>
				<option value="naoh" style='background-color:#CCCCCC;'>SODIUM HYDROXIDE-NITRATE</option>
				<option value="phos" style='background-color:'>PHOSPHATE BUFFER QC</option>
				<option value="7h10s" style='background-color:#CCCCCC;'>7H10/11,7H10S&7H10/11S+ QC</option>
			</select>
		<p class="text-muted"></p>
		</div>
		</div>
		</div>
		
	</div>