<?php
	require_once 'connect.php';
	$name = $_POST['name'];
	$mobilenumber = $_POST['mobilenumber'];
	$address = $_POST['address'];
	$password = $_POST['password'];
		$conn->query("UPDATE `customer` SET `name` = '$name', `mobilenumber` = '$mobilenumber', `address` = '$address', `password` = '$password'  WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "customer.php"; 
			</script>
		';	