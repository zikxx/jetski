<?php
include ("head.php");
?>
<div class="col-md-offset-2 col-md-8" style="text-align: center;">
	<h2>Update inventory</h2>
	<br>
<?php
$stmt = $dbh->prepare ( "SELECT * FROM inventory WHERE id=:id" );
$stmt->bindParam ( ':id', $_GET ['q'], PDO::PARAM_INT );
$stmt->execute ();
$results = $stmt->fetchAll ( PDO::FETCH_ASSOC );

$stmt->bindParam ( ':type', $type, PDO::PARAM_STR );
$stmt->bindParam ( ':registration', $registration, PDO::PARAM_STR );
$stmt->bindParam ( ':other', $other, PDO::PARAM_STR );

?>
	<form action="upd_inventory.php" method="POST">
<?php
foreach ( $results as $row ) {
	?>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		<div class="form-group">
			<label>Type:</label><input type="text" class="form-control"
				name="type" value="<?php echo $row['type']; ?>">
		</div>
		<div class="form-group">
			<label>Registration:</label><input name="registration" id="text"
				class="form-control" value="<?php echo $row['registration']; ?>">
		</div>
		<div class="form-group">
			<label>Other:</label><input name="other" id="other"
				class="form-control" value="<?php echo $row['other']; ?>">
		</div>
		<a href="inventory.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button> <?php } ?>
	</form>
</div>
</div>
</div>
</body>
</html>