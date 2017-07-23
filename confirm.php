<br>
<div class="form-group">
	<label>Price:</label>
<?php

$sql = "SELECT * FROM price";
$query = $dbh->prepare ( $sql );
$query->execute ();
$results = $query->fetchAll ( PDO::FETCH_ASSOC );
?>      
<select name="price" class="col-md-offset-1 col-md-10">
<?php foreach($results as $row) { ?>
<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
</select>
</div>
<br>
<div class="form-group">
	<label>Payment:</label>
<?php

$sql = "SELECT * FROM payment";
$query = $dbh->prepare ( $sql );
$query->execute ();
$results = $query->fetchAll ( PDO::FETCH_ASSOC );
?>      
<select name="payment" class="col-md-offset-1 col-md-10">
<?php foreach($results as $row) { ?>
<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
</select>
</div>
<br>
<div class="form-group">
	<label>Start date:</label><input type="text" id="start" name="start"
		value="<?php echo date("Y-m-d H:i:00");?>"
		class="col-md-offset-1 col-md-10" placeholder="YYYY-MM-DD HH:MM"
		required>
</div>
<br>
<div class="form-group">
	<label>End date:</label><input type="text" id="end" name="end"
		value="<?php echo date("Y-m-d H:i:00");?>"
		class="col-md-offset-1 col-md-10" placeholder="YYYY-MM-DD HH:MM"
		required>
</div>
<br>
<div class="form-group">
	<label>Price:</label><input type="text" id="price" name="paid_price"
		value="" class="col-md-offset-1 col-md-10" required>
</div>
<br>
<br>
<button type="submit" class="btn btn-primary">Confirm</button>
</form>
</li>
</ul>