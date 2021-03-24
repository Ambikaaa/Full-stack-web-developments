<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=genexceltest.xls");
echo 'identify the relationship';
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ambika');
$q="select * from anstable";
$rs=mysqli_query($con,$q);
 ?>
 <br>
 
 <table style="width:100%" border='1'>
  <tr>
    <th>Col1</th>
    <th>Col2</th> 
    <th>Col3</th>
	<th>Col4</th>
    <th>Col5</th> 
    <th>Col6</th>

  </tr>
  <?php
  while($r=mysqli_fetch_array($rs))
  {
  ?>
  <tr>
    <td><?php echo $r[1];?></td>
    <td><?php echo $r[2];?></td> 
    <td><?php echo $r[3];?></td>
	<td><?php echo $r[4];?></td>
    <td><?php echo $r[5];?></td> 
    <td><?php echo $r[6];?></td>
  </tr>

<?php
}
?>
</table>