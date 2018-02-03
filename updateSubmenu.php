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
	<h2>Update submenu</h2>
	<br>
	<?php
	$sql = "SELECT * FROM menu";
	$query = $conn->prepare($sql);
	$query->execute();
	$menu = $query->fetchAll(PDO::FETCH_ASSOC);
	$stmt = $conn->prepare("SELECT * FROM submenu WHERE id=:id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->bindParam(':submenuName', $submenuName, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':duration', $duration, PDO::PARAM_STR);
	?>
	<form action="functions/updSubmenu.php" method="POST">
		<?php
		foreach ($results as $row) {
			?>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
				<label>Submenu name:</label><input type="text" class="form-control"
												   name="submenuName" value="<?php echo $row['submenuName']; ?>" required>
			</div>
			<div class="form-group">
				<label>Price:</label><input name="price" id="price"
											class="form-control" value="<?php echo $row['price']; ?>">
			</div>
			<div class="form-group">
			<label>Duration:</label><input name="duration" id="duration"
										   class="form-control" value="<?php echo $row['duration']; ?>">
			</div><?php } ?>
		<div class="form-group">
			<label>Parent menu:</label><br>
			<select name="menuId" id="menuId" class="form-control" required>
				<?php
				foreach ($menu as $row) {
					?>
					<option value="<?php echo $row["id"]; ?>">
						<?php echo $row["menuName"]; ?>
					</option>
				<?php } ?>
			</select>
		</div>
		<a href="submenu.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>