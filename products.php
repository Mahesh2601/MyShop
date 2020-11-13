<?php
    require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Grocery | MyShop.com</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		    body{
			    width: 100%;
                height: 100%;
			}
			#content{
				padding-top:100px;
				padding-bottom:50px;
			}
			footer {
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
            }
		</style>
	</head>
	<body>
	    <?php
		    include 'header.php';
			include 'check_if_added.php';
		?>
		<div class="jumbotron text-center">
		    <h2>Welcome to My Shop!</h2>
			<p>Here is your Grocery.</p>
		</div>
		<div class="row text-center">
		   <div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://grahnibazzar.in/wp-content/uploads/2019/11/274145_8-fortune-sunflower-refined-oil.png" alt="Sunflower oil">
                        <div class="caption">
                            <h3>Fortune Sunflower Oil (1 lt)</h3>
                            <p>Price: Rs. 110.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(1)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
			<div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://4.imimg.com/data4/PP/PP/GLADMIN-/ashirwad-wheat-flour-500x500.jpg" alt="Wheat flour">
                        <div class="caption">
                            <h3>Wheat flour (1 kg)</h3>
                            <p>Price: Rs. 30.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(2)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
			<div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://images-na.ssl-images-amazon.com/images/I/61JZFof1tkL._SL1200_.jpg" alt="Chilli Powder">
                        <div class="caption">
                            <h3>Chilli Powder (0.5 kg)</h3>
                            <p>Price: Rs. 50.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(3)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
			<div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://images-na.ssl-images-amazon.com/images/I/61VASI018mL._SX425_.jpg" alt="Salt">
                        <div class="caption">
                            <h3>Salt (0.5 kg)</h3>
                            <p>Price: Rs. 10.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(4)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
		</div>
		<div class="row text-center">
		   <div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://images-na.ssl-images-amazon.com/images/I/717-vZHlvdL._SL1500_.jpg" alt="Shampoo">
                        <div class="caption">
                            <h3>Head and Shoulders (950 ml)</h3>
                            <p>Price: Rs. 80.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(5)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
			<div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://images-na.ssl-images-amazon.com/images/I/61cH7omZryL._SL1000_.jpg" alt="Paste">
                        <div class="caption">
                            <h3>Colgate Paste (Combo)</h3>
                            <p>Price: Rs. 50.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(6)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
			<div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://images-na.ssl-images-amazon.com/images/I/817bKgcDoeL._SX569_.jpg" alt="Horlicks">
                        <div class="caption">
                            <h3>Horlicks (0.5 kg)</h3>
                            <p>Price: Rs. 220.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(7)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
			<div class="col-md-3 ">
		        <div class="thumbnail">
				    <img src="https://images-na.ssl-images-amazon.com/images/I/61rDJVoKpeL._SL1000_.jpg" alt="Surf Excel">
                        <div class="caption">
                            <h3>Surf Excel (2 kg)</h3>
                            <p>Price: Rs. 110.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    } else {
                                    if (check_if_added_to_cart(8)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                    <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php } } ?>
                        </div>
				</div>
			</div>
		</div>
		<?php
		    include 'footer.php';
		?>
	</body>
</html>