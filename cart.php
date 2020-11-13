<?php
    require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>index</title>
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
		<div class="container" id="content">
		    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
					    <?php
                            $sum = 0;
                            $user_id = $_SESSION['user_id'];
                            $select_query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
                            $select_query_result = mysqli_query($con, $select_query)or die($mysqli_error($con));
                            if (mysqli_num_rows($select_query_result) >= 1) {
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($select_query_result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                            ?>
                        </tbody>
						    <?php
                               } else {
                               echo "<center><h2>Add items to the cart first!</h2></center>";
                               }
                            ?>
                        
                    </table>
                </div>
            </div>
		</div>
		<?php
		    include 'footer.php';
		?>
	</body>
</html>