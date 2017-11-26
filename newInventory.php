<?php
include("head.php");
?>
<div class="col-md-offset-2 col-md-8 pages">
	<h2>Add new inventory</h2>
	<br>
	<form method="POST" action="functions/addInventory.php">
		<div class="form-group">
			<label>Type:</label><input type="text" class="form-control"
									   name="type">
		</div>
		<div class="form-group">
			<label>Registration:</label><input name="registration" id="text"
											   class="form-control">
		</div>
		<div class="form-group">
			<label>Other:</label><input name="other" id="other"
										class="form-control">
		</div>
		<a href="inventory.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>