<?php
require_once("head.php");
$sql = "SELECT * FROM menu";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="activity/add_activity.php" method="POST">
	<div class="col-md-offset-2 col-md-4" style="color:white;">
		<div class="form-group">
			<label>Activity:</label><br>
			<select name="name" id="activity" class="form-control" onChange="getSubmenu(this.value);">
				<option value=""></option>
				<?php
				foreach ($results as $country) {
					?>
					<option value="<?php echo $country["id"]; ?>"><?php echo $country["menu_name"]; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Submenu:</label><br/>
			<select name="submenu" id="submenu" class="form-control" onChange="getSubtask(this.value);">
				<option value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Subtask:</label><br/>
			<select name="subtask" id="subtask" class="form-control" onChange="getInflatable(this.value);">
				<option value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Inflatables:</label><br/>
			<select name="inflatables" id="inflatables" class="form-control";">
				<option value=""></option>
			</select>
		</div>
		<div class="radio">
			<label><input type="radio" value="member" id="member" name="type" required> Member</label><br>
			<label><input type="radio" value="customer" id="customer" name="type" required> Customer</label>
		</div>
		<div id="member_form" class="form-group">
			<?php
			$sql = "SELECT * FROM members ORDER BY first_name";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC); ?>
			<label>Member:</label>
			<select name="member_id" class="form-control">
				<option value=""></option>
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></option> <?php } ?>
			</select>
		</div>
		<div id="customer_form" class="form-group" style="display: none;">
			<h4>Customer:</h4>
			<label>First name:</label><br>
			<input name="first_name" type="text" value="" class="form-control"><br>
			<label>Last name:</label><br>
			<input name="last_name" type="text" value="" class="form-control">
		</div>
	</div>
	<div class="col-md-offset-1 col-md-4" style="color:white;">
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM drivers_shippers ORDER BY id";
			$query = $conn->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label><input type="checkbox" id="driver" checked> Driver</label>
			<select name="driver" id="driver_select" class="form-control">
				<option value="	"></option>
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
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
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
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
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Price:</label><br>
			<input name="paid_price" type="number" class="form-control" required>
		</div>
		<div class="form-group">
			<label><input type="checkbox" name="paid" id="paid"> Paid</label>
		</div>
		<div class="form-group">
			<label>Start date:</label><br>
			<input readonly name="start" class="form-control" value="2020-05-05 22:22:00" format="YYYY-MM-DD HH:mm:00" required>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>