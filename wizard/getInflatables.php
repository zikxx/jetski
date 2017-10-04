<?php
/**
 * Created by PhpStorm.
 * User: Zires
 * Date: 27-Sep-17
 * Time: 6:49 PM
 */
require_once("../dbconfig.php");
$sql = "SELECT * FROM inflatables WHERE subtask_id = = '" . $_POST["id"] . "'";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
	<option value=""></option>
<?php
foreach ($results as $inflatables) {
	?>
	<option value="<?php echo $inflatables["id"]; ?>"><?php echo $inflatables["inflatable_name"]; ?></option>
	<?php
}
?>