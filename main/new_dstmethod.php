
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">

          <div class="form_head">ADDING NEW DST METHOD</div>
  <form action="" method="post" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Code</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="code" name="code" />
      </div>
	  <label  class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4"> 
          <input type="text" class="form-control" placeholder="Method Name here" name="method" />
     </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Category</label>
      <div class="col-sm-4"> 
       <select name="cat" class="form-control" REQUIRED>
	   <option value="" style='background-color:#CCCCCC;'>Select Category</option>
			<option value="dst1" style='background-color:#CCCCCC;'>dst1</option>
			<option value="dst2" style='background-color:#CCCCCC;'>dst2</option>
			</select>
      </div>
	  <label  class="col-sm-2 control-label">Type</label>
      <div class="col-sm-4"> 
	  	<select name="type" class="form-control">
		<option value="" style='background-color:#CCCCCC;'>Select Type</option>
			<option value="Genotypic" style='background-color:#CCCCCC;'>Genotypic</option>
			<option value="Phenotypic" style='background-color:#CCCCCC;'>Phenotypic</option>
			</select>
			
        
      </div>
       </div>
	   
	   
	   <div class="form-group"> 
	   <div class="col-sm-7"> 
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="regdst_mtd"  class="btn btn-primary">Submit</button>
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
