<?php
	$con = pg_connect("host=localhost dbname=ty1 port=5432 user=postgres")or die("not connected");

	$tno = $_GET['tno'];
	$sql = "select * from teacher where tno=$tno";
	$result = pg_query($con,$sql);
	$row = pg_fetch_row($result);
?>
<table border=1>
<tr>
	<td><b>Teacher No:</b></td><td><?php echo $row[0]?></td>
</tr>
<tr>
	<td><b>Name:</b></td><td><?php echo $row[1]?></td>
</tr>
<tr>
	<td><b>Subject:</b></td><td><?php echo $row[2]?></td>
</tr>
<tr>
	<td><b>Research Area:</b></td><td><?php echo $row[3]?></td>
</tr>
</table>
