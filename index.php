<?php
// izmenjen dashboard - start i finish stavljeni prvo
require("head.php");
require("dashboardClass.php");
?>
<div id="page">
	<div style="text-align: center;"><a href="activity.php" class="btn btn-success">Add new activity</a></div>
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
</div>
</body>
</html>
