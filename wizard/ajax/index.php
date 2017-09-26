<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query = "SELECT * FROM menu";
$results = $db_handle->runQuery($query);
?>
<html>
<head>
	<TITLE>jQuery Dependent DropDown List - Countries and States</TITLE>
	<style>
		body {
			width: 610px;
			font-family: calibri;
		}

		.frmDronpDown {
			border: 1px solid #7ddaff;
			background-color: #C8EEFD;
			margin: 2px 0px;
			padding: 40px;
			border-radius: 4px;
		}

		.demoInputBox {
			padding: 10px;
			border: #bdbdbd 1px solid;
			border-radius: 4px;
			background-color: #FFF;
			width: 50%;
		}

		.row {
			padding-bottom: 15px;
		}
	</style>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>
        function getSubmenu(val) {
            $.ajax({
                type: "POST",
                url: "getSubmenu.php",
                data: 'id=' + val,
                success: function (data) {
                    $("#submenu").html(data);
                }
            });
        }

        function getSubtask(val) {
            $.ajax({
                type: "POST",
                url: "getSubtask.php",
                data: 'id=' + val,
                success: function (data) {
                    $("#subtask").html(data);
                }
            });
        }

        function selectCountry(val) {
            $("#search-box").val(val);
            $("#suggesstion-box").hide();
        }
	</script>
</head>
<body>
<div class="frmDronpDown">
	<div class="row">
		<label>Activity:</label><br/>
		<select name="activity" id="activity" class="demoInputBox" onChange="getSubmenu(this.value);">
			<option value=""></option>
			<?php
			foreach ($results as $country) {
				?>
				<option value="<?php echo $country["id"]; ?>"><?php echo $country["menu_name"]; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="row">
		<label>Submenu:</label><br/>
		<select name="submenu" id="submenu" class="demoInputBox" onChange="getSubtask(this.value);">
			<option value=""></option>
		</select>
	</div>
	<div class="row">
		<label>Subtask:</label><br/>
		<select name="subtask" id="subtask" class="demoInputBox">
			<option value=""></option>
		</select>
	</div>
</div>
</body>
</html>