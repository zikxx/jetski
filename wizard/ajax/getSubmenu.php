<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["id"])) {
	$query ="SELECT * FROM submenu WHERE menu_id = '" . $_POST["id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value=""></option>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["id"]; ?>"><?php echo $state["submenu_name"]; ?></option>
<?php
	}
}
?>