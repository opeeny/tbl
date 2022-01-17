<?php
// The function header by sending raw excel
//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.ms-excel; name='excel'");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=summary_of_stock.xls");
// Add data table
include 'sum_stockin_excel.php';
?>