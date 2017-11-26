<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<?php
	$sql = "SELECT * FROM inventory ORDER BY id";
	$query = $conn->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	?>
	<a href="newInventory.php" class="btn btn-default">Add new inventory</a><br>
	<table class="table">
		<h2>Inventory list</h2>
		<tr style="font-size: 17px;">
			<th style="text-align: center;">Type</th>
			<th style="text-align: center;">Registration</th>
			<th style="text-align: center;">Other</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		foreach ($results as $row) {
			$update = "<a href='updateInventory.php?q=" . $row ['id'] . "' class='btn btn-info'>Update</a>";
			$delete = "<a href='functions/deleteInventory.php?q=" . $row ['id'] . "' class='btn btn-danger'>Delete</a>";
			echo "<tr><td>" . $row ['type'] . "</td>";
			echo "<td>" . $row ['registration'] . "</td>";
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