<?php
function dashboard($name, $date)
{
	?>
	<h2 style="text-align: center; color: white;"><?php echo $name; ?></h2>
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
		if ($name == "Centurion") {
			$res = getWakeboard("Wakeboard - Centurion - ", $date);
		}
		else if ($name == "Mastercraft") {
			$res = getWakeboard("Wakeboard - Centurion / Mastercraft", $date);
		}
		else if ($name == "Othello") {
			$res = getWakeboard("Wakeboard - Othello", $date);
		}
		else if ($name == "Windsurfing") {
			$res = getWindsurfing($date);
		}
		else if ($name == "Fishing boat") {
			$res = getFishing($date);
		}
		else if ($name == "Yacht") {
			$res = getYahct($date);
		}
		else {
			$res = getOther($date);
		}
		foreach ($res as $row) {
			$update = "<a href='functions/cancel.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$date1 = date_create($row['start']);
			$age1 = $row['age'];
			$age = strtok($age1, '.');
			if ($row['driverName'] == null) {
				$driver = "/";
			}
			else {
				$driver = $row['driverName'];
			}
			if ($row['type'] === "Member") {
				$lastName = $row['memberLastname'];
				$weight = $row['weight'];
				$shoeSize = $row['shoeSize'];
			}
			else {
				$lastName = $row['customerLastname'];
				$weight = "/";
				$age = "/";
				$shoeSize = "/";
			}
			if ($row['paid'] == 1) {
				$paid = "Yes";
			}
			else {
				$paid = "No";
			}
			?>
			<tr>
				<td><?php echo $row['start']; ?></td>
				<td><?php echo $row['end']; ?></td>
				<td><?php echo $lastName; ?></td>
				<td><?php echo $driver; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['menuName']; ?></td>
				<td><?php echo $row['submenuName']; ?></td>
				<td><?php echo $paid; ?></td>
				<td><?php echo $weight; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $shoeSize; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php }
		?>
	</table>
	<hr>
	<br> <br><?php }

function getWakeboard($where, $date)
{
	require("dbconfig.php");
	if ($date == '') {
		$date = date("Y-m-d");
	}
	$res = $conn->prepare("SELECT a.id, a.start, a.end, mem.lastName AS memberLastname, a.lastName AS customerLastname, 
d.name AS driverName, a.type, m.menuName, sm.submenuName, a.paid, DATEDIFF(NOW(),mem.age)/365 AS age, mem.weight, mem.shoeSize, a.status 
FROM activities a
JOIN menu m ON a.menuId = m.id
LEFT JOIN submenu sm ON a.submenuId = sm.id
LEFT JOIN subtask st ON a.subtaskId = st.id
LEFT JOIN members mem ON a.memberId = mem.id
LEFT JOIN driversShippers d ON a.driverId = d.id
WHERE sm.submenuName LIKE '" . $where . "%' 
AND a.start LIKE '" . $date . "%' ORDER BY a.start ASC;");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	return $res;
}

function getWindsurfing($date)
{
	require("dbconfig.php");
	if ($date == '') {
		$date = date("Y-m-d");
	}
	$res = $conn->prepare("SELECT a.id, a.start, a.end, mem.lastName AS memberLastname, a.lastName AS customerLastname, 
d.name AS driverName, a.type, m.menuName, sm.submenuName, a.paid, DATEDIFF(NOW(),mem.age)/365 AS age, mem.weight, mem.shoeSize, a.status 
FROM activities a
JOIN menu m ON a.menuId = m.id
LEFT JOIN submenu sm ON a.submenuId = sm.id
LEFT JOIN subtask st ON a.subtaskId = st.id
LEFT JOIN members mem ON a.memberId = mem.id
LEFT JOIN driversShippers d ON a.driverId = d.id
WHERE sm.menuId = 21 
AND a.start LIKE '" . $date . "%' ORDER BY a.start ASC;");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	return $res;
}

function getFishing($date)
{
	require("dbconfig.php");
	if ($date == '') {
		$date = date("Y-m-d");
	}
	$res = $conn->prepare("SELECT a.id, a.start, a.end, mem.lastName AS memberLastname, a.lastName AS customerLastname, 
d.name AS driverName, a.type, m.menuName, sm.submenuName, a.paid, DATEDIFF(NOW(),mem.age)/365 AS age, mem.weight, mem.shoeSize, a.status 
FROM activities a
JOIN menu m ON a.menuId = m.id
LEFT JOIN submenu sm ON a.submenuId = sm.id
LEFT JOIN subtask st ON a.subtaskId = st.id
LEFT JOIN members mem ON a.memberId = mem.id
LEFT JOIN driversShippers d ON a.driverId = d.id
WHERE sm.menuId = 30
AND a.start LIKE '" . $date . "%' ORDER BY a.start ASC;");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	return $res;
}

function getYahct($date)
{
	require("dbconfig.php");
	if ($date == '') {
		$date = date("Y-m-d");
	}
	$res = $conn->prepare("SELECT a.id, a.start, a.end, mem.lastName AS memberLastname, a.lastName AS customerLastname, 
d.name AS driverName, a.type, m.menuName, sm.submenuName, a.paid, DATEDIFF(NOW(),mem.age)/365 AS age, mem.weight, mem.shoeSize, a.status 
FROM activities a
JOIN menu m ON a.menuId = m.id
LEFT JOIN submenu sm ON a.submenuId = sm.id
LEFT JOIN subtask st ON a.subtaskId = st.id
LEFT JOIN members mem ON a.memberId = mem.id
LEFT JOIN driversShippers d ON a.driverId = d.id
WHERE sm.menuId = 31
AND a.start LIKE '" . $date . "%' ORDER BY a.start ASC;");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	return $res;
}

function getOther($date)
{
	require("dbconfig.php");
	if ($date == '') {
		$date = date("Y-m-d");
	}
	$res = $conn->prepare("SELECT a.id, a.start, a.end, mem.lastName AS memberLastname, a.lastName AS customerLastname, 
d.name AS driverName, a.type, m.menuName, sm.submenuName, a.paid, DATEDIFF(NOW(),mem.age)/365 AS age, mem.weight, mem.shoeSize, a.status 
FROM activities a
JOIN menu m ON a.menuId = m.id
LEFT JOIN submenu sm ON a.submenuId = sm.id
LEFT JOIN subtask st ON a.subtaskId = st.id
LEFT JOIN members mem ON a.memberId = mem.id
LEFT JOIN driversShippers d ON a.driverId = d.id
WHERE sm.submenuName NOT LIKE 'Wakeboard - Centurion%' 
	AND sm.submenuName NOT LIKE 'Wakeboard - Mastercraft%'
	AND sm.submenuName NOT LIKE 'Wakeboard - Othello%' AND NOT sm.menuId = 21
	AND NOT sm.menuId = 30 AND NOT sm.menuId = 31 
	AND a.start LIKE '" . $date . "%' ORDER BY a.start ASC;");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	return $res;
}

function getDurationSetEndTime($submenuId, $subtaskId)
{
	$conn = new PDO("mysql:host=localhost;dbname=jetski", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$table = "submenu";
	$id = $submenuId;
	if ($subtaskId != null) {
		$table = "subtask";
		$id = $subtaskId;
	}
	$end = $conn->prepare("SELECT duration FROM " . $table . " WHERE id = " . $id . ";");
	$end->execute();
	$minutes = $end->fetch(PDO::FETCH_OBJ);
	foreach ($minutes as $row) {
		$activityDuration = $row;
	}
	return $activityDuration;
}

?>
