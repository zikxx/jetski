<?php
include("head.php");
?>
<div class="col-md-4" style="text-align: center;">
	<h2>Add menu</h2>
	<form method="POST" action="add_menu.php">
		<input type="hidden" name="id">
		<div class="form-group">
			<label>Name:</label><input type="text" class="form-control"
									   name="name">
		</div>
		<a href="index.php" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<div class="col-md-4" style="text-align: center;">
	<h2>Add submenu</h2>
	<form method="POST" action="add_submenu.php">
		<input type="hidden" name="id">
		<div class="form-group">
			<label>Name:</label><input type="text" class="form-control"
									   name="name">
		</div>
		<div class="form-group">
			<label>Select parent menu:</label>
			<?php
			$sql = "SELECT * FROM menu";
			$query = $dbh->prepare($sql);
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
<div class="col-md-4" style="text-align: center;">
	<h2>Add submenu</h2>
	<form method="POST" action="add_subtask.php">
		<input type="hidden" name="id">
		<div class="form-group">
			<label>Name:</label><input type="text" class="form-control"
									   name="name">
		</div>
		<div class="form-group">
			<label>Select parent submenu:</label>
			<?php
			$sql = "SELECT * FROM submenu";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<select name="submenu" class="form-control">
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['submenu_name']; ?></option> <?php } ?>
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
</div>
</div>
</body>
</html>