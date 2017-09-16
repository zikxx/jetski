<?php
session_start ();
date_default_timezone_set ( "Asia/Nicosia" );
require_once '../dbconfig.php';
if (! isset ( $_SESSION ['id'] )) {
	echo 'You are not logged in!';
	header ( 'refresh: 0.3; login.php' ); }?>
<?php
$sql = "SELECT * FROM price";
$query = $dbh->prepare ( $sql );
$query->execute ();
$results = $query->fetchAll ( PDO::FETCH_ASSOC );
?>
<div class="col-md-4 col-md-offset-4">
<br>
<label style='color:white;'>Price:</label>
<select name="menu" class="form-control">
<?php foreach($results as $row) { ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
</select><br>

<?php
$sql = "SELECT * FROM payment";
$query = $dbh->prepare ( $sql );
$query->execute ();
$results = $query->fetchAll ( PDO::FETCH_ASSOC );
?>
<label style='color:white;'>Payment:</label>      
<select name="menu" class="form-control">
<?php foreach($results as $row) { ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
</select><br>
<label style='color:white;'>Price:</label><br>
<input type="number" class="form-control"></div>