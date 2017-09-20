<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8" style="text-align: center;">
	<h2>Update driver</h2>
	<br>
	<?php
	$stmt = $dbh->prepare("SELECT * FROM drivers_shippers WHERE id=:id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
	$stmt->bindParam(':other', $other, PDO::PARAM_STR);
	?>
	<form action="upd_driver.php" method="POST">
		<?php
		foreach ($results as $row) {
			?>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
				<label>Name:</label><input type="text" class="form-control"
										   name="name" value="<?php echo $row['name']; ?>">
			</div>
			<div class="form-group">
				<label>Phone:</label><input name="phone" id="text"
											class="form-control" value="<?php echo $row['phone']; ?>">
			</div>
			<div class="form-group">
				<label>Other:</label><input name="other" id="other"
											class="form-control" value="<?php echo $row['other']; ?>">
			</div>
			<a href="driver.php" class="btn btn-default">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button> <?php } ?>
	</form>
</div>
</div>
</div>
</body>
</html>