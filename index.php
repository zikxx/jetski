<?php
// izmenjen dashboard - start i finish stavljeni prvo
require("head.php");
require("dashboardClass.php");
?>
<div id="page">
	<div style="text-align: center;"><a href="activity.php" class="btn btn-success">Add new activity</a></div>
	<?php
	table1("Centurion");
	dashboard("Wakeboard - Centurion - %");
	table1("Mastercraft");
	dashboard("Wakeboard - Centurion / Mastercraft%");
	?>

	<h2 style="text-align: center; color: white;">Othello</h2>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT a.id,a.start, a.end, m.last_name, a.driver_id,a.type, a.menu_id, a.submenu_id, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 AS age, m.weight, m.shoe_size
FROM activities a INNER JOIN members m ON a.last_name = m.last_name WHERE a.submenu_id LIKE 'Wakeboard - Othello%' 
			AND a.start LIKE '" . date("Y-m-d") . "%' ORDER BY a.start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$age1 = $row['age'];
			$age = strtok($age1, '.');
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
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $row['shoe_size']; ?></td>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT a.id, a.start, a.end, m.last_name, a.driver_id,a.type, a.menu_id, a.submenu_id, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 AS age, m.weight, m.shoe_size
FROM activities a INNER JOIN members m ON a.last_name = m.last_name WHERE a.menu_id='Windsurfing' AND a.start LIKE '" . date("Y-m-d") . "%' 
			ORDER BY a.start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$age1 = $row['age'];
			$age = strtok($age1, '.');
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
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $row['shoe_size']; ?></td>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT a.id, a.start, a.end, m.last_name, a.driver_id,a.type, a.menu_id, a.submenu_id, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 AS age, m.weight, m.shoe_size
FROM activities a INNER JOIN members m ON a.last_name = m.last_name WHERE a.menu_id='Fishing charters' AND a.start LIKE '" . date("Y-m-d") . "%' 
			ORDER BY a.start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$age1 = $row['age'];
			$age = strtok($age1, '.');
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
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $row['shoe_size']; ?></td>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT a.id, a.start, a.end, m.last_name, a.driver_id,a.type, a.menu_id, a.submenu_id, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 AS age, m.weight, m.shoe_size
FROM activities a INNER JOIN members m ON a.last_name = m.last_name WHERE a.menu_id='Yacht' AND a.start LIKE '" . date("Y-m-d") . "%' ORDER BY a.start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$age1 = $row['age'];
			$age = strtok($age1, '.');
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
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $row['shoe_size']; ?></td>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php
		$res = $conn->prepare("SELECT a.id, a.start, a.end, m.last_name, a.driver_id,a.type, a.menu_id, a.submenu_id, a.paid, a.status,DATEDIFF(NOW(),m.age)/365 AS age
			, m.weight, m.shoe_size
FROM activities a INNER JOIN members m ON a.last_name = m.last_name WHERE a.subtask_id NOT LIKE 'Wakeboard - Centurion%' 
			AND a.subtask_id NOT LIKE 'Wakeboard - Mastercraft%'
	AND a.subtask_id NOT LIKE 'Wakeboard - Othello%' AND NOT a.menu_id='Windsurfing' AND 
			NOT a.menu_id='Yacht' AND NOT a.menu_id='Fishing boat' AND a.start LIKE '" . date("Y-m-d") . "%' ORDER BY a.start ASC");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$age1 = $row['age'];
			$age = strtok($age1, '.');
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
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $row['shoe_size']; ?></td>
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
</div>
</div>
</div>
</div>
</body>
</html>