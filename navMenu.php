<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Dashboard</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="member.php">Members</a></li>
			<li><a href="customer.php">Customers</a></li>
			<?php
			if ((isset ($_SESSION ['id'])) && ($_SESSION ['user'] == "admin")) {
				?>
				
				<li><a href="driver.php">Drivers</a></li>
				<li><a href="inventory.php">Inventories</a></li>
				<li><a href="generate.php">Export</a></li><?php } ?>
			<li><a href="functions/logout.php">Log out</a></li>
		</ul>
	</div>
</nav>
