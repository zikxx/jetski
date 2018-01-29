<?php
require_once("../dbconfig.php");
$sql = "SELECT * FROM submenu WHERE menuId= '" . $_POST["id"] . "'";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC); ?>
	<option selected="true" disabled="disabled">Select submenu...</option>
<?php
foreach ($results as $submenu) {
	?>
	<option value="<?php echo $submenu["id"]; ?>"><?php echo $submenu["submenuName"]; ?></option>
	<?php
}
?>