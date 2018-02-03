<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02-Feb-18
 * Time: 11:29 PM
 */
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<h2>Update submenu</h2>
	<br>
	<?php
	$stmt = $conn->prepare("SELECT * FROM menu WHERE id=:id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	?>
	<form action="functions/updMenu.php" method="POST">
		<?php
		foreach ($results as $row) { ?>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
			<label>Menu name:</label>
			<input type="text" class="form-control"
				   name="name" value="<?php echo $row['menuName']; ?>">
			</div><?php } ?>
		<a href="menu.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>