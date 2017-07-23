<?php
include ("head.php");
?>
<div class="col-md-offset-2 col-md-8" style="text-align: center;">
	<h2>Add new member</h2>
	<br>
	<form method="POST" action="add_member.php">
		<div class="form-group">
			<label>Name:</label><input type="text" class="form-control"
				name="first_name" required>
		</div>
		<div class="form-group">
			<label>Last name:</label><input name="last_name" id="text"
				class="form-control" required>
		</div>
		<div class="form-group">
			<label>Phone:</label><input type="text" class="form-control"
				name="phone" required>
		</div>
		<div class="form-group">
			<label>Size:</label><input name="size" id="text" class="form-control"
				required>
		</div>
		<div class="form-group">
			<label>Gender:</label><input type="text" class="form-control"
				name="gender" required>
		</div>
		<div class="form-group">
			<label>Shoe size:</label><input name="shoe_size" id="other"
				class="form-control" required>
		</div>
		<div class="form-group">
			<label>Weight:</label><input name="weight" id="other"
				class="form-control" required>
		</div>
		<div class="form-group">
			<label>Age:</label><input name="age" id="other" class="form-control"
				required>
		</div>
		<div class="form-group">
			<label>Status:</label><input name="status" id="other"
				class="form-control" required>
		</div>
		<div class="form-group">
			<label>Emergency contact:</label><input name="emergency_contact"
				id="other" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Address:</label><input name="address" id="other"
				class="form-control" required>
		</div>
		<div class="form-group">
			<label>Email:</label><input name="email" id="other"
				class="form-control">
		</div>
		<div class="form-group">
			<label>Storage 1:</label><input name="storage_1" id="other"
				class="form-control">
		</div>
		<div class="form-group">
			<label>Storage 2:</label><input name="storage_2" id="other"
				class="form-control">
		</div>
		<div class="form-group">
			<label>Storage 3:</label><input name="storage_3" id="other"
				class="form-control">
		</div>
		<div class="form-group">
			<label>Other:</label><input name="other" id="other"
				class="form-control">
		</div>
		<div class="form-group">
			<label>Prepaid:</label><input name="prepaid" id="other"
				class="form-control" required>
		</div>
		<a href="member.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>