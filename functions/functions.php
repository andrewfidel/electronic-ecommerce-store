<?php

//localhost, username, password, database name
$con = mysqli_connect("localhost","root","","ecommerce");


//getting the categories

function getCats(){

	global $con;

	//local variables are initialied with '$'
	//* means all
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con, $get_cats);

	//fetches all records in the table
	while ($row_cats = mysqli_fetch_array($run_cats)){
		
		//local vars
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];

		//gets category title dynamically from table 
		echo "<li><a href='#'>$cat_title</a></li>";

	}
}

//getting the brands

function getBrands(){

	global $con;

	//local variables are initialied with '$'
	//* means all
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($con, $get_brands);

	//fetches all records in the table
	while ($row_brands = mysqli_fetch_array($run_brands)){
		
		//local vars
		$brand_id = $row_brands['brand_id'];
		$brand_title = $row_brands['brand_title'];

		//gets brand title dynamically from table 
		echo "<li><a href='#'>$brand_title</a></li>";

	}
}

?>
