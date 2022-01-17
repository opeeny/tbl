<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php

?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_bootstrap_content.php"); ?>
<?php include("../includes/header_content.php"); ?>
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
<?php require_once'../includes/stock_options.php'; ?>
</div>
<div class="col-md-10"> 
<?php
include("../includes/dbconfig.php");
if (isset($_POST['submit'])){
    $date_to    = $_POST['tdate'];
    $date_from  = $_POST['sdate'];
    $user_query = mysqli_query($dbconnection, "select s.*,p.* from stock s INNER JOIN products_list p ON s.product_id=p.item_id WHERE rdate BETWEEN '$date_from' AND '$date_to'") or die(mysql_error($dbconnection));
}else {
    $user_query = mysqli_query($dbconnection, "select s.*,p.* from stock s INNER JOIN products_list p ON s.product_id=p.item_id") or die(mysqli_error($dbconnection));
}
  $display="Displaying System Users";
  $num_rows=mysqli_num_rows($user_query);
  if($num_rows>0)
  { ?>
 <div class="table-responsive">
<table  border="1" class="table" id="example">
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Stockin details</strong>
    </div>
    <div style="background-color:;">
        <form action="" method="POST">
            <i class="date_from" style="color: #111; font-size: 16px;font-style: normal;"><b>Date from</b>:</i>
            <input size="20" name="sdate"  id="sdate" placeholder="select date" readonly="readonly"/>
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
            <input size="20" name="tdate"  id="tdate" placeholder="select date" readonly="readonly"/>
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
            <?php
            if (isset($_POST['submit'])){ ?>
                <a href="download_stockin.php?date_from=<?php echo $date_from?>&date_to=<?php echo $date_to?>" class="btn btn-info btn-small">Download excel file</a>
            <?php }else{
            ?>
            <a href="download_stockin.php?" class="btn btn-info btn-small">Download excel file</a>
            <?php } ?>
        </form>
    </div>
    <br/>
    <thead>
        <tr style="background-color: #ddd;">
            <th>Receipt Date</th>
            <th>Particular</th>
            <th>Supplier</th>
            <th>Del Note</th>
            <th>Invoice No</th>
            <th>Batch No</th>
            <th>Qty</th>
            <th>Exp date</th>
            <th>Unit Rate</th>
            <th>Cost</th>
            <th>Proc by</th>
            <th>Verified</th>
            <th>Ver Date</th>
            <th>Ver Desgn</th>
            <th>Received by</th>
            <th>Rec date</th>
            <th>Rec desgn</th>
        	<th class="action">Action</th>
        </tr>
    </thead>
    <tbody>
   <?php
	while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
    {
        $id=$row['part_id'];
        ?>
        <tr class="del<?php echo $id ?>">
            <td>
                <?php echo $row['rdate']; ?>
            </td>
            <td>
                <?php echo $row['product']; ?>
            </td>
            <td>
                <?php echo $row['supplier']; ?>
            </td>
            <td>
                <?php echo $row['del_note_no']; ?>
            </td>
            <td>
                <?php echo $row['invoice_no']; ?>
            </td>
            <td>
                <?php echo $row['lot']; ?>
            </td>
            <td>
                <?php $qty=$row['qty'];
				echo $qty;
				 ?>
            </td>
            <td>
                <?php echo $row['exp_date']; ?>
            </td>
            <td>
                <?php echo $row['measures']; ?>
            </td>
            <td>
                <?php $cost_unit=$row['cost_unit'];
				if ($cost_unit==''){echo '';} else {echo number_format($cost_unit);}
				 ?>
            </td>
            <td>
                <?php echo $row['procured']; ?>
            </td>
            <td>
                <?php echo $row['verified']; ?>
            </td>
            <td>
                <?php echo $row['ver_date']; ?>
            </td>
            <td>
                <?php echo $row['ver_des']; ?>
            </td>
            <td>
                <?php echo $row['received']; ?>
            </td>
            <td>
                <?php echo $row['rec_date']; ?>
            </td>
            <td>
                <?php echo $row['rec_des']; ?>
            </td>
            <td class="action" width="50">
                <a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_new_stockin.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>Edit</a>
            </td>
        </tr>
	<?php
	}
	?>
    </tbody>
</table>
   <?php }  ?>
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