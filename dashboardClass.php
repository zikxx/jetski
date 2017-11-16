<?php
function table1($name){
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
	}
	function dashboard($where)
	{
		require("dbconfig.php");
		$res = $conn->prepare("SELECT a.id, a.start, a.end, mem.last_name AS member_lastname, a.last_name AS customer_lastname, 
d.name AS driver_name, a.type, m.menu_name, sm.submenu_name, a.paid, DATEDIFF(NOW(),mem.age)/365 AS age, mem.weight, mem.shoe_size, a.status 
FROM activities a
JOIN menu m ON a.menu_id = m.id
LEFT JOIN submenu sm ON a.submenu_id = sm.id
LEFT JOIN subtask st ON a.subtask_id = st.id
LEFT JOIN members mem ON a.member_id = mem.id
LEFT JOIN drivers_shippers d ON a.driver_id = d.id
WHERE sm.submenu_name LIKE '" . $where . "' 
AND a.start LIKE '" . date("Y-m-d") . "%' ORDER BY a.start ASC;");
		$res->fetch(PDO::FETCH_OBJ);
		$res->execute();
		foreach ($res as $row) {
			$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
			$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
			$age1 = $row['age'];
			$age = strtok($age1, '.');
			if ($row['driver_name'] == null) {
				$driver = "/";
			}
			else {
				$driver = $row['driver_name'];
			}
			if ($row['type'] === "Member") {
				$last_name = $row['member_lastname'];
				$weight = $row['weight'];
				$shoe_size = $row['shoe_size'];
			}
			else {
				$last_name = $row['customer_lastname'];
				$weight = "/";
				$age = "/";
				$shoe_size = "/";
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
				<td><?php echo $last_name; ?></td>
				<td><?php echo $driver; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['menu_name']; ?></td>
				<td><?php echo $row['submenu_name']; ?></td>
				<td><?php echo $paid; ?></td>
				<td><?php echo $weight; ?></td>
				<td><?php echo $age; ?></td>
				<td><?php echo $shoe_size; ?></td>
				<td><?php echo $row['status']; ?></td>
				<?php if ($row['status'] == "Active") { ?>
					<td><?php echo $update; ?></td><?php
				}
				else {
					?>
					<td><?php echo $disabled; ?></td><?php } ?>
			</tr> <?php }
	}

	?>
</table>
<hr>
<br> <br>
}