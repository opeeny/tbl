
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">

          <div class="form_head">FO-MYC-P002-A: SODIUM HYDROXIDE-SODIUM CITRATE QC FORM </div>
  <form action="" method="post" name="requestor" autocomplete="off">
  <div class="form-horizontal">
  <div class="form-group"> 
     
	  <label  class="col-sm-3 control-label">Preparion & Autoclaved Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" name="prepdate" />
				</div>
    </div>
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Lot No. of NaOH-Citrate Solution:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Lot No. of NaOH-Citrate Solution" name="lotno" />
      </div>
	  <label  class="col-sm-2 control-label">NaOH-Citrate Exp Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input11" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input11" value="" name="expdate" />
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
	<label  class="col-sm-2 control-label">Performed By:</label>
      <div class="col-sm-4"> 
       <select class="form-control" name="performedby" >
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
	<label  class="col-sm-2 control-label">Performed By Date</label>
     <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input13" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input13"  name="performeddate" />
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

