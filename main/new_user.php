
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">

          <div class="form_head">NEW USER REGISTRATION FORM</div>
  <form action="" method="post" name="requestor" autocomplete="off"><div class="form-horizontal">
<div class="form-group"> 
      <label  class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Name eg Mukwaya Ambrose" name="fname" />
      </div>
	  <label  class="col-sm-2 control-label">Role</label>
      <div class="col-sm-4"> 
          <select class="form-control" name="role" required >
		  <option value="<?php echo $role ?>"><?php echo $role ?></option>
	         <option value="Administrator" >Administrator</option>
		     <option value="Lab Technologist">Lab Technologist</option>
			 <option value="Reviewer" >Reviewer</option>
			 <option value="Quality Officer" >Quality Officer</option>
		      <option value="Data Administrator">Data Admin</option>
			  <option value="Inventory Manager" >Inventory Manager</option>
		      <option value="Equipment Manager">Equipment Manager</option>
		     </select> 
     </div>
    </div>
	<div class="form-group"> 
      <label  class="col-sm-2 control-label">Username</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Username" name="username" />
      </div>
	 
	  <label  class="col-sm-2 control-label">Password</label>
      <div class="col-sm-4"> 
        <input type="password" class="form-control" placeholder="Enter preferred password" name="password" />
      </div>
       </div>
	   
	   <div class="form-group"> 
	   <div class="col-sm-7"> 
	   </div>
		  <div class="col-sm-4"> 
        <button type="Submit" name="Reg_User"  class="btn btn-primary">Register User</button>
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
