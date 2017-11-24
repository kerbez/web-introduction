<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="main-script.js" defer></script>
	<script src="js/delete.js" defer></script>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<?php include "includes/header.php" ?>
			<div class="all">
				<?php 
					$q = mysqli_query($connection, "SELECT * FROM `jewel`");
				 ?>
				
				<div class="cards" style="display:flex; justify-content:space-around;flex-wrap:wrap">
					<?php while($jew = mysqli_fetch_assoc($q)) {?>
					<div class="card">
						<img src="<?php echo $jew['image_path'] ?>">
						<a href="jewel.php?id=<?php echo $jew['id'] ?>"><?php echo $jew['name'] ?></a>
						<p><?php echo $jew['mini'] ?></p>
						<img class="del" src="img/basket.png">
						<div class="none" style="display:none"><?php echo $jew['id'] ?></div>
					</div>
					<?php } ?>

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