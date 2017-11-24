<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<?php 
				include "includes/header.php";
			 ?>
			<div class="alll">




				<?php

					$q = mysqli_query($connection, "SELECT * FROM `categories`");
					while($cat = mysqli_fetch_assoc($q)){?>
						<div class="part" style="background-image: url('<?php echo $cat["bg_img"] ?>'); background-repeat: no-repeat; background-size:100% 100%;background-color:rgba(100, 100, 100, 0.5)">
							<div class="inf" style="background-color:rgba(250, 250, 250, 0.5)">
								<?php $r = $cat["title"] ?>
								<a href="cat.php?id=<?php echo $cat["id"] ?>"><?php echo $r."s" ?></a>
								<p> <?php echo $cat["description"] ?></p>
							</div>
							<div class="cards" >
								<?php  
									$j = mysqli_query($connection, "SELECT * FROM `jewel` where `categories_id` = ".$cat["id"]);
									$i = 1;
									while($jew=mysqli_fetch_assoc($j)){?>
										<div class="card" style="background-color: white" >
												<img src="img/<?php echo $r.$i?>.jpg" style="width:70%;">
												<a href="jewel.php?id=<?php echo $jew['id'] ?>"> <?php echo $jew["name"] ?></a>
												<p> <?php echo $jew["mini"] ?></p>
										</div>
										
										<?php
										$i++;
									}?>
							</div>
							<hr>
						</div>
						<?php
					}
				?>
				






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

	
<script type="text/javascript" src="main-script.js" defer></script>
</body>
</html>