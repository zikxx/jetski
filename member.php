<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<?php
	$sql = "SELECT * FROM members ORDER BY id";
	$query = $conn->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	?>
	<a href="new_member.php" class="btn btn-default">Add new member</a><br>
	<table class="table">
		<h2>Members list</h2>
		<tr style="font-size: 17px;">
			<th style="text-align: center;">Name</th>
			<th style="text-align: center;">Phone</th>
			<th style="text-align: center;">Size</th>
			<th style="text-align: center;">Gender</th>
			<th style="text-align: center;">Shoe size</th>
			<th style="text-align: center;">Other</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		foreach ($results as $row) {
			$update = "<a href='update_member.php?q=" . $row ['id'] . "' class='btn btn-info'>Update</a>";
			$delete = "<a href='delete_member.php?q=" . $row ['id'] . "' class='btn btn-danger'>Delete</a>";
			echo "<tr><td>" . $row ['first_name'] . "</td>";
			echo "<td>" . $row ['phone'] . "</td>";
			echo "<td>" . $row ['size'] . "</td>";
			echo "<td>" . $row ['gender'] . "</td>";
			echo "<td>" . $row ['shoe_size'] . "</td>";
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
</div>
</body>
</html>
