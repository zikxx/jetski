<?php
include ("head.php");
?>
<div class="col-md-offset-2 col-md-8" style="text-align: center;">
	<h2>Add new driver</h2>
	<br>
	<form method="POST" action="add_driver.php">
		<div class="form-group">
			<label>Name:</label><input type="text" class="form-control"
				name="name">
		</div>
		<div class="form-group">
			<label>Phone:</label><input name="phone" id="text"
				class="form-control">
		</div>
		<div class="form-group">
			<label>Other:</label><input name="other" id="other"
				class="form-control">
		</div>
		<a href="driver.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>