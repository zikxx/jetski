<?php require("head.php") ?>
<div class="col-sm-10 col-sm-offset-1" style="color: white;">
	<h2 style="text-align: center;">Dashboard</h2>
	<table class="table" style="text-align: center">
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
<div id="menu">
	<nav>
		<h2>
			<i class="glyphicon glyphicon-menu-hamburger"></i>Add new activity
		</h2>
		<ul>
			<?php
			$res = $dbh->prepare("SELECT * FROM menu");
			$res->execute();
			while ($menu1 = $res->fetch(PDO::FETCH_OBJ)) {
				?>
				<li><a><i class="glyphicon glyphicon-chevron-right"></i><?php echo $menu1->menu_name; ?></a>
				<h2><?php echo $menu1->menu_name; ?><br>
					<br>Sub-activity:
				</h2>
				<ul>
					<?php
					$res2 = $dbh->prepare("SELECT * FROM submenu where menu_id = :id");
					$res2->bindValue(':id', $menu1->id, PDO::PARAM_INT);
					$res2->execute();
					while ($menu2 = $res2->fetch(PDO::FETCH_OBJ)) {
						?>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i><?php echo $menu2->submenu_name; ?></a>
						<h2><?php echo $menu1->menu_name . " > ";
							echo $menu2->submenu_name; ?><br>
							<br>Subtask:
						</h2>
						<ul><?php
							$res3 = $dbh->prepare("SELECT * FROM subtask where submenu_id = :id1");
							$res3->bindValue(':id1', $menu2->id, PDO::PARAM_INT);
							$res3->execute();
							if ($res3->rowCount() > 0) {
								while ($menu3 = $res3->fetch(PDO::FETCH_OBJ)) {
									?>
									<li><a href="#"><i
											class="glyphicon glyphicon-chevron-right"></i><?php echo $menu3->subtask_name; ?></a>
									<h2><?php echo $menu1->menu_name . " > ";
										echo $menu2->submenu_name . " > ";
										echo $menu3->subtask_name; ?></h2>
									<ul><?php include("price.php"); ?>
									</ul></li><?php
								}
							}
							else {
								?>
								<?php
								include("price.php");
							}
							?>
						</ul></li><?php } ?>
				</ul></li><?php } ?>
		</ul>
	</nav>
