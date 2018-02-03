<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 03-Feb-18
 * Time: 11:01 AM
 */
include("head.php");
?>
<div class="col-md-offset-3 col-md-6 pages">
	<h2>Add new menu</h2>
	<br>
	<form method="POST" action="functions/addMenu.php">
		<div class="form-group">
			<label>Menu Name:</label>
			<input type="text" class="form-control"
				   name="menuName" required>
		</div>
		<a href="menu.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>