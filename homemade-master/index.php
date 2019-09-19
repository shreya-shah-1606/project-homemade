<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css"  href="index.css">
	<!--<link rel="import" href="header.html">-->
	<title> Homemade </title>
</head>
<body>
	 <!-- <object type="text/html" data="header.html" width="1510px" height="70px"></object> -->
	 <?php 
	 if(!isset($_SESSION['login_session']))
	 {			
			include('header.html'); 		
	 }
	 else
	 {
			include('headerlogout.html'); 
	 }	
	?>	 
	 <style><?php include 'index.css'; ?></style>
	<div class="outer">
		<div class="innerhead"> Jewelery </div>
		<div class="innermain">
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Necklace set </a> </div>
				<div class="inner2"> 
					<img src="img/earringsnecklace.jpg" class="inner2">
				</div>
			</div>
			<div class="innouter float">
				<div class="inner1 font"> <a href="ring.php" class="font"> Rings </a> </div>
				<div class="inner2">
					<img src="img/ring.jpg" class="inner2">
				</div>
			</div>
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Bracelets, anklets </a> </div>
				<div class="inner2">
					<img src="img/bracelet.jpg" class="inner2">
				</div>
			</div>
		</div>

		<div class="innerhead"> Handicraft </div>
		<div class="innermain">
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Pottery </a></div>
				<div class="inner2"> 
					<img src="img/pottery.jpg" class="inner2">
				</div>
			</div>
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Home Decor </a></div>
				<div class="inner2">
					<img src="img/homedecor.jpg" class="inner2">
				</div>
			</div>
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Toran </a></div>
				<div class="inner2">
					<img src="img/toran.jpg" class="inner2">
				</div>
			</div>
		</div>

		<div class="innerhead"> Snacks </div>
		<div class="innermain">
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Khakhra </a></div>
				<div class="inner2"> 
					<img src="img/khakhra.jpg" class="inner2">
				</div>
			</div>
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Papad </a></div>
				<div class="inner2">
					<img src="img/papad.jpg" class="inner2">
				</div>
			</div>
			<div class="innouter float">
				<div class="inner1 font"> <a href="" class="font"> Mathiya </a></div>
				<div class="inner2">
					<img src="img/mathiya.jpg" class="inner2">
				</div>
			</div>
		</div>
</div>


</body>
</html>
