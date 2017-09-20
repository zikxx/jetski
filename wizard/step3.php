<?php
session_start();
date_default_timezone_set("Asia/Nicosia");
require_once '../dbconfig.php';
if (!isset ($_SESSION ['id'])) {
	echo 'You are not logged in!';
	header('refresh: 0.3; login.php');
} ?>
<?php
$sql = "SELECT * FROM price";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-4 col-md-offset-4">
	<br>
	<label>Price:</label>
	<select name="menu" class="form-control">
		<?php foreach ($results as $row) { ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
	</select><br>
	<?php
	$sql = "SELECT * FROM payment";
	$query = $dbh->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	?>
	<label>Payment:</label>
	<select name="menu" class="form-control">
		<?php foreach ($results as $row) { ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
	</select><br>
	<label>Price:</label><br>
	<input type="number" class="form-control">
	<div>
		<label>Start date:</label><br>
		<input class="form-control" moment-picker="ctrl.dateFormatted" ng-model="ctrl.momentDate" format="YYYY-MM-DD HH:mm:00">
	</div>
</div>