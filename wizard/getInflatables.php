<?php
require_once("../dbconfig.php");
if ($_POST["id"] > 57 && $_POST["id"] < 90) {
	$sql = "SELECT * FROM inflatables";
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
}
?>