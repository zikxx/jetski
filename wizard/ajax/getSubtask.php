<?php
/**
 * Created by PhpStorm.
 * User: Zires
 * Date: 26-Sep-17
 * Time: 11:17 PM
 */
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST["id"])) {
	$query = "SELECT * FROM subtask WHERE submenu_id = '" . $_POST["id"] . "'";
	$results = $db_handle->runQuery($query);
	?>
	<option value=""></option>
	<?php
	foreach ($results as $subtask) {
		?>
		<option value="<?php echo $subtask["id"]; ?>"><?php echo $subtask["subtask_name"]; ?></option>
		<?php
	}
}
?>