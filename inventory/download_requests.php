<?php
// The function header by sending raw excel
//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.ms-excel; name='excel'");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=issued_items.xls");
?>
<div style="font-size: 20px; text-align: center;">
    Showing all issued items
</div>
<table cellpadding="0" cellspacing="0" border="1" class="table  table-bordered">
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
    </tr>
    </thead>
    <tbody>
    <?php
    include("../includes/dbconfig.php");
    if (isset($_GET['sdate'])) {
        $date_to    = $_GET['tdate'];
        $date_from  = $_GET['sdate'];
        $user_query = mysqli_query($dbconnection, "select r.*,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id WHERE dor BETWEEN '$date_from' AND '$date_to'") or die(mysql_error($dbconnection));
    }else {
        $user_query = mysqli_query($dbconnection, "select r.*,p.* from requests r INNER JOIN products_list p ON r.product_id=p.item_id where status='approved'") or die(mysql_error($dbconnection));
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
                <?php echo $row['qty_req'].' '.$row['measures']; ?>
            </td>
            <td>
                <?php echo $row['requester']; ?>
            </td>
            <td>
                <?php echo $row['sections']; ?>
            </td>
            <td>
                <?php echo $row['is_qty'].' '.$row['measures']; ?>
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
        </tr>
    <?php
    }  ?>

    </tbody>
</table>