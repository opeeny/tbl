You are Logged in as: <?php 
$role=$_SESSION['name'];
$role=$_SESSION['role'];
echo $_SESSION['name']." (".$_SESSION['role'].")"; ?> 
<button  class="btn-sm btn-primary" style="" onclick="location.href='../main'">MAIN MENU</button>  
<button  class="btn-sm btn-primary" style="background-color:green" onclick="window.open('<?php echo "$_SERVER[REQUEST_URI]"; ?>')">NEW TAB</button>
<button  class="btn-sm btn-success" style="" target='_blank' onclick="location.href='../includes/tblis-manual-final.pdf'">User Guide</button> 
<button class="btn-sm btn-warning" style="" onclick="location.href='logout.php'">LOGOUT</button>