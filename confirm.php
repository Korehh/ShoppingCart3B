<?php
    session_start();
	if (isset($_POST['cartb'])) {
        //session_destroy();
		header('location: cart.php');

	}
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
    <title>Learn IT Easy Online Shop | Confirm</title>
</head>
<body>

<div class="container">
		<form method="post">	
		    <h3 class="h3 text-left"><i class="fas fa-store"></i> Learn IT Easy Online Shop
		    	<a href="cart.php" class="btn btn-primary float-right text-white">
		    		<i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-light">
		    			<?php if (empty($_SESSION['totalqty'])) {
		    				echo 0;
		    			}	
		    				else{
		    					echo $_SESSION['totalqty'];
		    				}?>
		    		</span>
				</a>
			</h3>

		    <hr>
		    <div class="row">
		        <div class="col-sm-12">
		        	<h3>Product Successfully Added to the Cart, what do you want to do next?</h3>
		        	<button type="submit" name="cartb" class="btn btn-lg button"><i class="fa-solid fa-cart-shopping"></i> View Cart</button>
		        	<a href="index.php" class="btn btn-danger btn-lg text-white"><i class="fa-solid fa-bag-shopping"></i> Continue Shopping</a>
		        </div> 
		    </div>
		</form>    
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>