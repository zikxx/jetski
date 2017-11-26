<?php
include("head.php");
?>
<div style="color:white;">
	<div class="col-md-3" style="text-align: center;">
		<h2>Add menu</h2>
		<form method="POST" action="functions/addMenu.php">
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Name:</label><input type="text" class="form-control"
										   name="name">
			</div>
			<a href="index.php" class="btn btn-default">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-3" style="text-align: center;">
		<h2>Add submenu</h2>
		<form method="POST" action="functions/addSubmenu.php">
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Name:</label><input type="text" class="form-control"
										   name="name">
			</div>
			<div class="form-group">
				<label>Select parent menu:</label>
				<?php
				$sql = "SELECT * FROM menu";
				$query = $conn->prepare($sql);
				$query->execute();
				$results = $query->fetchAll(PDO::FETCH_ASSOC);
				?>
				<select name="menu" class="form-control">
					<?php foreach ($results as $row) { ?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['menu_name']; ?></option> <?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Price:</label><input type="text" class="form-control"
											name="price">
			</div>
			<a href="index.php" class="btn btn-default">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-3" style="text-align: center;">
		<h2>Add subtask</h2>
		<form method="POST" action="functions/addSubtask.php">
			<div class="form-group">
				<label>Name:</label><input type="text" class="form-control"
										   name="name">
			</div>
			<div class="form-group">
				<label>Activity:</label><br>
				<select name="name" id="activity" class="form-control" onChange="getSubmenu(this.value);">
					<option value=""></option>
					<?php
					foreach ($results as $menu) {
						?>
						<option value="<?php echo $menu["id"]; ?>"><?php echo $menu["menu_name"]; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Submenu:</label><br/>
				<select name="submenu" id="submenu" class="form-control" onChange="getSubtask(this.value);">
					<option value=""></option>
				</select>
			</div>
			<div class="form-group">
				<label>Price:</label><input type="text" class="form-control"
											name="name">
			</div>
			<a href="index.php" class="btn btn-default">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-3" style="text-align: center;">
		<h2>Add inflatable</h2>
		<form method="POST" action="functions/addSubtask.php">
			<div class="form-group">
				<label>Name:</label><input type="text" class="form-control"
										   name="name">
			</div>
			<div class="form-group">
				<label>Activity:</label><br>
				<select name="name" id="activity" class="form-control" onChange="getSubmenu(this.value);">
					<option value=""></option>
					<?php
					foreach ($results as $menu) {
						?>
						<option value="<?php echo $menu["id"]; ?>"><?php echo $menu["menu_name"]; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Submenu:</label><br/>
				<select name="submenu" id="submenu" class="form-control" onChange="getSubtask(this.value);">
					<option value=""></option>
				</select>
			</div>
			<div class="form-group">
				<label>Subtask:</label><br/>
				<select name="subtask" id="subtask" class="form-control" onChange="getInflatable(this.value);">
					<option value=""></option>
				</select>
			</div>
			<div class="form-group">
				<label>Price:</label><input type="text" class="form-control"
											name="name">
			</div>
			<a href="index.php" class="btn btn-default">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</div>
</div>
</body>
</html>