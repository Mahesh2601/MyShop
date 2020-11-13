<?php
    require 'common.php';
	if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>SignUp | MyShop.com</title>
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
		?>
		<div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <?php
                                    if(isset($_GET["m1"])){
                                        echo $_GET['m1'];
                                    }
                                ?>
								<?php
                                    if(isset($_GET["m2"])){
                                        echo $_GET['m2'];
                                    }
                                ?>
							</div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}">
                                <?php
                                    if(isset($_GET["m3"])){
                                        echo $_GET['m3'];
                                    }
                                ?>
							</div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact No" maxlength="10" size="10" name="contact" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <div class="col-sm-10">
                                <p>  Already have an account ?<a href="login.php"> Login</a></p>
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
	    <?php
		    include 'footer.php';
		?>
	</body>
</html>