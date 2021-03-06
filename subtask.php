<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 30-Jan-18
 * Time: 11:27 PM
 */
require_once("head.php");
$sql = "SELECT m.menuName, sm.submenuName, st.subtaskName, st.price, st.duration, st.id FROM subtask st 
JOIN submenu sm ON sm.id = st.submenuId
JOIN menu m ON m.id = sm.menuId";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-offset-1 col-md-10">
	<div style="text-align: center;">
		<a href="newSubtask.php" class="btn btn-success">Add new Subtask</a>
	</div>
	<table class="table" style="color: white;text-align: center;">
		<h2 align="center">Update / Delete Subtask</h2>
		<br>
		<tr style="font-size: 17px;">
			<th style="text-align: center;">Menu</th>
			<th style="text-align: center;">Submenu</th>
			<th style="text-align: center;">Subtask</th>
			<th style="text-align: center;">Price</th>
			<th style="text-align: center;">Duration</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		foreach ($results as $row) {
			$update = "<a href='updateSubtask.php?q=" . $row ['id'] . "' class='btn btn-info'>Update</a>";
			$delete = "<a onClick=\"javascript: return confirm('Are you sure to want to delete?');\" 
			href='functions/deleteSubtask.php?q=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
			echo "<tr><td>" . $row ['menuName'] . "</td>";
			echo "<td>" . $row ['submenuName'] . "</td>";
			echo "<td>" . $row ['subtaskName'] . "</td>";
			echo "<td>" . $row ['price'] . "</td>";
			echo "<td>" . $row ['duration'] . "</td>";
			echo "<td>" . $update . "</td>";
			echo "<td>" . $delete . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</div>