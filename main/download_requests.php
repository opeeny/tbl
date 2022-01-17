<?php
// The function header by sending raw excel
//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.ms-excel; name='excel'");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=issued_items.xls");
// Add data table
include 'request_excel.php';
?>