<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8" style="text-align: center;">
	<h2>Update inventory</h2>
	<br>
	<?php
	$stmt = $dbh->prepare("SELECT * FROM activities WHERE id=:id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>
	<form action="includes/cancel.php" id="cancel" method="POST">
		<?php
		foreach ($results as $row) {
			?>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <input
				type="hidden" name="status" value="Canceled">
			<button type="submit" class="btn btn-primary">Submit</button> <?php } ?>
	</form>
</div>
</div>
</div>
</body>
<script type="text/javascript">
    document.getElementById('cancel').submit(); // SUBMIT FORM
</script>
</html>