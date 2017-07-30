<?php
// izmenjen dashboard - start i finish stavljeni prvo
require ("head.php");
?>
<div id="page">

	<div class="header">
		<a href="#menu" style="position: fixed;">Menu</a><br>
	</div>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
	<?php
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.subtask like 'Wakeboard - Centurion%' 
			and a.start like '" . date ( "Y-m-d" ) . "%' ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
	<?php
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.subtask like 'Wakeboard - Mastercraft%' 
			and a.start like '" . date ( "Y-m-d" ) . "%' ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
	<?php
	$res = $dbh->prepare ( "SELECT a.id,a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.subtask like 'Wakeboard - Othello 150HP%' 
			and a.start like '" . date ( "Y-m-d" ) . "%' ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
			<td>Weight</td>
			<td>Age</td>
			<td>Shoe size</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
	<?php
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.subtask like 'Wakeboard - Othello 200HP%' 
			and a.start like '" . date ( "Y-m-d" ) . "%' ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.name='Windsurfing' and a.start like '" . date ( "Y-m-d" ) . "%' 
			ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name activities where a.name='Fishing boat' and a.start like '" . date ( "Y-m-d" ) . "%' 
			ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status, DATEDIFF(NOW(),m.age)/365 as age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.name='Yacht' and a.start like '" . date ( "Y-m-d" ) ."%' ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
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
	$res = $dbh->prepare ( "SELECT a.id, a.start, a.end, m.last_name, a.driver,a.type, a.name, a.submenu, a.paid, a.status,DATEDIFF(NOW(),m.age)/365 as age
			, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name where a.subtask NOT like 'Wakeboard - Centurion%' 
			and a.subtask NOT like 'Wakeboard - Mastercraft%'
	and a.subtask NOT like 'Wakeboard - Othello%' and not a.name='Windsurfing' and 
			not a.name='Yacht' and not a.name='Fishing boat' and a.start like '" . date ( "Y-m-d" ) . "%' ORDER BY a.start ASC" );
	$res->fetch ( PDO::FETCH_OBJ );
	$res->execute ();
	foreach ( $res as $row ) {
		$update = "<a href='canc.php?q=" . $row ['id'] . "' class='btn btn-danger'>Cancel</a>";
		$disabled = "<a class='btn btn-danger disabled'>Cancel</a>";
		$age1 = $row['age'];
		$age = strtok($age1, '.');
		?>
	<tr>
			<td><?php echo $row['start'];?></td>
			<td><?php echo $row['end'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['driver'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['submenu'];?></td>
			<td><?php echo $row['paid'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $row['shoe_size'];?></td>
			<td><?php echo $row['status'];?></td>
	<?php if($row['status']=="Active"){?>
	<td><?php echo $update;?></td><?php
		} else {
			?>
	<td><?php echo $disabled;?></td><?php } ?>
	</tr> <?php } ?>
	</table>
	<hr>
	<div class="content"></div>
	<nav id="menu">
		<ul>
			<li><span>Windsurfing</span>
				<ul>
					<li><span>Lessons</span>
						<ul>
							<li id="1-1-1"><span>Introduction Hour</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Introduction Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="Introduction Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="60"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-1-2"><span>Start Windsurfing - 5 Hours Course</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Start Windsurfing - 5 Hours Course</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Start Windsurfing - 5 Hours Course"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="300">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="250"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-1-3"><span>Windsurfing Intermediate - 3 Hours Course</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Windsurfing Intermediate - 3 Hours Course</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Windsurfing Intermediate - 3 Hours Course"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="180">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="160"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
					<li><span>Group Lessons - 3+ People</span>
						<ul>
							<li id="1-2-1"><span>Introduction Hour</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Group Lessons - 3+ People</p>
											</div>
											<div class="form-group">
												<p>Class: Introduction Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu"
												value="Group Lessons - 3+ People"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="Introduction Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price per person:</label><input type="text"
													id="price" name="paid_price" value="45"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-2-2"><span>Start Windsurfing - 5 Hours Course</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Group Lessons - 3+ People</p>
											</div>
											<div class="form-group">
												<p>Class: Start Windsurfing - 5 Hours Course</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu"
												value="Group Lessons - 3+ People"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Start Windsurfing - 5 Hours Course"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="300">
<?php include("details.php"); ?>
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
												<label>Price per person:</label><input type="text"
													id="price" name="paid_price" value="130"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-2-3"><span>Windsurfing Intermediate - 3 Hours Course</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Group Lessons - 3+ People</p>
											</div>
											<div class="form-group">
												<p>Windsurfing Intermediate - 3 Hours Course</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu"
												value="Group Lessons - 3+ People"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Windsurfing Intermediate - 3 Hours Course"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="180">
<?php include("details.php"); ?>
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
												<label>Price per person:</label><input type="text"
													id="price" name="paid_price" value="80"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
					<li><span>Rent</span>
						<ul>
							<li id="1-3-1"><span>1 Hour</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="30"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-2"><span>1 Day</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 1 Day</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="1 Day"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="1440">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="75"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-3"><span>2 Days</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 2 Days</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="2 Days"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="2880">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="120"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-4"><span>3 Days</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 3 Days</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="3 Days"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="4320">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="160"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-5"><span>4 Days</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 4 Days</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="4 Days"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="5760">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="200"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-6"><span>5 Days</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 5 Days</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="5 Days"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="7200">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="240"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-7"><span>6 Days</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 6 Days</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="6 Days"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="8640">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="270"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="1-3-8"><span>7 Days</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Windsurfing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 7 Days</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Windsurfing" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="7 Days"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="10080">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="310"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
				</ul></li>
			<li><span>Stand Up Paddle</span>
				<ul>
					<li><span>Lessons</span>
						<ul>
							<li id="2-1-1"><span>30 Minutes</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Stand Up Paddle</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: 30 Minutes</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Stand Up Paddle" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="30 Minutes"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="30">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="35"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
					<li><span>Rent</span>
						<ul>
							<li id="2-2-1"><span>1 Hour</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Stand Up Paddle</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Stand Up Paddle" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="20"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="2-2-2"><span>30 Hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Stand Up Paddle</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 30 Hours</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Stand Up Paddle" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="30 Hours"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="1800">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="300"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="2-2-3"><span>Unlimited Use</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Stand Up Paddle</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: Unlimited Use</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Stand Up Paddle" class="col-md-offset-1 col-md-10"> <input
												type="hidden" id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="Unlimited Use"
												class="col-md-offset-1 col-md-10"> 
<?php include("details.php"); ?>
<br>
											<div class="form-group">
												<label>End date:</label><input type="text" id="price"
													name="end" value="<?php echo date("Y-m-d H:i:00");?>"
													class="col-md-offset-1 col-md-10" required>
											</div>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="550"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
				</ul></li>
			<li><span>Wakeboard, Wakesurf, Waterskate, Waterski</span>
				<ul>
					<li id="3-1"><span>Tows</span>
						<ul>
							<li><span>Wakeboard - Othello 200HP 15 minutes - 1 tow</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Othello 200HP 15 minutes - 1 tow</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Othello 200HP 15 minutes - 1 tow"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="40"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Othello 200HP 15 minutes - 5 tows</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Othello 200HP 15 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Othello 200HP 15 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="180"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Othello 15 200HP minutes - Prepaid 5 hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Othello 200HP 15 minutes - Prepaid 5
													hours</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Othello 200HP 15 minutes - Prepaid 5 hours"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="620"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Mastercraft 15 minutes - 1 tow</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Mastercraft 15 minutes - 1 tow</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Mastercraft 15 minutes - 1 tow"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="45"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Mastercraft 15 minutes - 5 tows</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Mastercraft 15 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Mastercraft 15 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="210"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Mastercraft 15 minutes - Prepaid 5 hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Mastercraft 15 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Mastercraft 15 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="720"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Centurion 15 minutes - 1 tow</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Centurion 15 minutes - 1 tow</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Centurion 15 minutes - 1 tow"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="45"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Centurion 15 minutes - 5 tows</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Centurion 15 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Centurion 15 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="210"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Centurion 15 minutes - Prepaid 5 hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Centurion 15 minutes - Prepaid 5 hours</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Centurion 15 minutes - Prepaid 5 hours"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="720"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Othello 150HP 15 minutes - 1 tow</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Othello 150HP 15 minutes - 1 tow</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Othello 150HP 15 minutes - 1 tow"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="40"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Othello 150HP 15 minutes - 5 tows</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Othello 150HP 15 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Othello 150HP 15 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="180"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakeboard - Othello 15 150HP minutes - Prepaid 5 hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakeboard - Othello 150HP 15 minutes - Prepaid 5
													hours</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakeboard - Othello 150HP 15 minutes - Prepaid 5 hours"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="620"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakesurf 15 minutes - 1 tow</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakesurf 15 minutes - 1 tow</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakesurf 15 minutes - 1 tow"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="45"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Wakesurf 15 minutes - 5 tows</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Wakesurf 15 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Wakesurf 15 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="15">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="210"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Waterski and waterskate 8-10 minutes - 1 tow</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Waterski and waterskate 8-10 minutes - 1 tow</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Waterski and waterskate 8-10 minutes - 1 tow"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="10">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="30"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Waterski and waterskate 8-10 minutes - 5 tows</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Tows</p>
											</div>
											<div class="form-group">
												<p>Class: Waterski and waterskate 8-10 minutes - 5 tows</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Waterski and waterskate 8-10 minutes - 5 tows"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="10">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="130"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
					<li id="3-2"><span>Wakeboard, Wakesurf, Waterskate - Lessons</span>
						<ul>
							<li><span>Introduction Hour - 1 lesson 30 minutes</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Introduction Lesson - 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Introduction Lesson - 1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="70"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Start Program - 3 Lessons 30 minutes each</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Introduction Lesson - 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Introduction Lesson - 1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="190"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
					<li id="3-3"><span>Waterski - Lessons</span>
						<ul>
							<li><span>Introduction Hour - 1 lesson 30 minutes</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Introduction Lesson - 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Introduction Lesson - 1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="60"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li><span>Start Program - 3 Lessons 30 minutes each</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Wakeboard, Wakesurf, Waterskate, Waterski</p>
											</div>
											<div class="form-group">
												<p>Type: Waterski - Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Start Program - 3 Lessons 30 minutes each</p>
											</div>
											<input type="hidden" id="input1" name="name"
												value="Wakeboard, Wakesurf, Waterskate, Waterski"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Waterski - Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Start Program - 3 Lessons 30 minutes each"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="90">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="160"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
				</ul></li>
			<li><span>Sailing</span>
				<ul>
					<li><span>Lessons</span>
						<ul>
							<li id="4-1-1"><span>Introduction Lesson - 1 Hour</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Sailing</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Introduction Lesson - 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name" value="Sailing"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Introduction Lesson - 1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="60"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="4-1-2"><span>Learn Sailing - 3 Hours + 1 Hour Free</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Sailing</p>
											</div>
											<div class="form-group">
												<p>Type: Lessons</p>
											</div>
											<div class="form-group">
												<p>Class: Learn Sailing - 3 Hours + 1 Hour Free</p>
											</div>
											<input type="hidden" id="input1" name="name" value="Sailing"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Lessons"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="Learn Sailing - 3 Hours + 1 Hour Free"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="240">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="150"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
					<li><span>Rent</span>
						<ul>
							<li id="4-2-1"><span>1 Hour</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Sailing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 1 Hour</p>
											</div>
											<input type="hidden" id="input1" name="name" value="Sailing"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="1 Hour"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="60">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="45"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="4-2-2"><span>3 Hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Sailing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 3 Hours</p>
											</div>
											<input type="hidden" id="input1" name="name" value="Sailing"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="3 Hours"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="180">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="120"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="4-2-3"><span>5 Hours</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Sailing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: 5 Hours</p>
											</div>
											<input type="hidden" id="input1" name="name" value="Sailing"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask" value="5 Hours"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="300">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="180"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
							<li id="4-2-4"><span>HobleCat Ride With Instructor, Up To 2
									Persons, 30 minutes</span>
								<ul>
									<li>
										<form action="add_activity.php" method="POST"
											style="text-align: center;">
											<div class="form-group">
												<p>Activity: Sailing</p>
											</div>
											<div class="form-group">
												<p>Type: Rent</p>
											</div>
											<div class="form-group">
												<p>Class: HobleCat Ride With Instructor, Up To 2 Persons, 30
													minutes</p>
											</div>
											<input type="hidden" id="input1" name="name" value="Sailing"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input2" name="submenu" value="Rent"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="input3" name="subtask"
												value="HobleCat Ride With Instructor, Up To 2 Persons, 30 minutes"
												class="col-md-offset-1 col-md-10"> <input type="hidden"
												id="end" name="end" value="30">
<?php include("details.php"); ?>
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
												<label>Price:</label><input type="text" id="price"
													name="paid_price" value="40"
													class="col-md-offset-1 col-md-10" required>
											</div>
											<br> <label>Member/Customer:</label> <br>
											<div class="form-group">
												<select name="type" class="col-md-offset-1 col-md-10">
													<option value="Member">Member</option>
													<option value="Customer">Customer</option>
												</select>
											</div>
											<br> <label>Paid:</label> <br>
											<div class="form-group">
												<select name="paid" class="col-md-offset-1 col-md-10">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<br> <br>
											<button type="submit" class="btn btn-primary">Confirm</button>
										</form>
									</li>
								</ul></li>
						</ul></li>
				</ul></li>
			<li><span>Kitesurfing</span>
				<ul>
					<li id="5-1"><span>Stages 1, 2 or 3 - 3 Hours Course</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Kitesurfing</p>
									</div>
									<div class="form-group">
										<p>Type: Stages 1, 2 or 3 - 3 Hours Course</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Kitesurfing" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Stages 1, 2 or 3  - 3 Hours Course"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="180">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="170"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="5-2"><span>Stage 1 and 2 - 6 Hours Course</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Kitesurfing</p>
									</div>
									<div class="form-group">
										<p>Type: Stage 1 and 2 - 6 Hours Course</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Kitesurfing" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Stage 1 and 2  - 6 Hours Course"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="360">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="300"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="5-3"><span>Stages 1, 2 and 3 - 9 Hours Course</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Kitesurfing</p>
									</div>
									<div class="form-group">
										<p>Type: Stages 1, 2 and 3 - 9 Hours Course</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Kitesurfing" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Stages 1, 2 and 3  - 9 Hours Course"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="540">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="450"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Jet-ski</span>
				<ul>
					<li id="6-1"><span>1 Person 15 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Jet-ski</p>
									</div>
									<div class="form-group">
										<p>Type: 1 Person 15 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Jet-ski"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="1 Person 15 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="15">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="50"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="6-2"><span>2 Persons 15 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Jet-ski</p>
									</div>
									<div class="form-group">
										<p>Type: 2 Persons 15 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Jet-ski"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="2 Persons 15 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="15">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="60"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="6-3"><span>1 Person 15 Minutes with Fast Key</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Jet-ski</p>
									</div>
									<div class="form-group">
										<p>Type: 1 Person 15 Minutes with Fast Key</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Jet-ski"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="1 Person 15 Minutes with Fast Key"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="15">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="60"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="6-4"><span>2 Persons 15 Minutes with Fast Key</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Jet-ski</p>
									</div>
									<div class="form-group">
										<p>Type: 2 Persons 15 Minutes with Fast Key</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Jet-ski"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="2 Persons 15 Minutes with Fast Key"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="15">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="70"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="6-5"><span>1 Person 15 Minutes (Yamaha FX)</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Jet-ski</p>
									</div>
									<div class="form-group">
										<p>Type: 1 Person 15 Minutes (Yamaha FX)</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Jet-ski"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="1 Person 15 Minutes (Yamaha FX)"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="15">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="65"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="6-6"><span>2 Persons 15 Minutes (Yamaha FX)</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Jet-ski</p>
									</div>
									<div class="form-group">
										<p>Type: 2 Persons 15 Minutes (Yamaha FX)</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Jet-ski"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="2 Persons 15 Minutes (Yamaha FX)"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="15">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="75"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Boat Rent</span>
				<ul>
					<li id="7-1"><span>DYNA - 30 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Boat Rent</p>
									</div>
									<div class="form-group">
										<p>Type: DYNA - 30 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Boat Rent"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="DYNA - 30 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="80"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="7-2"><span>DYNA - 60 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Boat Rent</p>
									</div>
									<div class="form-group">
										<p>Type: DYNA - 60 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Boat Rent"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="DYNA - 60 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="140"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="7-3"><span>150 Horse Power - 30 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Boat Rent</p>
									</div>
									<div class="form-group">
										<p>Type: 150 Horse Power - 30 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Boat Rent"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="150 Horse Power - 30 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="110"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="7-4"><span>150 Horse Power - 60 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Boat Rent</p>
									</div>
									<div class="form-group">
										<p>Type: 150 Horse Power - 60 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Boat Rent"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="150 Horse Power - 60 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="190"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="7-5"><span>200 Horse Power - 30 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Boat Rent</p>
									</div>
									<div class="form-group">
										<p>Type: 200 Horse Power - 30 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Boat Rent"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="200 Horse Power - 30 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="140"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="7-6"><span>200 Horse Power - 60 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Boat Rent</p>
									</div>
									<div class="form-group">
										<p>Type: 200 Horse Power - 60 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Boat Rent"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu"
										value="200 Horse Power - 60 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="240"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Flyboard</span>
				<ul>
					<li id="8-1"><span>30 Miutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Flyboard</p>
									</div>
									<div class="form-group">
										<p>Type: 30 Miutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Flyboard"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="30 Miutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="110"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="8-2"><span>1 Hour</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Flyboard</p>
									</div>
									<div class="form-group">
										<p>Type: 1 Hour</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Flyboard"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="1 Hour"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="160"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="8-3"><span>3 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Flyboard</p>
									</div>
									<div class="form-group">
										<p>Type: 3 Hours</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Flyboard"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="3 Hours"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="180">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="450"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Inflatables</span>
				<ul>
					<li id="9-1"><span>S</span>
						<ul>
							<li id="9-1"><span>1 Person</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 1 Person - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 1 Person - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="20"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 1 Person - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 1 Person - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 1 Person - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 1 Person - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 1 Person - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 1 Person - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 1 Person - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 1 Person - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="100"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 1 Person - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 1 Person - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>2 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 2 persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 2 persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 2 persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 2 persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 2 persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 2 persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 2 persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 2 persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 2 persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 2 persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="200"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 2 persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 2 persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>3 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 3 persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 3 persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 3 persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 3 persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 3 persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 3 persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="180"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 3 persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 3 persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 3 persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 3 persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="300"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 3 persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 3 persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>4 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 4 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 4 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 4 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 4 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 4 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 4 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 4 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 4 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 4 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 4 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 4 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 4 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>5 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 5 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 5 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 5 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 5 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 5 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 5 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 5 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 5 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 5 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 5 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 5 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 5 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>6 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 6 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 6 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 6 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 6 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 6 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 6 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 6 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 6 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 6 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 6 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 6 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 6 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>7 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 7 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 7 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 7 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 7 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 7 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 7 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 7 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 7 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 7 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 7 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 7 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 7 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>8 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 8 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 8 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 8 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 8 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 8 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 8 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 8 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 8 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 8 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 8 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: S - 8 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="S - 8 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>

						</ul></li>
					<li id="9-1"><span>M</span>
						<ul>
							<li id="9-1"><span>1 Person</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 1 Person - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="20"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 1 Person - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 1 Person  - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 1 Person - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 1 Person  - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 1 Person - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 1 Person  - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 1 Person - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 1 Person  - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="100"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 1 Person - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>2 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 2 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 2 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 2 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 2 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 2 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 2 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 2 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 2 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 2 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 2 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="200"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 2 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 2 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>3 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 3 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 3 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 3 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 3 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 3 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 3 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="180"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 3 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 3 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 3 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 3 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="300"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 3 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 3 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>4 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 4 persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 4 persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 4 persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 4 persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 4 persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 4 persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 4 persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 4 persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 4 persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 4 persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 4 persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 4 persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>5 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 5 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 5 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 5 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 5 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 5 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 5 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 5 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 5 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 5 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 5 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 5 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 5 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>6 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 6 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 6 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 6 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 6 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 6 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 6 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 6 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 6 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 6 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 6 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 6 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 6 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>7 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 7 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 7 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 7 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 7 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 7 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 7 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 7 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 7 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 7 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 7 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 7 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 7 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>8 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 8 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 8 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 8 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 8 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 8 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 8 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 8 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 8 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 8 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 8 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: M - 8 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="M - 8 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>

						</ul></li>
					<li id="9-1"><span>L</span>
						<ul>
							<li id="9-1"><span>1 Person</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 1 Person - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="20"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 1 Person - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 1 Person  - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 1 Person - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 1 Person  - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 1 Person - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 1 Person  - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 1 Person - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 1 Person  - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="100"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 1 Person - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>2 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 2 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 2 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 2 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 2 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 2 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 2 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 2 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 2 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 2 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 2 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="200"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 2 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 2 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>3 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 3 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 3 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 3 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 3 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 3 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 3 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="180"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 3 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 3 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 3 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 3 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="300"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 3 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 3 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>4 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 4 persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 4 persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 4 persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 4 persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 4 persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 4 persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 4 persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 4 persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 4 persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 4 persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 4 persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 4 persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>5 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 5 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 5 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 5 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 5 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 5 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 5 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 5 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 5 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 5 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 5 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 5 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 5 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>6 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 6 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 6 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 6 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 6 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 6 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 6 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 6 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 6 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 6 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 6 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 6 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 6 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>7 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 7 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 7 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 7 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 7 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 7 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 7 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 7 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 7 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 7 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 7 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 7 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 7 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>8 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 8 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 8 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 8 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 8 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 8 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 8 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 8 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 8 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 8 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 8 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: L - 8 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="L - 8 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>

						</ul></li>
					<li id="9-1"><span>XL</span>
						<ul>
							<li id="9-1"><span>1 Person</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 1 Person - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="20"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 1 Person - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 1 Person  - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 1 Person - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 1 Person  - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 1 Person - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 1 Person  - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 1 Person - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 1 Person  - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="100"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 1 Person - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>2 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 2 persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 2 persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 2 persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 2 persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 2 persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 2 persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 2 persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 2 persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 2 persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 2 persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="200"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 2 persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 2 persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>3 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 3 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 3 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 3 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 3 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 3 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 3 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="180"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 3 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 3 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 3 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 3 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="300"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 3 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 3 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>4 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 4 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 4 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 4 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 4 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 4 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 4 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 4 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 4 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 4 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 4 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 4 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 4 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>5 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 5 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 5 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 5 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 5 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 5 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 5 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 5 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 5 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 5 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 5 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 5 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 5 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>6 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 6 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 6 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 6 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 6 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 6 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 6 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 6 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 6 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 6 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 6 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 6 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 6 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>7 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 7 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 7 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 7 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 7 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 7 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 7 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 7 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 7 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 7 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 7 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 7 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 7 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>8 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 8 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 8 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 8 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 8 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 8 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 8 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 8 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 8 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 8 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 8 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: XL - 8 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="XL - 8 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>

						</ul></li>
					<li id="9-1"><span>Banana</span>
						<ul>
							<li id="9-1"><span>1 Person</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 1 Person - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="20"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 1 Person - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 1 Person  - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 1 Person - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 1 Person  - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 1 Person - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 1 Person  - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 1 Person - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 1 Person  - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="100"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 1 Person - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 1 Person  - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>2 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 2 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 2 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="40"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 2 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 2 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 2 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 2 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 2 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 2 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 2 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 2 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="200"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 2 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 2 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>3 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 3 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 3 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="60"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 3 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 3 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="120"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 3 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 3 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="180"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 3 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 3 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 3 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 3 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="300"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 3 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 3 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>4 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 4 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 4 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 4 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 4 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 4 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 4 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 4 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 4 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 4 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 4 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 4 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 4 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>5 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 5 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 5 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 5 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 5 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 5 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 5 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 5 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 5 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 5 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 5 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 5 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 5 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>6 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 6 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 6 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 6 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 6 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 6 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 6 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 6 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 6 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 6 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 6 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 6 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 6 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>7 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 7 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 7 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 7 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 7 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 7 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 7 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 7 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 7 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 7 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 7 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 7 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 7 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>8 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 8 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 8 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 8 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 8 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 8 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 8 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 8 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 8 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 8 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 8 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 8 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 8 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>9 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 9 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 9 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 9 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 9 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 9 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 9 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 9 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 9 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 9 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 9 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 9 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 9 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>
							<li id="9-1"><span>10 Persons</span>
								<ul>
									<li id="9-1"><span>10 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 10 Persons - 10 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 10 Persons - 10 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="10">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="80"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>20 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 10 Persons - 20 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 10 Persons - 20 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="20">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="160"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>30 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 10 Persons - 30 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 10 Persons - 30 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="30">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="240"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>40 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 10 Persons - 40 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 10 Persons - 40 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="40">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="320"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>50 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 10 Persons - 50 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 10 Persons - 50 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="50">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="400"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
									<li id="9-1"><span>60 Minutes</span>
										<ul>
											<li>
												<form action="add_activity.php" method="POST"
													style="text-align: center;">
													<div class="form-group">
														<p>Activity: Inflatables</p>
													</div>
													<div class="form-group">
														<p>Type: Banana - 10 Persons - 60 Minutes</p>
													</div>
													<input type="hidden" id="input1" name="name"
														value="Inflatables" class="col-md-offset-1 col-md-10"> <input
														type="hidden" id="input2" name="submenu"
														value="Banana - 10 Persons - 60 Minutes"
														class="col-md-offset-1 col-md-10"> <input type="hidden"
														id="end" name="end" value="60">
<?php include("details.php"); ?>
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
														<label>Price:</label><input type="text" id="price"
															name="paid_price" value="360"
															class="col-md-offset-1 col-md-10" required>
													</div>
													<br> <label>Member/Customer:</label> <br>
													<div class="form-group">
														<select name="type" class="col-md-offset-1 col-md-10">
															<option value="Member">Member</option>
															<option value="Customer">Customer</option>
														</select>
													</div>
													<br> <label>Paid:</label> <br>
													<div class="form-group">
														<select name="paid" class="col-md-offset-1 col-md-10">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<br> <br>
													<button type="submit" class="btn btn-primary">Confirm</button>
												</form>
											</li>
										</ul></li>
								</ul></li>

						</ul></li>

				</ul></li>
			<li><span>Pedal Boats</span>
				<ul>
					<li id="10-1"><span>Pedalboat Without Slide, 30 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Pedal Boats</p>
									</div>
									<div class="form-group">
										<p>Type: Pedalboat Without Slide, 30 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Pedal Boats" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Pedalboat Without Slide, 30 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="10"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="10-2"><span>Pedalboat Without Slide, 60 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Pedal Boats</p>
									</div>
									<div class="form-group">
										<p>Type: Pedalboat Without Slide, 60 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Pedal Boats" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Pedalboat Without Slide, 60 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="15"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="10-3"><span>Pedalboat With Slide, 30 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Pedal Boats</p>
									</div>
									<div class="form-group">
										<p>Type: Pedalboat With Slide, 30 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Pedal Boats" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Pedalboat With Slide, 30 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="15"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="10-4"><span>Pedalboat With Slide, 60 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Pedal Boats</p>
									</div>
									<div class="form-group">
										<p>Type: Pedalboat With Slide, 60 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name"
										value="Pedal Boats" class="col-md-offset-1 col-md-10"> <input
										type="hidden" id="input2" name="submenu"
										value="Pedalboat With Slide, 60 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="25"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Sea Kayak</span>
				<ul>
					<li id="11-1"><span>30 Minutes</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Sea Kayak</p>
									</div>
									<div class="form-group">
										<p>Type: 30 Minutes</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Sea Kayak"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="30 Minutes"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="30">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="5" class="col-md-offset-1 col-md-10"
											required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li id="11-2"><span>1 Hour</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<div class="form-group">
										<p>Activity: Sea Kayak</p>
									</div>
									<div class="form-group">
										<p>Type: 1 Hour</p>
									</div>
									<input type="hidden" id="input1" name="name" value="Sea Kayak"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="input2" name="submenu" value="1 Hour"
										class="col-md-offset-1 col-md-10"> <input type="hidden"
										id="end" name="end" value="60">
<?php include("details.php"); ?>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="10"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Fishing boat</span>
				<ul>
					<li><span>2.5 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="150"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="400"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li><span>3 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="180"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="500"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li><span>6 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="360"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="1100"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Yacht</span>
				<ul>
					<li><span>2 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="120"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="400"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li><span>4 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="240"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="500"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li><span>6 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="360"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="1100"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
					<li><span>7 Hours</span>
						<ul>
							<li>
								<form action="add_activity.php" method="POST"
									style="text-align: center;">
									<input type="hidden" id="input1" name="name" value="Yacht"
										class="col-md-offset-1 col-md-10">
<?php include("details.php"); ?>
<br>
									<div class="form-group">
										<input type="hidden" id="price" name="end" value="420"
											class="col-md-offset-1 col-md-10" required>
									</div>
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
										<label>Price:</label><input type="text" id="price"
											name="paid_price" value="1100"
											class="col-md-offset-1 col-md-10" required>
									</div>
									<br> <label>Member/Customer:</label> <br>
									<div class="form-group">
										<select name="type" class="col-md-offset-1 col-md-10">
											<option value="Member">Member</option>
											<option value="Customer">Customer</option>
										</select>
									</div>
									<br> <label>Paid:</label> <br>
									<div class="form-group">
										<select name="paid" class="col-md-offset-1 col-md-10">
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<br> <br>
									<button type="submit" class="btn btn-primary">Confirm</button>
								</form>
							</li>
						</ul></li>
				</ul></li>
			<li><span>Shop</span>
				<ul>
					<li>
						<form action="shop.php" method="POST" style="text-align: center;">
							<div class="form-group">
								<input type="hidden" id="price" name="shop" value="Shop"
									class="col-md-offset-1 col-md-10" required>
							</div>
							<div class="form-group">
								<label>Comment:</label><input type="text" id="price"
									name="comment" value="" class="col-md-offset-1 col-md-10"
									required>
							</div>
							<div class="form-group">
								<label>Price:</label><input type="text" id="price" name="price"
									value="" class="col-md-offset-1 col-md-10" required>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Confirm</button>
						</form>
					</li>
				</ul></li>
			<li><span>Other</span>
				<ul>
					<li>
						<form action="shop.php" method="POST" style="text-align: center;">
							<div class="form-group">
								<input type="hidden" id="price" name="shop" value="Other"
									class="col-md-offset-1 col-md-10" required>
							</div>
							<div class="form-group">
								<?php
								
								$sql = "SELECT * FROM menu";
								$query = $dbh->prepare ( $sql );
								$query->execute ();
								$results = $query->fetchAll ( PDO::FETCH_ASSOC );
								?>      
<select name="activity" class="col-md-offset-1 col-md-10">
<?php foreach($results as $row) { ?>
<option value="<?php echo $row['menu_name']; ?>"><?php echo $row['menu_name']; ?></option> <?php } ?>
</select>
							</div>
							<div class="form-group">
								<label>Start date:</label><input type="text" id="start"
									name="start" value="<?php echo date("Y-m-d H:i:00");?>"
									class="col-md-offset-1 col-md-10"
									placeholder="YYYY-MM-DD HH:MM" required>
							</div>
							<div class="form-group">
								<label>End date::</label><input type="text" id="price"
									name="end" value="<?php echo date("Y-m-d H:i:00");?>"
									class="col-md-offset-1 col-md-10" required>
							</div>
							<div class="form-group">
								<label>Comment:</label><input type="text" id="price"
									name="comment" value="" class="col-md-offset-1 col-md-10"
									required>
							</div>
							<div class="form-group">
								<label>Price:</label><input type="text" id="price" name="price"
									value="" class="col-md-offset-1 col-md-10" required>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Confirm</button>
						</form>
					</li>
				</ul></li>
			<li><a href="member.php">Control panel</a></li>
		</ul>
	</nav>
</div>
<link type="text/css" rel="stylesheet" href="css/demo.css" />
<link type="text/css" rel="stylesheet" href="css/menu.all.css" />
<script type="text/javascript" src="js/menu.min.js"></script>
<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>
</body>
</html>