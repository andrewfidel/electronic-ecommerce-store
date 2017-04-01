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

function getPro(){

    if(!isset($_GET['cat'])){
        if(!isset($_GET['brand'])){
   		 global $con;
        	$get_pro="select * from products order by RAND() LIMIT 0,6";
        	$run_pro=mysqli_query($con,$get_pro);
        	while($row_pro=mysqli_fetch_array($run_pro)){
            	$pro_id=$row_pro['product_id'];
            	$pro_cat=$row_pro['product_cat'];
            	$pro_brand=$row_pro['product_brand'];
            	$pro_title=$row_pro['product_title'];
            	$pro_price=$row_pro['product_price'];
            	$pro_image=$row_pro['product_image'];

            	echo "<div id='single_product'>
            	
                    <h3>$pro_title</h3>
                    <img src='admin_area/product_images/$pro_image' width='180' height='180' />

                    <p><b>Price: $ $pro_price</b></p>
                    
                    <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>

                    <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>

                    </div>";
        	}
		}
	}
}




?>
