<?php
require_once("../head.php");
$sql = "SELECT * FROM menu";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="page">
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
			<select name="subtask" id="subtask" class="demoInputBox" onChange="getInflatable(this.value);">
				<option value=""></option>
			</select>
		</div>
		<div class="row">
			<label>Inflatables:</label><br/>
			<select name="inflatable" id="inflatable" class="demoInputBox">
				<option value=""></option>
			</select>
		</div>
	</div>
</div>
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

    function getInflatable(val) {
        $.ajax({
            type: "POST",
            url: "getInflatable.php",
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
</body>
</html>