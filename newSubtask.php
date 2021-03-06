<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 03-Feb-18
 * Time: 11:08 AM
 */
include("head.php");
$sql = "SELECT sm.id, m.menuName, sm.submenuName FROM jetski.submenu sm
JOIN menu m ON sm.menuId = m.id
WHERE sm.price IS NULL OR sm.price = 0";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-offset-3 col-md-6 pages">
	<h2>Add new subtask</h2>
	<br>
	<form method="POST" action="functions/addSubtask.php">
		<div class="form-group">
			<label>Subtask Name:</label>
			<input type="text" class="form-control"
				   name="subtaskName">
		</div>
		<div class="form-group">
			<label>Price:</label>
			<input type="text" class="form-control"
				   name="price">
		</div>
		<div class="form-group">
			<label>Duration:</label>
			<input type="text" class="form-control"
				   name="duration">
		</div>
		<div class="form-group">
			<label>Parent submenu:</label><br>
			<select name="submenuId" id="menuId" class="form-control" required>
				<?php
				foreach ($results as $menu) {
					?>
					<option value="<?php echo $menu["id"]; ?>">
						<b>MENU:</b> <?php echo $menu["menuName"] . ' | <b>SUBMENU:</b> ' . $menu["submenuName"]; ?>
					</option>
				<?php } ?>
			</select>
		</div>
		<a href="subtask.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>