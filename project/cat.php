<?php $id = $_GET['id']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="main-script.js" defer></script>
</head>
<body class="aha">
	<div class="wrapper">
		<div class="content">
			<?php 
				include "includes/header.php";
			 ?>
			<div class="all">
				<?php 
					$q = mysqli_query($connection, "SELECT * FROM `categories`");
					//$cat=mysqli_fetch_assoc($q)
					while($cat=mysqli_fetch_assoc($q)){
						if($cat["id"] == $id){
							$n = $cat["title"];
						}
					}

					//$j = mysqli_query($connection, "SELECT * FROM `jewel` where `categories_id` = ".$id); 
					?>
				<div class="inf">
					<a ><?php echo $n ?></a>
					<p>Our rings promise timeless elegance with a contemporary twist. Indulge in our selection of gold and diamond rings from various collections such as Chopardissimo, IMPERIALE or Happy Diamonds and find your very own favourite jewellery piece.</p>
				</div>
				<?php for($i = 1; $i <=3; $i++){ 

					$j = mysqli_query($connection, "SELECT * FROM `jewel` where `categories_id` = ".$id); ?>
					<div class="cards">
						<?php $k = 1;
						while($jew = mysqli_fetch_assoc($j)){ ?>
							<div class="card">
								<img src="img/<?php echo $n.$k ?>.jpg">
								<a href="jewel.php?id=<?php echo $jew["id"] ?>"><?php echo $jew["name"] ?></a>
								<p style="font-size:11px;"><?php echo $jew["mini"] ?></p>
							</div>
						<?php $k++;} ?>
					</div>
					<hr>
				<?php } ?>
				
				
				
			</div>
		</div>
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