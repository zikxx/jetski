<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 30-Jan-18
 * Time: 11:09 PM
 */
require_once("head.php");
$sql = "SELECT m.menuName, sm.submenuName, sm.price, sm.duration, sm.id FROM submenu sm 
JOIN menu m ON sm.menuId = m.id";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-offset-1 col-md-10">
	<div style="text-align: center;">
		<a href="newSubmenu.php" class="btn btn-success">Add new Submenu</a>
	</div>
	<table class="table" style="color: white;text-align: center;">
		<h2 align="center">Update / Delete Submenu</h2>
		<br>
		<tr style="font-size: 17px;">
			<th style="text-align: center;">Menu</th>
			<th style="text-align: center;">Submenu</th>
			<th style="text-align: center;">Price</th>
			<th style="text-align: center;">Duration</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		foreach ($results as $row) {
			$update = "<a href='updateSubmenu.php?q=" . $row ['id'] . "' class='btn btn-info'>Update</a>";
			$delete = "<a onClick=\"javascript: return confirm('Are you sure to want to delete?');\" 
			href='functions/deleteSubmenu.php?q=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
			echo "<tr><td>" . $row ['menuName'] . "</td>";
			echo "<td>" . $row ['submenuName'] . "</td>";
			echo "<td>" . $row ['price'] . "</td>";
			echo "<td>" . $row ['duration'] . "</td>";
			echo "<td>" . $update . "</td>";
			echo "<td>" . $delete . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</div>