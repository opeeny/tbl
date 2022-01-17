
   		<?php

?> <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">

          <div class="form_head">REPORT SETTING</div>
  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Study</label>
      <div class="col-sm-4"> 
	  <select name="study" class="form-control"  >
			
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes ORDER BY code";
			$districts=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($district = mysqli_fetch_array ($districts,MYSQLI_ASSOC)) {
				$code = $district['code'];
				//$dist_id = $district['id'];
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code</option>";	
			}			
			?>
		</select>
       
      </div>
	  <label  class="col-sm-2 control-label">Show ID</label>
      <div class="col-sm-4"> 
	    <select name="id" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">DTP-Liquid Culture </label>
      <div class="col-sm-4"> 
	    <select name="liquid" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	   <label  class="col-sm-2 control-label">ZN-Liquid Culture </label>
      <div class="col-sm-4"> 
	    <select name="znc" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	   
	
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">DTP-Liquid Culture </label>
      <div class="col-sm-4"> 
	    <select name="dtp" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	  <label  class="col-sm-2 control-label">Solid Culture Details</label>
      <div class="col-sm-4"> 
	  <select name="solid" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
    </div>
	
	   <div class="form-group"> 
	   <label  class="col-sm-2 control-label">BAP-Liquid Culture </label>
      <div class="col-sm-2"> 
	    <select name="bap" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	  <label  class="col-sm-2 control-label">Results Tech</label>
      <div class="col-sm-2"> 
	  <select name="tech" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
	  <label  class="col-sm-2 control-label">QL-Solid Culture</label>
      <div class="col-sm-2"> 
	  <select name="ql" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
	 </div>
	 <div class="form-group"> 
      <label  class="col-sm-2 control-label">SQT-Solid Culture </label>
      <div class="col-sm-2"> 
	    <select name="sqt" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
        
      </div>
	  <label  class="col-sm-2 control-label">QT-Solid Culture</label>
      <div class="col-sm-2"> 
	  <select name="qt" class="form-control" >
			
			<option value="Show">Show</option>
			<option value="Hidden">Hide</option>
		
		</select>
         
     </div>
	 <div class="col-sm-2"> 
        <button type="Submit" name="Submit"  class="btn btn-primary">Submit</button>
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
