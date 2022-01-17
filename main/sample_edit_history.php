<?php

?> <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
		<?php
	@$labno=$_GET['findlabno'];

include("../includes/dbconfig.php");
//$labno=44;
//$labno=44;
?>
	
	
<h4><b>SAMPLES EDIT HISTORY FOR LABNO <?php echo "$labno" ?></b></h4>
<div class="table-responsive">
<table  border="1" class="table" width="120%">
<tr align='left'><th>Labno</th><th>Study Code</th><th>Volume</th><th>Spec Type</th><th>Appearance</th><th>Coll Method</th><th>Examination</th>
<th>Accession Time</th>
</tr>
<?php
while ($hist = mysqli_fetch_array($hists,MYSQLI_ASSOC)) {
$histid = $hist['id'];
$histstudy= $hist['studycode'];
$histlabno= $hist['labno'];
$histspectype = $hist['spectype'];
$histappearance = $hist['appearance'];
$histcollmtd = $hist['collmethod'];
$histexam = $hist['examination'];
$histvolume = $hist['volume'];
$histacctime = $hist['accessiontime'];
$histvisitinterval=$hist['visitinterval'];
	
echo "<tr class='accessionrow'  align='left' title='$histlabno '>
<td>$histlabno</td>
<td>$histstudy</td>
<td>$histvolume</td>

<td>$histspectype</td>
<td>$histappearance</td>
<td>$histcollmtd</td>
<td>$histexam</td>
<td>$histacctime</td> 
</tr>";

}
echo "</table>";	
			
?>
</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
	  </div>
  

	