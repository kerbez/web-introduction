<?php 
	include "/db.php";
	$q = mysqli_query($connection, "SELECT * FROM `categories`");
 ?>
 `<script src="js/search.js" defer></script>
 `<script src="js/sliding.js" defer></script>

<div class="header" >
				<a href="admin.php"><img style="z-index:1" class="prof" src="img/profile.png"></a>
				<a href="add.php"><img style="z-index:1" class="add" src="img/add.png"></a>

				<div class="slideshow-container">
					<div class = "MySlides fade">
						<img src="img/slide3.jpg" style="width: 100%">
					</div>

					<div class = "MySlides fade">
						<img src="img/slide2.jpg" style="width: 100%">
					</div>

					<div class = "MySlides fade">
						<img src="img/slide1.jpg" style="width: 100%">
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094</a>
					<a class="next" onclick="plusSlides(1)">&#10095</a>

					<div style="text-align: center;">
						<span class="dot dots" onclick="currentSlide(1)"></span>
						<span class="dot dotss" onclick="currentSlide(2)"></span>
						<span class="dot dotsss" onclick="currentSlide(3)"></span>
						
					</div>
				</div>	

				<br>

				<div class="menu">
					<ul >
						<li><a href="/" >Main</a></li>
						<?php 
							while($cat=mysqli_fetch_assoc($q)){
								?>
									<li  class="menu_cat" style="position:relative">
										<a class="a" href="cat.php?id=<?php echo $cat["id"] ?>"><?php echo $cat["title"] ?></a>
										<p class="p" style="cursor:pointer;width:20px;border-radius:5px; background:rgb(150, 150, 150); display:inline-block">+</p>
										<div class="sliding_menu" style="border:1px solid black;display:flex; flex-direction:column; position:absolute;z-index:20">
											
										</div>
									</li>
								<?php  
							}
						 ?>
						 <li><div style="width:100%; position:relative">
						 	<input style="width:100%" type="none" placeholder="search" id="search"><div class="search" style="border:1px solid gray;display:flex;flex-direction:column;width:100%; position:absolute";></div>
						 </div></li>
					</ul>
				</div>
			</div>