<?php 
	include "../includes/db.php";
	$id = $_POST['data'];
	$q = mysqli_query($connection, "DELETE FROM `jewel` WHERE `id` = " . (int)$id);
	if($q) {
		echo "1";
	}
	else {
		echo "error";
	}
 ?>