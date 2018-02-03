<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02-Feb-18
 * Time: 11:06 PM
 */
require_once("head.php");
$sql = "SELECT * FROM menu";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-offset-2 col-md-8">
	<div style="text-align: center;">
		<a href="newMenu.php" class="btn btn-success">Add new menu</a>
	</div>
	<table class="table" style="color: white;text-align: center;">
		<h2 align="center">Update / Delete Menu</h2>
		<br>
		<tr style="font-size: 17px;">
			<th style="text-align: center;">Menu name</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		foreach ($results as $row) {
			$update = "<a href='updateMenu.php?q=" . $row ['id'] . "' class='btn btn-info'>Update</a>";
			$delete = "<a onClick=\"javascript: return confirm('Are you sure to want to delete?');\" 
			href='functions/deleteMenu.php?q=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
			echo "<tr><td>" . $row ['menuName'] . "</td>";
			echo "<td>" . $update . "</td>";
			echo "<td>" . $delete . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</div>