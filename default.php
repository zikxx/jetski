<?php
require("head.php");
?>
<!DOCTYPE html>
<div id="page">
	<div class="header">
		<a href="#menu"><span></span></a><br>
		<h2 style="text-align: center; color: black;">Dashboard</h2>
		<table class="table" style="text-align: center; color: black;">
			<tr style="font-weight: bold;">
				<td>Activity</td>
				<td>Type</td>
				<td>Class</td>
				<td>Start time</td>
				<td>End time</td>
			</tr>
			<?php
			$res = $dbh->prepare("SELECT * FROM activities");
			$res->fetch(PDO::FETCH_OBJ);
			$res->execute();
			foreach ($res as $row) {
				?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['submenu']; ?></td>
					<td><?php echo $row['subtask']; ?></td>
					<td><?php echo $row['start']; ?></td>
					<td><?php echo $row['end']; ?></td>
				</tr> <?php } ?>
		</table>
	</div>
	<div class="content"></div>
	<nav id="menu">
		<ul>
			<li><a href="#">Windsurfing</a></li>
			<li id="asd"><span>Windsurfing</span>
				<ul>
					<li><a href="#about/history">History</a></li>
					<li id="asd1"><span>The team</span>
						<ul>
							<li><a href="#about/team/management">Management</a></li>
							<li><a href="#about/team/sales">Sales</a></li>
							<li><a href="#about/team/development">Development</a></li>
							<li>
								<form action="new_activity.php" method="POST">
									<input type="text" id="input1" name="name" value=""></input> <input
										type="text" id="input2" name="submenu" value=""></input>
									<button type="submit">ooooo</button>
								</form>
							</li>
						</ul>
					</li>
					<li><a href="#about/address">Our address</a></li>
				</ul>
			</li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
</div>
<link type="text/css" rel="stylesheet" href="css/demo.css"/>
<link type="text/css" rel="stylesheet" href="css/menu.all.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menu.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('nav#menu').mmenu();
    });
    $(document).ready(function () {
        $("#asd").click(function () {
            $("#input1").attr("value", "asd");
        });
    });
    $(document).ready(function () {
        $("#asd1").click(function () {
            $("#input2").attr("value", "123");
        });
    });
</script>
</body>
</html>