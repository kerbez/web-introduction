
<?php 
	include "../includes/db.php";
	$data = $_POST['data'];
	$data = split(",", $data);
	$cat = $data[0];
	$name = $data[1];
	$mini = $data[2];
	$price = $data[3];
	$des = $data[4];
	$telephone = $data[5];
	$img = $data[6];
	$q = mysqli_query($connection, "INSERT INTO `jewel` (`name`, `mini`, `price`, `description`, `telephone`, `image_path`, `categories_id`) VALUES 
		('$name', '$mini' ," . (int)$price . ", '$des', '$telephone' , '$img', " . (int)$cat . ")");
	if($q) {
		echo "Successfully added";
		exit();
	}
	else {
		echo "error";
	}
 ?>