</div>
</div>
</div>
<link rel="stylesheet" href="css/jquery.multilevelpushmenu.css">
<link rel="stylesheet" href="css/basichtml.css">
<script type="text/javascript" src="js/jquery.multilevelpushmenu.js"></script>
<script type="text/javascript" src="js/basichtml.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
</body>
</html>
<?php require("head.php") ?>
<div class="col-sm-10 col-sm-offset-1" style="color: white;">
	<h2 style="text-align: center;">Dashboard</h2>
	<table class="table" style="text-align: center">
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
<div id="menu">
	<nav>
		<h2>
			<i class="glyphicon glyphicon-menu-hamburger"></i>All Categories
		</h2>
		<ul>
			<li><a><i class="glyphicon glyphicon-chevron-right"></i>Windsurfing</a>
				<h2>Windsurfing</h2>
				<ul>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lessons</a>
						<h2>Windsurfing Lessons</h2>
						<ul>
							<li>
								<h2>Introduction Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Introduction Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Start Windsurfing - 5 Hours Course</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Start Windsurfing
									- 5 Hours Course</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Windsurfing Intermediate - 3 Hours Course</h2>
								<a
									href="#"><i class="glyphicon glyphicon-chevron-right"></i>Windsurfing
									Intermediate - 3 Hours Course</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Group
							Lessons - 3+ People</a>
						<h2>Group Lessons - 3+ People</h2>
						<ul>
							<li>
								<h2>Introduction Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Introduction Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Start Windsurfing - 5 Hours Course</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Start Windsurfing
									- 5 Hours Course</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Windsurfing Intermediate - 3 Hours Course</h2>
								<a
									href="#"><i class="glyphicon glyphicon-chevron-right"></i>Windsurfing
									Intermediate - 3 Hours Course</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Rent</a>
						<h2>Rent</h2>
						<ul>
							<li>
								<h2>Rent - 1 Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>1 Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 1 Day</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>1 Day</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 2 Days</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>2 Days</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 3 Days</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>3 Days</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 4 Days</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>4 Days</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 5 Days</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>5 Days</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 6 Days</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>6 Days</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Rent - 7 Days</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>7 Days</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Stand
					Up Paddle</a>
				<h2>Stand Up Paddle</h2>
				<ul>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lessons</a>
						<h2>Stand Up Paddle Lessons</h2>
						<ul>
							<li>
								<h2>30 Minutes</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>30 Minutes</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Rent</a>
						<h2>Rent</h2>
						<ul>
							<li>
								<h2>1 Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>1 Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>30 Hours</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>30 Hours</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Unlimited Use</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Unlimited Use</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Wakeboard,
					Wakesurf</a>
				<h2>Wakeboard, Wakesurf</h2>
				<ul>
					<li>
						<h2>Tows</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Tows</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Rent</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Rent</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Sailing</a>
				<h2>Sailing</h2>
				<ul>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lessons</a>
						<h2>Sailing Lessons</h2>
						<ul>
							<li>
								<h2>Introduction Lesson - 1 Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Introduction
									Lesson - 1 Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>Learn Sailing - 3 Hours + 1 Hour Free</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>Learn Sailing - 3
									Hours + 1 Hour Free</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Rent</a>
						<h2>Rent</h2>
						<ul>
							<li>
								<h2>1 Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>1 Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>3 Hours</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>3 Hours</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>5 Hour</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>5 Hour</a>
								<?php include("price.php"); ?>
							</li>
							<li>
								<h2>HobleCat ride with instructor, up to 2 persons, 30
									minutes
								</h2>
								<a href="#"><i
										class="glyphicon glyphicon-chevron-right"></i>HobleCat ride
									with instructor, up to 2 persons, 30 minutes</a>
								<?php include("price.php"); ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Kitesurfing</a>
				<h2>Kitesurfing</h2>
				<ul>
					<li>
						<h2>Stages 1,2 or 3 - 3 Hours Course</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Stages 1,2 or 3 - 3
							Hours Course</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Stage 1 and 2 - 6 Hours Course</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Stage 1 and 2 - 6
							Hours Course</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Stage 1,2 and 3 - 9 Hours Course</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Stage 1,2 and 3 - 9
							Hours Course</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Jet-ski</a>
				<h2>Jet-ski Rental</h2>
				<ul>
					<li>
						<h2>1 Person 15 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>1 Person 15 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>2 Persons 15 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>2 Persons 15
							minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>1 Person 15 minutes with Fast Key</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>1 Person 15 minutes
							with Fast Key</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>2 Persons 15 minutes with Fast Key</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>2 Persons 15
							minutes with Fast Key</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>1 Person 15 minutes (Yamaha FX)</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>1 Person 15 minutes
							(Yamaha FX)</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>2 Persons 15 minutes (Yamaha FX)</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>2 Persons 15
							minutes (Yamaha FX)</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Boat
					Rent</a>
				<h2>Boat Rental</h2>
				<ul>
					<li>
						<h2>40 Horse Power - 30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>40 Horse Power - 30
							minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>40 Horse Power - 60 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>40 Horse Power - 60
							minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>150 Horse Power - 30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>150 Horse Power -
							30 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>150 Horse Power - 60 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>150 Horse Power -
							60 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>200 Horse Power - 30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>200 Horse Power -
							30 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>200 Horse Power - 60 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>200 Horse Power -
							60 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Half-day rental - 40hp, 3 Hours</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Half-day rental -
							40hp, 3 Hours</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Flyboard</a>
				<h2>Flyboard</h2>
				<ul>
					<li>
						<h2>30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>30 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>1 Hour</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>1 Hour</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>3 Hours</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>3 Hours</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Inflatables</a>
				<h2>Inflatables</h2>
				<ul>
					<li>
						<h2>Banana, minimum 3 persons, 10 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Banana, minimum 3
							persons, 10 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Sofas 2,3 or 4 persons, 10 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Sofas 2,3 or 4
							persons, 10 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Fly Fish 2 or 3 persons, 10 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Fly Fish 2 or 3
							persons, 10 minutes</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Pedal
					Boats</a>
				<h2>Pedal Boats</h2>
				<ul>
					<li>
						<h2>Pedal boat without slide, 30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Pedal boat without
							slide, 30 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Pedal boat without slide, 60 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Pedal boat without
							slide, 60 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Pedal boat with slide, 30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Pedal boat with
							slide, 30 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>Pedal boat with slide, 60 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>Pedal boat with
							slide, 60 minutes</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Sea
					Kayak</a>
				<h2>Sea Kayak</h2>
				<ul>
					<li>
						<h2>30 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>30 minutes</a>
						<?php include("price.php"); ?>
					</li>
					<li>
						<h2>60 minutes</h2>
						<a href="#"><i
								class="glyphicon glyphicon-chevron-right"></i>60 minutes</a>
						<?php include("price.php"); ?>
					</li>
				</ul>
			</li>
			<li><a href="#">Crest Photo Memories</a></li>
		</ul>
	</nav>
</div>
</div>
</div>
</div>
<link rel="stylesheet" href="css/jquery.multilevelpushmenu.css">
<link rel="stylesheet" href="css/basichtml.css">
<script type="text/javascript" src="js/jquery.multilevelpushmenu.js"></script>
<script type="text/javascript" src="js/basichtml.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/jquery.simple.timer.js"></script>
</body>
</html>