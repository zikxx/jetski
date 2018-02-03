<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 03-Feb-18
 * Time: 11:02 AM
 */
include("head.php");
$sql = "SELECT * FROM menu";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-offset-3 col-md-6 pages">
	<h2>Add new submenu</h2>
	<br>
	<form method="POST" action="functions/addSubmenu.php">
		<div class="form-group">
			<label>Submenu Name:</label>
			<input type="text" class="form-control"
				   name="submenuName" required>
		</div>
		<div class="form-group">
			<label>Price:</label>
			<input type="number" class="form-control"
				   name="price">
		</div>
		<div class="form-group">
			<label>Duration (minutes):</label>
			<input type="number" class="form-control"
				   name="duration">
		</div>
		<div class="form-group">
			<label>Parent menu:</label><br>
			<select name="menuId" id="menuId" class="form-control" required>
				<?php
				foreach ($results as $menu) {
					?>
					<option value="<?php echo $menu["id"]; ?>"><?php echo $menu["menuName"]; ?></option>
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