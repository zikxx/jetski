<?php
include("head.php");
require("functions/dashboardClass.php");
?>
<form action="generateDaily.php" method="POST">
	<div class="col-md-offset-4 col-md-4" style="color:white;">
		<label>Export data for date:</label>
		<div class="input-group date form_datetime" data-link-field="dtp_input1">
			<input id="dashboardDate" name="start" class="form-control" type="text" value="" readonly>
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
		<br>
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</form>
<div class="col-md-12" style="text-align: center;">
	<?php
	dashboard("Centurion", '');
	dashboard("Mastercraft", '');
	dashboard("Othello", '');
	dashboard("Windsurfing", '');
	dashboard("Fishing boat", '');
	dashboard("Yacht", '');
	dashboard("Other", '');
	?>
</div>
</div>
</div>
</body>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        weekStart: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        format: 'yyyy-mm-dd',
        pickerPosition: 'bottom-left',
        todayBtn: 1,
        minView: 2
    });
</script>
</html>