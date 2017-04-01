<!DOCTYPE> 

<?php
include("functions/functions.php");
?>

<html>
<head>
	<title>My Online Shop</title>

	<link rel="stylesheet" href="styles/style.css" media="all" />	
</head>

<body>

	<!--Main container starts here --> 
	<div class= "main_wrapper">

		<!--Header starts here --> 	
		<div class= "header_wrapper">	
			<img id="logo" src="images/logo.gif"/> 
			<img id="banner" src="images/ad_banner.gif"/> 
		</div>	
		<!--Header ends here --> 

		<!--Navigation Bar starts here --> 
		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a product" / >
					<input type="submit" name="search" value="Search button"/>
				</form>
			</div>

		</div>
		<!--Navigation Bar ends here --> 


		
		<!--Content wrapper starts here --> 
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>

				<ul id="cats">
					<?php getCats(); ?>					
				</ul>

				<div id="sidebar_title">Brands</div>
					<ul id="cats">
					<?php getBrands(); ?>					
					</ul>

			</div>

				<div id="content_area">
					<div id="products_box">
						<?php getPro(); ?>
					</div>
				</div>

		</div


		<div id="footer">
			<h2 style="text-align:center; padding-top:30px;">&copy; 2014 by www.OnlineTutoring.com</h2>
		</div>

	</div> 
<!--Main container ends here --> 


</body>
</html>