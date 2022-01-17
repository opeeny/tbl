<!DOCTYPE html>
<html>
<body><?php 
$lastedittime=date('Y-m-d H:i', time());
$currentyear=date('Y',time());
$currentmonth=date('m',time());
$currentday=date('d',time());

?>
<table border="0"><tr>
<td>Date</td>
<td>
<select>
<?php
$i=$currentday;
while ($i >= 1) { ?>
<option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
  <?php
   $i--;
}
?>
  </select>
  </td>
  <td>Month</td>
  <td>
  <select>
<?php
$i=$currentmonth;
while ($i >= 1) { ?>
<option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
  <?php
   $i--;
}
?>
  </select>
  </td>
  <td>Year</td>
  <td>
  <select>
<?php
$i=$currentyear;
while ($i >=1967) { ?>
<option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
  <?php
   $i--;
}
?>
  </select>
  </td>
  </tr>
</table>


</body>
</html>

