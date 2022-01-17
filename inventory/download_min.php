<?php
// The function header by sending raw excel
//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.ms-excel; name='excel'");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=minimum_stock.xls");
// Add data table
//include 'mini_excel.php';
?>
<div style="font-size: 20px;">Showing items that have reached their minimum stock level</div>
<table cellpadding="0" cellspacing="0" border="1" class="table  table-bordered " id="example">
    <thead>
    <tr>
        <th>S/N</th>
        <th>Particular</th>
        <th>Quantity In Stock</th>
        <th>Minimum Stock</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include("../includes/dbconfig.php");
    $i =0;
    $user_query=mysqli_query($dbconnection,"select s.*,p.* from stock_sum s INNER JOIN products_list p ON s.product_id=p.item_id WHERE p.minimum>=s.qty_bal")or die(mysql_error());
    while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
    {
        $i++;
        $id      =$row['stock_id'];
        $part    =$row['particular'];
        $balance =$row['qty_bal'];
        ?>
        <tr class="del<?php echo $id ?>">
            <td>
                <?php echo $i; ?>
            </td>
            <td>
                <?php echo $row['product']; ?>
            </td>
            <td>
                <?php echo number_format($row['qty']).' '.$row['measures']; ?>
            </td>
            <td>
                <?php echo $row['minimum']; ?>
            </td>
        </tr>
    <?php
    }  ?>
    </tbody>
</table>