<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<?php
	$sql = "SELECT * FROM driversShippers ORDER BY id";
	$query = $conn->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	?>
	<a href="newDriver.php" class="btn btn-default">Add new driver</a><br>
	<table class="table">
		<h2>Drivers list</h2>
		<tr style="font-size: 17px;">
			<th style="text-align: center;">Name</th>
			<th style="text-align: center;">Phone</th>
			<th style="text-align: center;">Other</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		foreach ($results as $row) {
			$update = "<a href='updateDriver.php?q=" . $row ['id'] . "' class='btn btn-info'>Update</a>";
			$delete = "<a href='functions/deleteDriver.php?q=" . $row ['id'] . "' class='btn btn-danger'>Delete</a>";
			echo "<tr><td>" . $row ['name'] . "</td>";
			echo "<td>" . $row ['phone'] . "</td>";
			echo "<td>" . $row ['other'] . "</td>";
			echo "<td>" . $update . "</td>";
			echo "<td>" . $delete . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</div>
</div>
</div>
</body>
</html>