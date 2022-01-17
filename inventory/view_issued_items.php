
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php 

?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>
<script type="text/javascript" src="../jquery/DT_bootstrap.js"></script>
<script type="text/javascript" src="../jquery/jquery.dataTables.js"></script>
<script type="text/javascript">

function delete_warning(node){
 var x=confirm("Are you sure you want to delete the user from the database?");
 
 if(x == false)  {return false;}
}
 
 function edit_warning(node){
 var x=confirm("Are you sure you want to suspend this user?");
 
 if(x == false)  {return false;}
 }

 
 function activate_warning(node){
 var x=confirm("Are you sure you want to ctivate this suspended user?");
 
 if(x == false)  {return false;}
 
 }
</script>
<body>

<div id="wrapper" class='container'>

<div id="banner" class='row'>
<?php include("../includes/banner.php"); ?>
</div>

<div id="middle" class='row'>
<?php  // start checking for illegal login
if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
 
<div id="welcome">
<?php include("../includes/welcomediv_invent.php"); ?>
</div>

<div id="content">
<div class="col-md-2"> 
<?php require_once'../includes/request_options.php'; ?>
</div>

<div class="col-md-10">
 <div class="table-responsive">
     <div style="background-color:;">
         <form action="" method="POST">
             <i class="date_from" style="color: #111; font-size: 16px;font-style: normal;"><b>Date from</b>:</i>
             <input size="30" name="sdate"  id="sdate" placeholder="select date" readonly="readonly"/>
             <button id="f_btn1"><img src="../images/Calendar.jpg" /></button> 
             <script type="text/javascript">//<![CDATA[
                 Calendar.setup({
                     inputField : "sdate",
                     trigger    : "f_btn1",
                     onSelect   : function() { this.hide() },

                     dateFormat : "%Y-%m-%d"
                 });                    //]]>
             </script>

             <i class="date_to" style="color: #111; font-size: 16px; font-style: normal;"><b>Date to</b>:</i>
             <input size="30" name="tdate"  id="tdate" placeholder="select date" readonly="readonly"/>
             <button id="f_btn2"><img src="../images/Calendar.jpg" /></button> 
             <script type="text/javascript">//<![CDATA[
                 Calendar.setup({
                     inputField : "tdate",
                     trigger    : "f_btn2",
                     onSelect   : function() { this.hide() },

                     dateFormat : "%Y-%m-%d"
                 });                    //]]>
             </script>
             <input type="submit" name="submit" value="Generate a report" class="btn btn-default"/>
         </form>

     </div>
     <table cellpadding="3" cellspacing="3" border="0" class="table  table-bordered" id="example">
         <div class="alert alert-info">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong><i class="icon-user icon-large"></i>&nbsp;Issued items</strong>
             <?php
             if (isset($_POST['submit'])) {
                 $date_to = $_POST['tdate'];
                 $date_from = $_POST['sdate'];
                 ?>
                 <a href="download_requests.php?tdate=<?php echo $date_to?>&sdate=<?php echo $date_from?>" class="btn btn-default btn-small">download excel data</a>
             <?php
             }else{
             ?>
             <a href="download_requests.php" class="btn btn-default btn-small">download excel data</a>
             <?php } ?>
         </div>
         <thead>
         <tr>
             <th>Request Date</th>
             <th>Particular</th>
             <th>Requested Qty</th>
             <th>Requester</th>
             <th>Section</th>
             <th>Issued Qty</th>
             <th>Giver</th>
             <th>Voucher No</th>
             <th>Approved by</th>
             <th class="action">Action</th>
         </tr>
         </thead>
         <tbody>
         <?php
         include("../includes/dbconfig.php");
         if (isset($_POST['submit'])) {
             $date_to = $_POST['tdate'];
             $date_from = $_POST['sdate'];
             $user_query = mysqli_query($dbconnection, "select r.* ,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id WHERE r.dor BETWEEN '$date_from' AND '$date_to'") or die(mysql_error($dbconnection));
         }else {
             $user_query = mysqli_query($dbconnection, "select r.*,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id where r.status='approved'") or die(mysql_error($dbconnection));
         }
         while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
         {
             $id=$row['req_id'];
             ?>
             <tr class="del<?php echo $id ?>">
                 <td>
                     <?php echo $row['dor']; ?>
                 </td>
                 <td>
                     <?php echo $row['product']; ?>
                 </td>
                 <td>
                     <?php echo $row['qty_req']; ?>
                 </td>
                 <td>
                     <?php echo $row['requester']; ?>
                 </td>
                 <td>
                     <?php echo $row['sections']; ?>
                 </td>
                 <td>
                     <?php echo $row['is_qty']; ?>
                 </td>
                 <td>
                     <?php echo $row['giver']; ?>
                 </td>
                 <td>
                     <?php echo $row['voucher']; ?>
                 </td>
                 <td>
                     <?php echo $row['approved']; ?>
                 </td>
                 <td class="action" width="50">
                     <a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_issued_items.php<?php echo '?request='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>Edit</a>
                 </td>
             </tr>
         <?php
         }  ?>

         </tbody>
     </table>

  </div>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>



</body>
</html>