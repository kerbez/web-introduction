<?php 
	include "../includes/db.php";
	$str =$_POST['data'];
	$q = mysqli_query($connection, "SELECT * FROM `jewel`");
	$ar = array();

	while($jew = mysqli_fetch_assoc($q)){
		$jew["name"] = strtolower($jew["name"]);
		if(substr($jew["name"], 0, strlen($str)) == $str){
			array_push($ar, array($jew['id'],
				$jew['name']
				));
		}
	}
	print_r(json_encode($ar));
 ?>