<?php
include("head.php");
?>
<div class="col-md-12" style="text-align: center;">
	<a href='generate_daily.php' type="submit" class="btn btn-primary">Export data</a>
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
		$res = $dbh->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Centurion%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Mastercraft%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Othello 150HP%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where subtask like 'Wakeboard - Othello 200HP%' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where name='Windsurfing' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where name='Fishing boat' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where name='Yacht' and start like '" . date("Y-m-d") . "%' ORDER BY start ASC");
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
		$res = $dbh->prepare("SELECT * FROM activities where subtask NOT like 'Wakeboard - Centurion%' and subtask NOT like 'Wakeboard - Mastercraft%'
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
<script type="text/javascript"
		src="datepickr-master/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript"
		src="datepickr-master/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript"
		src="datepickr-master/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript"
		src="datepickr-master/js/locales/bootstrap-datetimepicker.fr.js"
		charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        pickerPosition: 'bottom-left',
        daysOfWeekDisabled: [0],
        startDate: '+0d',
    });
</script>
</html>