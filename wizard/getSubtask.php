<?php
/**
 * Created by PhpStorm.
 * User: Zires
 * Date: 26-Sep-17
 * Time: 11:17 PM
 */
require_once("../dbconfig.php");
if ($_POST["id"] > 43 && $_POST["id"] < 48) {
	$_POST["id"] = 48;
}
$sql = "SELECT * FROM subtask where submenu_id = '" . $_POST["id"] . "'";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
	<option value=""></option>
<?php
foreach ($results as $subtask) {
	?>
	<option value="<?php echo $subtask["id"]; ?>"><?php echo $subtask["subtask_name"]; ?></option>
	<?php
}
?>