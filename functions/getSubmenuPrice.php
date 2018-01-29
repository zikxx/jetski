<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 29-Jan-18
 * Time: 9:12 PM
 */
require_once("../dbconfig.php");
$sql = "SELECT * FROM submenu WHERE id= '" . $_POST["id"] . "'";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $price) {
	?>
	<option value="<?php echo $price["price"]; ?>"><?php echo $price["price"]; ?></option>
	<?php
}
?>