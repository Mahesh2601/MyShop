<?php
    require 'common.php';
	if (isset($_GET['id']) && is_numeric($_GET['id'])) {
		$item_id = $_GET['id'];
        $user_id = $_SESSION['user_id'];
	    $insert_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
	    mysqli_query($con, $insert_query) or die(mysqli_error($con));
	    header('location: products.php');
	}
?>