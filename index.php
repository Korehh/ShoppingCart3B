<?php  
	$arrProducts = array(
		array(
			'name' 		  => "Sage Green Shirt",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "550",
			'photo1'	  => "product1A.jpg",
			'photo2'	  => "product1B.jpg",
		),
		array(
			'name' 		  => "Gray Shirt",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "550",
			'photo1'	  => "product2A.jpg",
			'photo2'	  => "product2B.jpg",
		),
		array(
			'name' 		  => "White Blazer",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "750",
			'photo1'	  => "product3A.jpg",
			'photo2'	  => "product3B.jpg",
		),
		array(
			'name' 		  => "Dark Blue Polo Shirt",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "600",
			'photo1'	  => "product4A.jpg",
			'photo2'	  => "product4B.jpg",
		),
		array(
			'name' 		  => "Dark Blue Long Sleeves",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "800",
			'photo1'	  => "product5A.jpg",
			'photo2'	  => "product5B.jpg",
		),
		array(
			'name' 		  => "White Long Sleeves",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "800",
			'photo1'	  => "product6A.jpg",
			'photo2'	  => "product6B.jpg",
		),
		array(
			'name' 		  => "Dark Blue Blazer",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "750",
			'photo1'	  => "product7A.jpg",
			'photo2'	  => "product7B.jpg",
		),
		array(
			'name' 		  => "Floral Polo",
			'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
			'price'		  => "650",
			'photo1'	  => "product8A.jpg",
			'photo2'	  => "product8B.jpg",
		),																			
	);
  ?>

<?php
    session_start();
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/shopping-grid-style.css">
  <link rel="stylesheet" href="css/cart.css">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn IT Easy Online Shop | Products </title>
  </head>
  <body>
  <div class="container">
    <br>
    <br>
	    <h1 class="h1 text-left"><i class="fas fa-store"></i> Learn IT Easy Online Shop
	    	<a href="" class="btn btn-primary float-right text-white">
	    		<i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-light">
	    			
	    		</span>
			</a>
		</h1>

	    <hr>
	    <div class="row">
	    <?php foreach ($arrProducts as $arrProduct => $Product): ?>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid2">
	                <div class="product-image2">
	                    <a href="">
	                        <img class="pic-1" src="img/<?php echo $Product['photo1'];?>">
	                        <img class="pic-2" src="img/<?php echo $Product['photo2'];?>">
	                    </a>
	                    <a class="add-to-cart" href=""><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
	                </div>
                    <!-- Product Prices -->	
	                <div class="product-content">
	                    <h3 class="title"><a href=""><?php echo $Product['name'];?></a>
	                    	<span class="price badge text-white"><?php echo " ₱ ".$Product['price'];?></span>
	                    </h3>
	                </div>
	            </div>
	        </div>
	    <?php endforeach;?>  
	    </div>
	</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
  </html>