<?php 
	include "../includes/db.php";
	$cat_name =$_POST['data'];
	$ar = array();
	$q = mysqli_query($connection, "SELECT * FROM `categories`");	
	$t = mysqli_query($connection, "SELECT jewel.name, jewel.id, categories.title
									FROM jewel
									INNER JOIN categories ON jewel.categories_id = categories.id;");

	while($tt = mysqli_fetch_assoc($t)){

		if($tt["title"]==$cat_name){
			array_push($ar, array($tt['id'],
				$tt['name']
				));
		}
	}
	print_r(json_encode($ar));
	/*while($qq = mysqli_fetch_assoc($q)){
		if($qq['name']==$cat_name){
			$id = $qq['id'];
		}
	}
	$j = mysqli_query($connection, "SELECT * FROM `jewel` where `categories_id` = ".(int)$id);
	while($jew = mysqli_fetch_assoc($j)){
			array_push($ar, array($jew['id'],
				$jew['name']
				));
	}
	print_r(json_encode($ar));*/
 ?>