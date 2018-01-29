<?php
require_once("head.php");
$sql = "SELECT * FROM menu";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="functions/addActivity.php" method="POST">
	<div class="col-md-offset-2 col-md-4" style="color:white;">
		<div class="form-group">
			<label>Activity:</label><br>
			<select name="menuId" id="activity" class="form-control" onChange="getSubmenu(this.value);" required>
				<option value=""></option>
				<?php
				foreach ($results as $menu) {
					?>
					<option value="<?php echo $menu["id"]; ?>"><?php echo $menu["menuName"]; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Submenu:</label><br/>
			<select name="submenuId" id="submenu" class="form-control"
					onChange="getSubtask(this.value);getSubmenuPrice(this.value);" required>
				<option value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Subtask:</label><br/>
			<select name="subtaskId" id="subtask" class="form-control" onChange="getSubtaskPrice(this.value);">
				<option value=""></option>
			</select>
		</div>
		<div class="radio">
			<label><input type="radio" value="Member" id="member" name="type" required> Member</label><br>
			<label><input type="radio" value="Customer" id="customer" name="type" required> Customer</label>
		</div>
		<div id="memberForm" class="form-group">
			<?php
			$sql = "SELECT * FROM members ORDER BY firstName";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC); ?>
			<label>Member:</label>
			<select name="memberId" id="memberSelect" class="form-control">
				<option value=""></option>
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['firstName']; ?></option> <?php } ?>
			</select>
		</div>
		<div id="customerForm" class="form-group">
			<h4>Customer:</h4>
			<label>First name:</label><br>
			<input name="firstName" id="firstName" type="text" value="" class="form-control"><br>
			<label>Last name:</label><br>
			<input name="lastName" id="lastName" type="text" value="" class="form-control">
		</div>
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM driversShippers ORDER BY id";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label><input name="driverCheckbox" type="checkbox" id="driver" checked> Driver</label>
			<select name="driverId" id="driverSelect" class="form-control">
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
			<select name="paidPrice" id="paidPrice" class="form-control">
				<option value=""></option>
			</select>
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