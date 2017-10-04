<?php
session_start();
date_default_timezone_set("Asia/Nicosia");
require_once '../dbconfig.php';
if (!isset ($_SESSION ['id'])) {
	echo 'You are not logged in!';
	header('refresh: 0.3; login.php');
} ?>
<div class="col-md-4 col-md-offset-4">
	<br>
	<label><input type="checkbox" ng-model="member"> Member</label>
	<?php
	$sql = "SELECT * FROM members ORDER BY first_name";
	$query = $conn->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC); ?>
	<select ng-show="member" name="menu" class="form-control">
		<?php foreach ($results as $row) { ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></option> <?php } ?>
	</select><br><br>
	<?php
	$sql = "SELECT * FROM drivers_shippers ORDER BY id";
	$query = $conn->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	?>
	<label><input type="checkbox" ng-model="driver"> Driver</label>
	<select ng-show="driver" name="menu" class="form-control">
		<?php foreach ($results as $row) { ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
	</select><br><br>
	<div ng-hide="member">
		<h4>Customer:</h4>
		<label>First name:</label><br>
		<input type="text" class="form-control"><br><br>
		<label>Last name:</label><br>
		<input type="text" class="form-control">
	</div>
</div>