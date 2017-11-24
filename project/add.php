<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="js/add.js" defer></script>
	<script src="main-script.js" defer></script>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<?php 
				include "includes/header.php";
			 ?>
			<div class="alll">
				<p id="p" style="font-weight:bold">Please fill blank</p>
				<table>
			        <tr>
			          <th>Type</th>
			          <th>
			          	<select name="" id="select">
			          		<option value="1">Ring</option>
			          		<option value="2">Pendant</option>
							<option value="3">Bracelet</option>
			          		<option value="4">Earring</option>
			          	</select>
			            <!-- <input name="cat" type="radio">Ring<br>
			            <input name="cat" type="radio">Pendant<br>
			            <input name="cat" type="radio">Bracelet<br>
			            <input name="cat" type="radio">Earring<br> -->
			          </th>
			        </tr>
			        
			        <tr>
			          <th>Name</th>
			          <th><input id="name" type="text" size="40"></th>
			        </tr>
			        <tr>
			          <th>Carat</th>
			          <th><input id="mini" type="text" size="40"></th>
			        </tr>
			        <tr>
			          <th>Price</th>
			          <th><input id="price" type="text" size="40"></th>
			        </tr>
			        <tr>
			          <th>Description</th>
			          <th><textarea id="description" name="comment" cols="41" rows="5"></textarea></th>
			        </tr>
			        <tr>
			          <th>Phone</th>
			          <th><input id="telephone" type="text" size="40"></th>
			        </tr>

			        <tr>
			          <th>Upload Image</th>
			          <th>
			          	<input type="file" id="upload">
			          </th>
			        </tr>
			        <tr>
			          <th rowspan="2" colspan="2">
			          	<button id="save">Save</button>
			          </th>
			        </tr>
			        
			        
			        
			     </table>
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