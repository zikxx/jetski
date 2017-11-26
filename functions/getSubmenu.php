<?php
require_once("../dbconfig.php");
$sql = "SELECT * FROM submenu WHERE menu_id= '" . $_POST["id"] . "'";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
	<option value=""></option>
<?php
foreach ($results as $submenu) {
	?>
	<option value="<?php echo $submenu["id"]; ?>"><?php echo $submenu["submenu_name"]; ?></option>
	<?php
}
?>