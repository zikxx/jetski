<?php
include("head.php");
?>
<form action=generate_daily.php method="POST">
	<div class="col-md-offset-4 col-md-4" style="color:white;">
		<label>Export data for date:</label>
		<div class="input-group date form_datetime" data-link-field="dtp_input1">
			<input name="start" class="form-control" type="text" value="" readonly>
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
		<br>
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</form>
<div class="col-md-12" style="text-align: center;">
	<h2 style="text-align: center; color: white;">Centurion</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Centurion%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<hr>
	<br> <br>
	<h2 style="text-align: center; color: white;">Mastercraft</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Mastercraft%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<hr>
	<br> <br>
	<h2 style="text-align: center; color: white;">Othello 150HP</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Othello 150HP%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<hr>
	<br> <br>
	<h2 style="text-align: center; color: white;">Othello 200HP</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Othello 200HP%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<hr>
	<br> <br>
	<h2 style="text-align: center; color: white;">Windsurfing</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where name='Windsurfing' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<br> <br>
	<hr>
	<h2 style="text-align: center; color: white;">Fishing boat</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where name='Fishing boat' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<br> <br>
	<hr>
	<h2 style="text-align: center; color: white;">Yacht</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where name='Yacht' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
	<br> <br>
	<h2 style="text-align: center; color: white;">Other</h2>
	<table class="table" style="text-align: center; color: white;">
		<tr style="font-weight: bold;">
			<td>Start time</td>
			<td>End time</td>
			<td>Last name</td>
			<td>Driver</td>
			<td>Member/Customer</td>
			<td>Activity</td>
			<td>Type</td>
			<td>Paid</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT * FROM activities where subtask NOT like 'Wakeboard - Centurion%' and subtask NOT like 'Wakeboard - Mastercraft%'
	and subtask NOT like 'Wakeboard - Othello%' and not name='Windsurfing' and 
			not name='Yacht' and not name='Fishing boat' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['driver']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['submenu']; ?></td>
				<td><?php echo $row['paid']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php } ?>
	</table>
</div>
</div>
</div>
</body>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        weekStart: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        format: 'yyyy-mm-dd',
        pickerPosition: 'bottom-left',
        todayBtn:  1,
        minView: 2
    });
</script>
</html>