<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 30-Jan-18
 * Time: 11:39 PM
 */
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<h2>Update subtask</h2>
	<br>
	<?php
	$sql = "SELECT sm.id, m.menuName, sm.submenuName FROM jetski.submenu sm
JOIN menu m ON sm.menuId = m.id
WHERE sm.price IS NULL OR sm.price = 0";
	$query = $conn->prepare($sql);
	$query->execute();
	$submenu = $query->fetchAll(PDO::FETCH_ASSOC);
	$stmt = $conn->prepare("SELECT * FROM subtask WHERE id=:id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
	$stmt->bindParam(':other', $other, PDO::PARAM_STR);
	?>
	<form action="functions/updSubtask.php" method="POST">
		<?php
		foreach ($results as $row) {
			?>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
				<label>Subtask name:</label><input type="text" class="form-control"
												   name="subtaskName" value="<?php echo $row['subtaskName']; ?>">
			</div>
			<div class="form-group">
				<label>Price:</label><input name="price" id="price"
											class="form-control" value="<?php echo $row['price']; ?>">
			</div>
			<div class="form-group">
				<label>Duration:</label><input name="duration" id="duration"
											   class="form-control" value="<?php echo $row['duration']; ?>">
			</div>
		<?php } ?>
		<div class="form-group">
			<label>Parent submenu:</label><br>
			<select name="submenuId" id="menuId" class="form-control" required>
				<?php
				foreach ($submenu as $menu) {
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