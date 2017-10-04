<?php
session_start();
date_default_timezone_set("Asia/Nicosia");
require_once '../dbconfig.php';
if (!isset ($_SESSION ['id'])) {
	echo 'You are not logged in!';
	header('refresh: 0.3; login.php');
} ?>
<div class='col-md-3'>
	<h2>Menu:</h2>
	<?php
	$sql = "SELECT * FROM menu";
	$query = $conn->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	foreach ($results as $row) {
		?>
		<label class="list-group-item"><input name="name" type="radio" ng-model="vm.user.menu" value="<?php echo $row['id']; ?>"/>
			<?php echo $row['menu_name']; ?></label>
	<?php } ?></div>
<div class='col-md-3'>
	<h2>Submenu</h2>
	<div ng-switch="vm.user.menu">
		<div ng-switch-when="1">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="1"> Lessons</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="2"> Group Lessons - 3+ People</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="3"> Rent</label>
		</div>
		<div ng-switch-when="2">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="4"> Lessons</label>
			<label class="list-group-item"><input type="radio" ng-model="vm.user.submenu" value="5"> Rent</label>
		</div>
		<div ng-switch-when="3">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="6"> Tows</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="7"> Wakeboard, Wakesurf, Waterskate -
				Lessons</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="43"> Waterski - Lessons</label>
		</div>
		<div ng-switch-when="4">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="8"> Lessons</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="9"> Rent</label>
		</div>
		<div ng-switch-when="5">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="13"> Stages 1, 2 or 3 - 3 Hours Course</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="14"> Stage 1 and 2 - 6 Hours
				Course</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="15"> Stages 1, 2 and 3 - 9 Hours
				Course</label>
		</div>
		<div ng-switch-when="6">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="16"> 1 Person 15 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="17"> 2 Persons 15 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="18"> 1 Person 15 Minutes with Fast Key</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="19"> 2 Persons 15 Minutes with Fast
				Key</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="20"> 1 Person 15 Minutes (Yamaha
				FX)</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="21"> 2 Persons 15 Minutes (Yamaha FX)</label>
		</div>
		<div ng-switch-when="7">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="22"> DYNA - 30 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="23"> DYNA - 60 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="24"> 150 Horse Power - 30
				Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="25"> 150 Horse Power - 60
				Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="26"> 200 Horse Power - 30
				Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="27"> 200 Horse Power - 60
				Minutes</label>
		</div>
		<div ng-switch-when="8">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="29"> 30 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="30"> 1 Hour</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="31"> 3 Hours</label>
		</div>
		<div ng-switch-when="9">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="S"> S</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="M"> M</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="L"> L</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="XL"> XL</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="Banana"> Banana</label>
		</div>
		<div ng-switch-when="10">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="Pedalboat Without Slide, 30 Minutes">
				Pedalboat
				Without Slide, 30 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="Pedalboat Without Slide, 60 Minutes">
				Pedalboat
				Without Slide, 60 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="Pedalboat With Slide, 30 Minutes">
				Pedalboat With
				Slide, 30 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="Pedalboat With Slide, 60 Minutes">
				Pedalboat With
				Slide, 60 Minutes</label>
		</div>
		<div ng-switch-when="11">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="30 Minutes"> 30 Minutes</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="1 Hour"> 1 Hour</label>
		</div>
		<div ng-switch-when="12">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="2.5 Hours"> 2.5 Hours</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="3 Hours"> 3 Hours</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="6 Hours"> 6 Hours</label>
		</div>
		<div ng-switch-when="13">
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="2 Hours"> 2 Hours</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="4 Hours"> 4 Hours</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="6 Hours"> 6 Hours</label>
			<label class="list-group-item"><input name="submenu" type="radio" ng-model="vm.user.submenu" value="7 Hours"> 7 Hours</label>
		</div>
	</div>
