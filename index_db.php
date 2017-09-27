<?php
require_once("head.php");
$sql = "SELECT * FROM menu";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-md-offset-2 col-md-4" style="color:white;">
	<form action="activity/add_activity.php">
		<div class="form-group">
			<label>Activity:</label><br/>
			<select id="activity" class="form-control" onChange="getSubmenu(this.value);">
				<option name="name" value=""></option>
				<?php
				foreach ($results as $country) {
					?>
					<option value="<?php echo $country["id"]; ?>"><?php echo $country["menu_name"]; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Submenu:</label><br/>
			<select id="submenu" class="form-control" onChange="getSubtask(this.value);">
				<option name="submenu" value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Subtask:</label><br/>
			<select id="subtask" class="form-control" onChange="getInflatable(this.value);">
				<option name="subtask" value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Inflatables:</label><br/>
			<select name="inflatable" id="inflatable" class="form-control">
				<option value=""></option>
			</select>
		</div>
		<div class="radio">
			<label><input type="radio" name="member" id="member"> Member</label><br>
			<label><input type="radio" name="customer" id="customer"> Customer</label>
		</div>
		<div id="member_form" class="form-group" style="display:none">
			<?php
			$sql = "SELECT * FROM members ORDER BY first_name";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC); ?>
			<label>Member:</label>
			<select class="form-control">
				<?php foreach ($results as $row) { ?>
					<option name="first_name" value="<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></option> <?php } ?>
			</select>
		</div>
		<div id="customer_form" class="form-group">
			<h4>Customer:</h4>
			<label>First name:</label><br>
			<input type="text" class="form-control"><br>
			<label>Last name:</label><br>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM drivers_shippers ORDER BY id";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label><input type="checkbox" id="driver" checked> Driver</label>
			<select id="driver_select" class="form-control">
				<?php foreach ($results as $row) { ?>
					<option name="driver" value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM price";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label>Price:</label>
			<select name="menu" class="form-control">
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
		<div class="form-group">
			<?php
			$sql = "SELECT * FROM payment";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			?>
			<label>Payment:</label>
			<select name="menu" class="form-control">
				<?php foreach ($results as $row) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Price:</label><br>
			<input type="number" class="form-control">
		</div>
		<div class="form-group">
			<label>Start date:</label><br>
			<input readonly name="start" class="form-control" moment-picker="ctrl.dateFormatted" ng-model="ctrl.momentDate" format="YYYY-MM-DD HH:mm:00">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
<script>
    function getSubmenu(val) {
        $.ajax({
            type: "POST",
            url: "wizard/getSubmenu.php",
            data: 'id=' + val,
            success: function (data) {
                $("#submenu").html(data);
            }
        });
    }

    function getSubtask(val) {
        $.ajax({
            type: "POST",
            url: "wizard/getSubtask.php",
            data: 'id=' + val,
            success: function (data) {
                $("#subtask").html(data);
            }
        });
    }

    function getInflatable(val) {
        $.ajax({
            type: "POST",
            url: "wizard/getInflatable.php",
            data: 'id=' + val,
            success: function (data) {
                $("#inflatable").html(data);
            }
        });
    }

    function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
    }
</script>
<script>
    $(document).ready(function () {
        $("#member").click(function () {
            $("#customer_form").hide().value = '';
            $("#member_form").show().value = '';
        });
    });
    $(document).ready(function () {
        $("#customer").click(function () {
            $("#member_form").hide().value = '';
            $("#customer_form").show().value = '';
        });
    });
    $(document).ready(function () {
        $("#driver").click(function () {
            $("#driver_select").toggle().value = '';
        });
    });
</script>
</body>
</html>