<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Home | MyShop.com</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		    body{
			    width: 100%;
                height: 100%;
		    }
		    #content{
				min-height=600px;
			}
			#banner_image{
				padding-bottom:100px;
				text-align: center;
                color: #f8f8f8;
                background: url("https://miro.medium.com/max/1000/1*FutMYXlzHC5xNLeLXuHoww.jpeg") no-repeat center center;
                background-size: cover;
			}
			#banner_content {
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0, 0, 0, 0.7);
                max-width: 660px;
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
		?>
		<div id="content">
		    <div id="banner_image">
			    <div class="container">
				    <center>
					    <div id="banner_content">
                            <h1>We sell Grocery.</h1>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
					</center>
				</div>
			</div>
		</div>
		<?php
		    include 'footer.php';
		?>
	</body>
</html>