<code></code><?php
	include('db.php');


	$sql = mysql_query("SELECT * FROM jamb_record ");

	?>
	<table>
			<tr>
				<th>S/N.</th>
				<th>JAMB REG. NO.</th>
				<th>MODE OF ENTRY</th>
				<th>SCORE</th>
				<th>NO OF SITTING</th>
				<th>POINT</th>
				<th></th>
			</tr>
	<?php
	$sn = 1;
	while ($row = mysql_fetch_assoc($sql)) {
			?>
	<tr>
			<td><?php echo $sn;?></td>
			<td><?php echo $row['jamb_no'];?></td>
			<td><?php echo $row['mode'];?></td>
			<td><?php echo $row['score'];?></td>
			<td><?php echo $row['olevelSitting'];?></td>
			<td><?php echo $row['point'];?></td>
			<td><a href="view.php?jamb=<?php echo $row['id'];?>">Details</a></td>
	</tr>
		<?php
		$sn++;
	} 
?>
	</table>