<?php
require_once("head.php");
$sql = "SELECT * FROM menu";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="add_activity.php" method="POST">
	<div class="col-md-offset-2 col-md-4" style="color:white;">
		<div class="form-group">
			<label>Activity:</label><br>
			<select name="menu_id" id="activity" class="form-control" onChange="getSubmenu(this.value);" required>
				<option value=""></option>
				<?php
				foreach ($results as $menu) {
					?>
					<option value="<?php echo $menu["id"]; ?>"><?php echo $menu["menu_name"]; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Submenu:</label><br/>
			<select name="submenu_id" id="submenu" class="form-control" onChange="getSubtask(this.value);" required>
				<option value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Subtask:</label><br/>
			<select name="subtask_id" id="subtask" class="form-control">
				<option value=""></option>
			</select>
		</div>
		<div class="radio">
			<label><input type="radio" value="Member" id="member" name="type" required> Member</label><br>
			<label><input type="radio" value="Customer" id="customer" name="type" required> Customer</label>
		</div>
		<div id="member_form" class="form-group">
			<?php
			$sql = "SELECT * FROM members ORDER BY first_name";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC); ?>
			<label>Member:</label>
			<select name="member_id" id="member_select" class="form-control">
				<option value=""></option>
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></option> <?php } ?>
			</select>
		</div>
		<div id="customer_form" class="form-group">
			<h4>Customer:</h4>
			<label>First name:</label><br>
			<input name="first_name" id="first_name" type="text" value="" class="form-control"><br>
			<label>Last name:</label><br>
			<input name="last_name" id="last_name" type="text" value="" class="form-control">
		</div>
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM drivers_shippers ORDER BY id";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label><input name="driver_checkbox" type="checkbox" id="driver" checked> Driver</label>
			<select name="driver_id" id="driver_select" class="form-control">
				<option value=""></option>
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
	</div>
	<div class="col-md-offset-1 col-md-4" style="color:white;">
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM price";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label>Pricing:</label>
			<select name="price" class="form-control">
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM payment";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label>Payment:</label>
			<select name="payment" class="form-control">
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Price:</label><br>
			<input name="paid_price" type="number" class="form-control" required>
		</div>
		<div class="form-group">
			<label><input type="checkbox" name="paid" id="paid" checked> Paid</label>
		</div>
		<div class="input-group date form_datetime" data-link-field="dtp_input1">
			<input name="start" class="form-control" type="text" value="" readonly>
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
		<br>
		<a href="index.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-info">Submit</button>
</form>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        weekStart: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        format: 'yyyy-mm-dd hh:ii:00',
        pickerPosition: 'top-left',
        startDate: '+0d',
        minuteStep: 5
    });
</script>
</body>
</html>