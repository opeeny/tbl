
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">

          <div class="form_head">FO-MYC-P025-A: 7H10/11S+ QC MEDIA LOG </div>
  <form action="" method="post" name="requestor" autocomplete="off">
  <div class="form-horizontal">
  
<div class="form-group">
    
	  <label  class="col-sm-2 control-label">Prep Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input16" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input16" value="" name="prepdate" />
				</div>
<label  class="col-sm-2 control-label">Prep By</label>
      <div class="col-sm-4">
			<select class="form-control" name="prepby" >
			<option value="">-Select -</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
      </div>
    </div>
	<div class="form-group">
      <label  class="col-sm-2 control-label">Lot No. Agar base:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Lot No. of phosphate buffer" name="lotnoagar" />
      </div>
	  <label  class="col-sm-2 control-label">Lot Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input11" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input11" value="" name="expdateagar" />
				</div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Lot # OADC:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Lot No.OADC" name="lotnooadc" />
      </div>
	  <label  class="col-sm-2 control-label">Lot OADC Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12" value="" name="expdateoadc" />
				</div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Lot # Selectab:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Lot No. of phosphate buffer" name="lotnoselecta" />
      </div>
	  <label  class="col-sm-2 control-label">Lot Selectab Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input13" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input13" value="" name="expdateselecta" />
				</div>
    </div>
	<div class="form-group"> 
     
	  <label  class="col-sm-2 control-label">Media Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input18" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input18" value="" name="expdatemedia" />
				</div>
    </div>
<div class="form-group"> 
<label  class="col-sm-2 control-label">Reviewed By</label>
      <div class="col-sm-4">
			<select class="form-control" name="reviewedby" >
			<option value="">-Select -</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
      </div>
	   <label  class="col-sm-2 control-label">Review Date</label>
       <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12"  name="reviewdate" />
				</div>
	  </div>
	
	  <div class="form-group"> 
	  <label  class="col-sm-2 control-label">QC PASS/FAIL:</label>
      <div class="col-sm-4"> 
       <select class="form-control" name="qcpassfail" required >
			<option value="">-Select -</option>
			<option value="Pass">Pass</option>
			<option value="Fail">Fail -</option>
			
		</select>
      </div>
<label  class="col-sm-2 control-label">Comment</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Comment" name="comment" />
      </div>
	  </div>
	   <div class="form-group"> 
		  <div class="col-sm-4"> 
		  </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="submitqc"  class="btn btn-primary">Submit</button>
      </div>
		  
    </div>
    
    
   </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

