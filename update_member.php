<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<h2>Update member</h2>
	<br>
	<?php
	$stmt = $conn->prepare("SELECT * FROM members WHERE id=:id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>
	<form action="upd_member.php" method="POST">
		<?php
		foreach ($results as $row) {
			?>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
				<label>Name:</label><input type="text" class="form-control"
										   name="first_name" value="<?php echo $row['first_name']; ?>">
			</div>
			<div class="form-group">
				<label>Phone:</label><input name="phone" id="text"
											class="form-control" value="<?php echo $row['phone']; ?>">
			</div>
			<div class="form-group">
				<label>Size:</label><input type="text" class="form-control"
										   name="size" value="<?php echo $row['size']; ?>">
			</div>
			<div class="form-group">
				<label>Gender:</label><input name="gender" id="text"
											 class="form-control" value="<?php echo $row['gender']; ?>">
			</div>
			<div class="form-group">
				<label>Shoe size:</label><input type="text" class="form-control"
												name="shoe_size" value="<?php echo $row['shoe_size']; ?>">
			</div>
			<div class="form-group">
				<label>Other:</label><input name="other" id="other"
											class="form-control" value="<?php echo $row['other']; ?>">
			</div>
			<a href="member.php" class="btn btn-default">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button> <?php } ?>
	</form>
</div>
</div>
</div>
</body>
</html>