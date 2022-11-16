<?php
    include('products.php');	
?>
<!--  I created a separate file for $arrProducts -->
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/shopping-grid-style.css">
  <link rel="stylesheet" href="css/cart.css">
<head>
	<title>Learn IT Easy Online Shop | Details</title>
</head>
<body>
	<div class="container">
		<form method="post">	
		    <h3 class="h3 text-left"><i class="fas fa-store"></i> Learn IT Easy Online Shop
		    	<a href="" class="btn btn-primary float-right text-white">
		    		<i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-light">
		    			<?php if (empty($_SESSION['Totalqty'])) {
		    				echo 0;
		    			}	
		    				else{
		    					echo $_SESSION['Totalqty'];
		    				}?>
		    		</span>
				</a>
			</h3>

		    <hr>
		    <div class="row">
		        <div class="col-md-4 col-sm-6">
		            <div class="product-grid2">
		                <div class="product-image2">
		                        <img class="pic-1" height="60%" src="img/<?php echo $arrProducts[$_GET['name']]['photo1'];?>">
		                        <img class="pic-2" height="60%" src="img/<?php echo $arrProducts[$_GET['name']]['photo2'];?>">
		                </div>
		            </div>
		        </div>
		        <div class="col-md-8 col-sm-6">
		        	<h3><?php echo $arrProducts[$_GET['name']]['name'];?></h3>
		        	<p><?php echo $arrProducts[$_GET['name']]['description'];?></p>
		        	
		        	<hr>
		        	<h3>Select Size: </h3>
		        	<input type="radio" name="radSize" id="radsizeXS" value="XS" checked>
		        	<label for="radsizeXS">XS</label>
		        	<input type="radio" name="radSize" id="radsizeSM" value="SM">
		        	<label for="radsizeSM">SM</label>
		        	<input type="radio" name="radSize" id="radsizeMD" value="MD">
		        	<label for="radsizeMD">MD</label>
		        	<input type="radio" name="radSize" id="radsizeLG" value="LG">
		        	<label for="radsizeLG">LG</label>
		        	<input type="radio" name="radSize" id="radsizeXL" value="XL">
		        	<label for="radsizeXL">XL</label>

		        	<hr>
		        	<h3>Enter Quantity: </h3>
		        	<input type="number" name="quantity" min="1" max="100" value="0">
		        	<br><br>
		        	<button type="submit" name="confirm" class="button btn btn-lg"><i class="far fa-check-circle"></i> Confirm Product Purchase</button>
		        	<a href="index.php" class="btn btn-danger btn-lg text-white">Cancel/Go Back</a>
		        </div> 
		    </div>
		</form>    
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>