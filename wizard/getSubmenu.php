<?php
require_once("../dbconfig.php");
$sql = "SELECT * FROM submenu where menu_id= '" . $_POST["id"] . "'";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
	<option value=""></option>
<?php
foreach ($results as $state) {
	?>
	<option value="<?php echo $state["id"]; ?>"><?php echo $state["submenu_name"]; ?></option>
	<?php
}
?>