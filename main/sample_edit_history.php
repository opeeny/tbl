<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
			<?php 
				$labno=$_GET['findlabno'];
				include("../includes/connection.php");
			?>
			<h4><b>Samples Edit History For Labno<?php echo '$labno'; ?></b></h4>
			<div class="table-responsive">
				<table border="1" class="table" width="120%">
					<tr align='left'>
						<th>Labno</th>
						<th>Study code</th>
						<th>Volume</th>
						<th>Specimen Type</th>
						<th>Appearance</th>
						<th>Collection Method</th>
						<th>Examination</th>
						<th>Accession Time</th>
					</tr>
					<?php 
						while($hist=mysqli_fetch_array($con, $sql_edithist)){
							$histid=$hist['id'];
							$histlabno=$hist['labno'];
							$histstudy=$hist['study_code'];
							$histvolume=$hist['volume'];
							$histspectype=$hist['specimen_type'];
							$histappearance=$hist['appearance'];
							$histcollmtd=$hist['collection_method'];
							$histexam=$hist['examination'];
							$histacctime=$hist['accession_time'];
							$histvisitinterval=$hist['visit_interval'];	
						}
						echo "<tr class='accessionrow' align='left' title='$histlabno'>
							<td>$histlabno</td>
							<td>$histstudy</td>
							<td>$histvolume</td>
							<td>$histspectype</td>
							<td>$histappearance</td>
							<td>$histcollmtd</td>
							<td>$histexam</td>
							<td>$histacctime</td>
						</tr>";
					?>
				 </table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
			</div>
		</div>
	</div>
</div>