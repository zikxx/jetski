<?php
include("head.php");
$name = filter_var($_POST ['name'], FILTER_SANITIZE_STRING);
$submenu = filter_var($_POST ['submenu'], FILTER_SANITIZE_STRING);
?>
<div class="col-md-offset-2 col-md-8" style="text-align: center;">
	<h2>Add new activity</h2>
	<br>
	<form method="POST" action="add_activity.php">
		<div class="form-group">
			<label>Activity:</label> <input name="name" class="form-control"
											size="16" type="text" value="<?php echo $name; ?>">
		</div>
		<div class="form-group">
			<label>Type:</label> <input name="submenu" class="form-control"
										size="16" type="text" value="<?php echo $submenu; ?>">
		</div>
		<div class="form-group">
			<label>Class:</label> <input name="subtask" class="form-control"
										 size="16" type="text">
		</div>
		<div class="form-group">
			<label>Pricing:</label> <input name="start" class="form-control"
										   size="16" type="text">
		</div>
		<div class="form-group">
			<label>Payment:</label> <input name="start" class="form-control"
										   size="16" type="text">
		</div>
		<label>Start:</label> <input name="start" class="form-control"
									 size="16" type="text" value="" placeholder="YYYY-MM-DD HH:MM"> <label>End:</label>
		<input name="end" class="form-control" size="16" type="text" value=""
			   placeholder="YYYY-MM-DD HH:MM">
		<div class="form-group">
			<label>Price:</label><input name="paid_price" class="form-control">
		</div>
		<a href="index.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>