</div>
<div class='col-md-3'>
	<h2>Subtask</h2>
	<div ng-switch="vm.user.submenu">
		<div ng-switch-when="1">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="1"> Introduction Hour</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="2"> Start Windsurfing - 5 Hours Course</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="3"> Windsurfing Intermediate - 3 Hours
				Course</label>
		</div>
		<div ng-switch-when="2">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="4"> Introduction Hour</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="5"> Start Windsurfing - 5 Hours Course</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="6"> Windsurfing Intermediate - 3 Hours
				Course</label>
		</div>
		<div ng-switch-when="3">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="7"> 1 Hour</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="8"> 1 Day</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="9"> 2 Days</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="10"> 3 Day</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="11"> 4 Day</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="12"> 5 Day</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="13"> 6 Day</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="14"> 7 Day</label>
		</div>
		<div ng-switch-when="4">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="15"> 30 Minutes</label>
		</div>
		<div ng-switch-when="5">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="16"> 1 Hour</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="17"> 30 Hours</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="18"> Unlimited Use</label>
		</div>
		<div ng-switch-when="6">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="29"> Wakeboard - Mastercraft 15
				minutes - 1
				tow</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="30"> Wakeboard - Mastercraft 15
				minutes - 5
				tows</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="31"> Wakeboard - Mastercraft 15
				minutes - Prepaid 5
				hours</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="32"> Wakeboard - Othello 150HP 15
				minutes - 1
				tow</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="33"> Wakeboard - Othello 150HP 15
				minutes - 5
				tows</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="34"> Wakeboard - Othello 150HP 15
				minutes - Prepaid 5
				hours</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="35"> Wakesurf 15 minutes - 1
				tow</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="36"> Wakesurf 15 minutes - 5
				tows</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="37"> Waterski and waterskate 8-10
				minutes - 1
				tow</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="38"> Waterski and waterskate 8-10
				minutes - 5
				tows</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="52"> Wakeboard - Othello 200HP 15
				minutes - 1
				tow</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="53"> Wakeboard - Othello 200HP 15
				minutes - 5
				tows</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="54"> Wakeboard - Othello 200HP 15
				minutes - Prepaid 5
				hours</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="55"> Wakeboard - Centurion 15 minutes
				- 1 tow</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="56"> Wakeboard - Centurion 15 minutes
				- 5
				tows</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="57"> Wakeboard - Centurion 15 minutes
				- Prepaid 5
				hours</label>
		</div>
		<div ng-switch-when="7">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="48"> Introduction Hour - 1 lesson 30
				minutes</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="49"> Start Program - 3 Lessons 30
				minutes
				each</label>
		</div>
		<div ng-switch-when="43">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="48"> Introduction Hour - 1 lesson 30
				minutes</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="49"> Start Program - 3 Lessons 30
				minutes
				each</label>
		</div>
		<div ng-switch-when="8">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="19"> Introduction Lesson - 1
				Hour</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="20"> Learn Sailing - 3 Hours + 1 Hour
				Free</label>
		</div>
		<div ng-switch-when="9">
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="25"> 1 Hour</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="26"> 3 Hours</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="27"> 5 Hours</label>
			<label class="list-group-item"><input name="subtask" type="radio" ng-model="vm.user.subtask" value="28"> HobleCat Ride With Instructor, Up
				To 2 Persons,
				30 minutes</label>
		</div>
	</div>
</div>
<div class='col-md-3'>
	<h2>Inflatables</h2>
	<div ng-switch="vm.user.subtask">
		<div ng-switch-when="1">
			<label class="list-group-item"><input name="inflatables" type="radio" ng-model="vm.user.inflatables" value="1"> Lessons</label>
			<label class="list-group-item"><input name="inflatables" type="radio" ng-model="vm.user.inflatables" value="2"> Group Lessons - 3+ People</label>
			<label class="list-group-item"><input name="inflatables" type="radio" ng-model="vm.user.inflatables" value="3"> Rent</label>
		</div>
	</div>
</div>