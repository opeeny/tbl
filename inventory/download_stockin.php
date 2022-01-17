<?php
// The function header by sending raw excel
//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.ms-excel; name='excel'");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=stockin_details.xls");
// Add data table
//include 'stockin_excel.php';
?>
<div style="font-size: 20px;">Showing all the Stocking details</div>
<table  border="1" class="table" id="example">
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
    </tr>
    </thead>
    <tbody>
    <?php
    include("../includes/dbconfig.php");
    if (isset($_GET['date_to'])){
        $date_to    = $_GET['date_to'];
        $date_from  = $_GET['date_from'];
        $user_query = mysqli_query($dbconnection, "select s.*,p.* from stock s INNER JOIN products_list p ON s.product_id=p.item_id WHERE rdate BETWEEN '$date_from' AND '$date_to'") or die(mysql_error($dbconnection));
    }else {
        $user_query = mysqli_query($dbconnection, "select s.*,p.* from stock s INNER JOIN products_list p ON s.product_id=p.item_id") or die(mysqli_error($dbconnection));
    }
    while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
    {
        $id=$row['part_id'];
        ?>
        <tr class="del<?php echo $id ?>">
            <td>
                <?php echo $row['rdate']; ?>
            </td>
            <td>
                <?php echo $row['particular']; ?>
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
                <?php echo $row['qty']; ?>
            </td>
            <td>
                <?php echo $row['exp_date']; ?>
            </td>
            <td>
                <?php echo $row['urate']; ?>
            </td>
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
        </tr>
    <?php
    }
    ?>
</tbody>
</table>
