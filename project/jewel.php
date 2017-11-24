<?php $id = $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="all.css">
	<script type="text/javascript" src="main-script.js" defer></script>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<?php 
				include "includes/header.php";
				$j = mysqli_query($connection, "SELECT * FROM `jewel` where `id` = ".$id); 
				$jew = mysqli_fetch_assoc($j);
			 ?>
			<div class="all">
				<div class="half">
			        <img class="bigimg" src="<?php echo $jew["image_path"] ?>">
			        
			    </div>
			    <div class="half_2">
			        <h1><?php echo $jew["name"] ?></h1>
			        <p><?php echo $jew["mini"] ?></p>
			        <p><?php echo $jew["price"] ?> KZT</p>
			        <h3>Description</h3>
			        <p><?php echo $jew["description"] ?></p>
			        <div class="take">
			          <p>Phone: <?php echo $jew["telephone"] ?></p>
			          <a class="buy">Buy</a>
		        </div>
			</div>
		</div>
				<hr>
		<div class="footer">
			<p>Find us on</p>
			<div class="links">
				<a href="https://www.facebook.com/"><img src="img/face.png"></a>
				<a href="https://www.vk.com/"><img src="img/vk.png"></a>
				<a href="https://www.instagram.com/"><img src="img/ins.png"></a>
			</div>
		</div>
	</div>

	
</body>
</html>