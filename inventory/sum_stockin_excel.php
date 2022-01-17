<div style="font-size: 20px; text-align: center;">
    Showing all items in store
</div>
<table cellpadding="0" cellspacing="0" border="1" class="table  table-bordere">
    <thead>
    <tr>
        <th>S/N</th>
        <th>Particular</th>
        <th>Quantity In Stock</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include("../includes/dbconfig.php");
    $i =0;
    $user_query=mysqli_query($dbconnection,"select * from stock_sum")or die(mysql_error());
    while($row=mysqli_fetch_array($user_query,MYSQLI_ASSOC))
    {
        $i++;
        $id     =$row['stock_id'];
        $part   =$row['particular'];
        ?>
        <tr class="del<?php echo $id ?>">
            <td>
                <?php echo $i; ?>
            </td>
            <td>
                <?php echo $row['particular']; ?>
            </td>
            <td>
                <?php echo number_format($row['qty_bal']).' '.$row['Units']; ?>
            </td>
        </tr>
    <?php
    }  ?>
    </tbody>
</table>