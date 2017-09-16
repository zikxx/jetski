<?php require("head.php") ?>
<div class="col-md-offset-2 col-md-8" id="dashboard">
	<?php
	$sql = "SELECT * FROM activities";
	$query = $dbh->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	?>
	<table class="table">
		<tr>
			<th style="text-align: center;">Activity</th>
			<th style="text-align: center;">Start</th>
			<th style="text-align: center;">End</th>
		</tr>
		<?php foreach ($results as $row) { ?>
			<tr style="text-align: center;">
				<td style="vertical-align: middle;"><?php echo $row['name']; ?></td>
				<td style="vertical-align: middle;"><?php echo $row['start']; ?></td>
				<td style="vertical-align: middle;"><?php echo $row['end']; ?></td>
			</tr>
		<?php } ?>
	</table>
</div>
</div>
</div>
</body>